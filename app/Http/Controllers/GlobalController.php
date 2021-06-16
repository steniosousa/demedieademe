<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlobalController extends Controller
{
    public function index()
    {
        $aboutIgreja = '';
        try{
            $igreja = DB::table('igrejas')->get()->first();
            if($igreja){
                $aboutIgreja = $igreja->sobre;
            }
        }catch(\Exception $error){
            var_dump("Ocorreu um erro");
        }
        
        return view('welcome', ['about' => $aboutIgreja]);
    }
}
