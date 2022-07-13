<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hitungController extends Controller
{
    public function berat($tinggiBadan,$beratBadan){
        $hasil = $beratBadan / ($tinggiBadan/100 * $tinggiBadan/100);

        return view('page.hitung', compact('hasil','tinggiBadan','beratBadan'));
    }
}
