<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function siswa(){
        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 19),
            array('id' => 2, 'name' => 'Mang Dudung', 'age' => 16 ),
        ];

        return view('siswa', ['siswa' => $a]);
    }
}
