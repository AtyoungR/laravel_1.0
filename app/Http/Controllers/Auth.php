<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function halo(){
        $a = 1;
        $total = $a * 100;
        if ($total >= 1000){
            return 'Diatas Seribu';
        } else {
            return 'Dibawah Seribu';
        }
    }

    public function profile(){
        return view('profile');
    }

    public function fb($perkalian,$nama){
        $calculator = 1 + 5;
        $hasilPerkalian = $calculator * $perkalian;
        $jk = 10;
        return view('about', compact('nama','hasilPerkalian','jk'));
    }
}
