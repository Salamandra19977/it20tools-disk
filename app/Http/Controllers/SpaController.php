<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SpaController extends Controller
{
    public function index()
    {
        return view('disk.index');
    }
}
