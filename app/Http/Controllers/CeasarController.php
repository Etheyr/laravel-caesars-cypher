<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ceasar;

class CeasarController extends Controller
{
    public function getIndex(){
    	$ceasarCrypt = Ceasar::all();
    	return view('ceasars.index', ['ceasar'=>$ceasarCrypt]);
    }

    public function getNew(){
    	return view('ceasars.new');
    }

    public function postNew(Request $request){
        $ceasarDecalage = $request->decalage;
        $ceasarRange = range('a','z');
        $ceasarTable = str_split($request->text,1);
        $stringVoid = '';

        foreach ($ceasarTable as $value) {
            $ceasarValue = $value;
            $ceasarSearch = array_search($ceasarValue,$ceasarRange);
            $ceasarPos = ($ceasarSearch + $ceasarDecalage) %25;
            $decalCeasar = $ceasarRange[$ceasarPos];
            $stringVoid .= $decalCeasar;
        }

        $ceasarCrypt = new Ceasar;
        $ceasarCrypt->text = $stringVoid;
        $ceasarCrypt->save();
        return  redirect('/');

    }


    public function postDelete($id){
        $ceasarCrypt = Ceasar::find($id);
        $ceasarCrypt->delete();
        return back();

    }
}
