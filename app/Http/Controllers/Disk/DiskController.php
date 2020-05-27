<?php

namespace App\Http\Controllers\Disk;

use App\Http\Controllers\Controller;
use App\Models\Accesse;
use App\Models\File;
use App\Models\Folder;
use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Files\FileController;
use ZipArchive;


class DiskController extends Controller
{
    public function index()
    {
        // $folders = Folder::whereNull('folder_id')
        // ->with('childrenFolders')
        // ->get();
        // dd($folders);
// dd(Auth::id());
        $files = File::with('user')
            ->with('link')
            ->where('user_id',Auth::id())
            ->where('folder_id', null)
            ->where('status_id', '!=' , 2)
            ->get();

        $folders = Folder::with('user')
            ->where('user_id',Auth::id())
            ->where('folder_id', null)
            ->where('status_id', '!=' , 2)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders
        ];

        return response()->json($data, 200);
    }

    public function show($id)
    {
        $files = File::with('user')
            ->where('user_id', Auth::id())
            ->where('folder_id', $id)
            ->where('status_id',1)
            ->get();
        $folders = Folder::with('user')
            ->where('user_id', Auth::id())
            ->where('folder_id', $id)
            ->where('status_id',1)
            ->get();

        $data = [
            'files'=> $files,
            'folders' => $folders,
        ];

        return response()->json($data, 200);
    }

    public function upload(Request $request)
    {   
        $data = [];
        $userId = Auth::user()->id;
        $item = $request->file;
        $fileOriginalName = $item->getClientOriginalName();   
        $fileName = pathinfo($fileOriginalName, PATHINFO_FILENAME);
        $fileExtension = pathinfo($fileOriginalName, PATHINFO_EXTENSION );
        $filePath = $request->request;
        $parameters = $request->request->all()['baseUrl'] ?? '' ;

        // dd($fileName);

        $data['name'] = $fileName;
        $data['size'] = $item->getSize();
        $data['extension'] = $fileExtension;
        $data['patch'] = $item->store('/'.$userId);
        $data['user_id'] =  Auth::user()->id;
        $data['status_id'] = 1;
        // dd($request);

        $file = File::create( $data );
        return response()->json($this->index(), 200);
    }

    public function download(Request $request)
    {   
//         dd($request->id);
        $fileId = $request->id;
        $file = File::find($fileId);

        $headers = [
              'Type' => $file->extension,
              'name' => $file->name,
           ];

        // dd($file);
        return Storage::disk('files')->download($file->patch, $file->name.'.'.$file->extension, $headers);

    }

    public function addLinks(Request $request)
    {
        $file = File::where('id', $request->file_id) -> first();

        $link = Link::create([
            'patch' => md5($file->name.$file->id),
            'folder_id' => null,
            'file_id' => $request->file_id,
        ]);

        if($request->curent_folder == null) {
            return $this->index();
        }

        return $this->show($request->curent_folder);
    }

    public function removeLinks(Request $request)
    {
        $link = Link::where("file_id",$request->file_id)->first();
        $link->delete();

        if($request->curent_folder == null) {
            return $this->index();
        }

        return $this->show($request->curent_folder);
    }

    public function showFileLink($patch)
    {
        $link = Link::where("patch", $patch)->first();
        if($link) {
            $file = File::where("id",$link->file_id)->first();
            $file->size = $this->formatBytes($file->size);
            return view('disk.link', compact('file'));
        }

        return view('disk.link');
    }

    public function showAccesses($id)
    {
        $accesses = Accesse::with('user')->where('file_id',$id)->get();

        return response()->json($accesses, 200);
    }

    public function removeAccesses($id)
    {
        $accesse = Accesse::with('user')->where('id',$id)->first();
        $accesse->delete();
        $accesses = Accesse::with('user')->where('id',$id)->get();

        return response()->json($accesses, 200);
    }

    public function addAccesses(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user) {
            $accesse = Accesse::create([
                'folder_id' => null,
                'user_id' => $user->id,
                'file_id' => $request->file_id,
            ]);

            return $this->showAccesses($request->file_id);
        }
        $message = "Пользователь не найден";

        return response()->json($message, 400);
    }

    public function stats($email)
    {
        $user = User::with('files')->where('email', $email)->first();
        if($user) {
            $sizeDisk = "15GB";
            $usingSize = $this->formatBytes($user->files->sum('size')) ;
            $freeSize = $this->formatBytes(16106127360 - $user->files->sum('size'));
            $data = [
                "all_size" => $sizeDisk,
                "using_size" => $usingSize,
                "free_size" => $freeSize,
            ];

            return response()->json($data, 200,[],JSON_UNESCAPED_UNICODE);
        }

        return response()->json("not found user", 400,[],JSON_UNESCAPED_UNICODE);

    }

    public function formatBytes($bytes, $precision = 3) {
        $unit = ["B", "kB", "MB", "GB"];
        $exp = floor(log($bytes, 1024)) | 0;
        return round($bytes / (pow(1024, $exp)), $precision).$unit[$exp];
    }

    public function downloadFiles(Request $request)
    {
        //fileArr[0] = files
        //fileArr[1] = folders
        $fileArr = ($request->fileArr);
        
        $selectedFiles = ($fileArr[0]);
        $selectedFolders = ($fileArr[1]);

        // $zip_file = 'invoices.zip'; // Name of our archive to download
        // // Initializing PHP class
        // $zip = new \ZipArchive();
        // $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        // // $invoice_file = 'invoices/aaa001.pdf';

        // // Adding file: second parameter is what will the path inside of the archive
        // // So it will create another folder called "storage/" inside ZIP, and put the file there.
        // foreach ($selectedFiles as $key => $file) {
        //     $file = File::find($file['id']);
        //     $zip->addFile($file->patch, $file->name);
        //     // dd($zip);
        // }
        // // dd($zip);
        // $zip->close();

        $zip_file = 'invoices.zip'; // Name of our archive to download

        // Initializing PHP class
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        $invoice_file = $selectedFiles[0]['patch'];
        // dd($selectedFiles[0]['patch']);
        // dd('/'.$invoice_file);
        // Adding file: second parameter is what will the path inside of the archive
        // So it will create another folder called "storage/" inside ZIP, and put the file there.
        // $zip->addFile('/'.$invoice_file, $invoice_file);
        dd($zip->addFile('/'.$invoice_file, $invoice_file));
        $zip->close();
        // dd($zip_file);
        // We return the file immediately after download
        return response()->download($zip_file);

        // $zip = new ZipArchive;
        // if ($zip->open('test.zip') === TRUE) {
        //     $zip->addFile($selectedFiles[0]['patch'], $selectedFiles[0]['patch']);
        //     $zip->close();
        //     return response()->download('test.zip');
        // } else {
        //     dd('dwadsa');
        // }


        // We return the file immediately after download
        // return response()->download($zip);

        // return response(null, Response::HTTP_OK);
    }
    
}
