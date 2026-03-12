<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $items = [[
            'name' => 'Hatice Sinem Akkuş',
            'tc' => '19999025970',
            'title' => 'Admin',
            'phone' => '(531) 524 72 64',
            'email' => 'sinemakkus@gaziantepbilisim.com.tr',
            'password' => Hash::make('123456'), 
            'is_active' => 1, 
        ], [
            'name' => 'Ahmet Baskın',
            'tc' => '11111111111',
            'title' => 'Admin',
            'phone' => '(111) 111 11 11',
            'email' => 'ahmetbaskin@gaziantepbilisim.com.tr',
            'password' => Hash::make('123456'),
            'is_active' => 1,
        ], [
            'name' => 'İsmail Ünal',
            'tc' => '11111111111',
            'title' => 'Admin',
            'phone' => '(111) 111 11 11',
            'email' => 'ismailunal@gaziantepbilisim.com.tr',
            'password' => Hash::make('123456'),
            'is_active' => 1,
        ], [
            'name' => 'Mehmet Talha koyun',
            'tc' => '11111111111',
            'title' => 'Admin',
            'phone' => '(111) 111 11 11',
            'email' => 'talhakoyun@gaziantepbilisim.com.tr',
            'password' => Hash::make('123456'),
            'is_active' => 1,
        ]];  

        DB::table('admin')->insert($items);
    }
}
