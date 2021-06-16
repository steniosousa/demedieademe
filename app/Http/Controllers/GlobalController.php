<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlobalController extends Controller
{
    public function index()
    {
        try{
            $aboutIgreja = DB::table('igrejas')->get()->first()->sobre;
        }catch(\Exception $error){
            var_dump("Ocorreu um erro");
        }
        
        return view('welcome', ['about' => $aboutIgreja]);
    }
}
