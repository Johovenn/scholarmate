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

    public function showSD(){
        $beasiswas = Beasiswa::where('type', 'SD')->get();

        return view('beasiswaSD', ['beasiswas' => $beasiswas]);
    }

    public function showSMP(){
        $beasiswas = Beasiswa::where('type', 'SMP')->get();

        return view('beasiswaSMP', ['beasiswas' => $beasiswas]);
    }

    public function showSMA(){
        $beasiswas = Beasiswa::where('type', 'SMA')->get();

        return view('beasiswaSMA', ['beasiswas' => $beasiswas]);
    }

    public function showKuliah(){
        $beasiswas = Beasiswa::where('type', 'Kuliah')->get();

        return view('beasiswaKuliah', ['beasiswas' => $beasiswas]);
    }
}
