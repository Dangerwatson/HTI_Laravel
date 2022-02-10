<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Classe;
use Auth;

class ListDeFormationController extends Controller
{
    //public function listDf(){
       // $classe = Classe::all();       
        //return view('formation/listFormation',compact('classe'));
    //}

    public function listDf(){
        $classe = Classe::all();
        $inscription = Inscription::all();       
        return view('formation/listFormation',compact('classe','inscription'));
    }
}
