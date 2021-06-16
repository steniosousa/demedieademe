<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlobalController extends Controller
{
    public function index()
    {
        $aboutIgreja = DB::table('igrejas')->get()->first()->sobre;
        return view('welcome', ['about' => $aboutIgreja]);
    }
}
