<?php

namespace App\Http\Controllers;

use App\Models\Igreja;
use Illuminate\Http\Request;

class IgrejaController extends Controller
{
    public function store(Request $request)
    {
        try{
            if($request->id){
                Igreja::where('id', 1)->update(['sobre' => $request['about']]);
            }else{
                Igreja::create([
                    'sobre' => $request['about']
                ]);
            }

            return redirect('dashboard')->with('success', 'atualização sobre a igreja concluída');
        }catch (\Exception $error){
            return redirect('dashboard')->with('failed', 'erro ao atualizar informações sobre a igreja');
        }
    }
}
