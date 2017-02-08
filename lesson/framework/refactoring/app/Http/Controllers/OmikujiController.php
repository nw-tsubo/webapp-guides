<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Omikuji;

class OmikujiController extends Controller
{
    public function index()
    {
        $omikuji = new Omikuji;
        $unsei = $omikuji->shuffle();
        
        return view('omikuji.index', ['unsei' => $unsei]);
    }
}
