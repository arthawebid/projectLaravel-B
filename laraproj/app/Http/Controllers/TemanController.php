<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemanController extends Controller
{
    public function index(){
        $dta = [
            [
                "idbuku" => 1,
                "namateman" => "Rudi Iswantoro Diatmojo",
                "alamat" => "Jl. Selalu Lurus Blok G.23Z",
                "kota" => "Denpasar",
                "wa" => "0833445521",
            ],
            [
                "idbuku" => 2,
                "namateman" => "Dwiarsaningsih",
                "alamat" => "Jl. Putar Balik 2X Blok G.23Z",
                "kota" => "Denpasar",
                "wa" => "0811223344",
            ],
        ];
        return view('teman', compact('dta') );
    }
}
