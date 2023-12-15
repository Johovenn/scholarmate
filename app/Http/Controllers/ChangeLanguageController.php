<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    public function index(){
        return view('account.change-language');
    }

    public function change(Request $request){
        $locale = $request->input('language');
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }   
}
