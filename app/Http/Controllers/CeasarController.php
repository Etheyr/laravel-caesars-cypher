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
    	$ceasarCrypt = new Ceasar;
    	$ceasarCrypt->text = $request->text;
    	$ceasarCrypt->save();
    	return  redirect('/');
    }
}
