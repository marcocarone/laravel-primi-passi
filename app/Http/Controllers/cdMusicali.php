<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cdMusicali extends Controller
{
    public function index()
    {
        return view('cds');
    }
}
