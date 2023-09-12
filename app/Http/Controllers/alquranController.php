<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class alquranController extends Controller
{
    public function show()
    {
        $api_response = Http::get('https://quran-api.santrikoding.com/api/surah');
        $surat = json_decode($api_response);

        // dd($surat);
        return view('pages.surat.show', compact('surat'));

    }
    public function detailayat($nomor)
    {
        $api_response = Http::get("https://quran-api.santrikoding.com/api/surah/$nomor");

     return view('pages.ayat.show',['api_response'=>json_decode($api_response)]);
    }

}