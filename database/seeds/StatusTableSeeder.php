<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            // 'id' => 1,
        	'name' => 'Published',
        	// 'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('statuses')->insert([
            // 'id' => 2,
        	'name' => 'Deleted',
        	// 'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('statuses')->insert([
            // 'id' => 3,
            'name' => 'Favorites',
            // 'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
