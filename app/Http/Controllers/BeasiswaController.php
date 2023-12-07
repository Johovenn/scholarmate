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

        // dump($beasiswaList);
        return view('home', ['beasiswas' => $beasiswaList]);
    }
}
