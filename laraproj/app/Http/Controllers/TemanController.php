<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemanController extends Controller
{
    private $dta = [
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
    public function index(){
        $dta = $this->dta;
        return view('teman', compact('dta') );
    }

    public function temandetail($id){
        $t = collect($this->dta)->firstWhere('idbuku',$id);
        
        if(!$t){
            abort(404,"Data Teman dengan $id tidak ditemukan");
        }

        return view('temandetail', compact('t') );
    }

}
