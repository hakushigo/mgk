<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Experience;

class HomeController extends Controller
{
    public function index(){
        $allxpdata = Experience::all();
        $alledudata = Education::all();

        return view('welcome', [
            'xp' => $allxpdata,
            'edu' => $alledudata
        ]);
    }
}
