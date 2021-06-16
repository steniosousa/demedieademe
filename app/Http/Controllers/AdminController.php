<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboardScreen()
    {
        $igreja = DB::table('igrejas')->get()->first();
        return view('dashboard', ['igreja' => $igreja]);
    }
}
