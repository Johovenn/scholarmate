<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeasiswaController extends Controller
{
    public function show(){
        $preferredCategory = Auth::user()->beasiswa;

        $beasiswaList = Beasiswa::where('type', $preferredCategory)->take(4)->get();
        $beasiswaSD = Beasiswa::where('type', 'SD')->take(4)->get();
        $beasiswaSMP = Beasiswa::where('type', 'SMP')->take(4)->get();
        $beasiswaSMA = Beasiswa::where('type', 'SMA')->take(4)->get();
        $beasiswaKuliah = Beasiswa::where('type', 'Kuliah')->take(4)->get();

        // dump($beasiswaList);
        return view('home', [
            'beasiswas' => $beasiswaList,
            'beasiswaSD' => $beasiswaSD,
            'beasiswaSMP' => $beasiswaSMP,
            'beasiswaSMA' => $beasiswaSMA,
            'beasiswaKuliah' => $beasiswaKuliah
        ]);
    }
}
