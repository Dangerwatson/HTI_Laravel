<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use DataTables;
use Illuminate\Support\Facades\DB;

class ClasseController extends Controller
{
    //
    public function cla(){
        return view('classe');
    }

   // public function use(){
     //   return view('dashboards.admins.prof');
    //}

    public function co(){
        return view('layouts/corp');
    }

    public function classeAd(){
        $classe = Classe::all();
        return view('fClasses/ajouterClasse',compact('classe'));
    }

    public function listeClas(){
        $classe = Classe::all();
        return view('fClasses/liste',compact('classe'));
    }

    

    
    //ADD NEW Classe
    public function addClasse(Request $request){ 
        $validator = \Validator::make($request->all(),[
            'code_classe'=>'required|unique:classes',
            'category_classe'=>'required',
            'name_classe'=>'required',
        ]); 
        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
       }else{
        
            $classe = new Classe();
            $classe->code_classe = $request->code_classe;
            $classe->category_classe = $request->category_classe;
            $classe->name_classe = $request->name_classe;
            $query = $classe->save();         
            if(!$query){
                return response()->json(['code'=>0,'msg'=>'Something went wrong']);
            }else{
                return response()->json(['code'=>1,'msg'=>'New Country has been successfully saved']);
            }
             }
    }


            


       
    public function editer($id){
        $classe = Classe::find($id);        
         return view('fClasses/edit',compact('classe'));
            }


   //UPDATE Classe
   public function update(Request $request,$id){   
         
        $classe = Classe::find($id);
        $classe->code_classe = $request->code_classe;
        $classe->category_classe = $request->category_classe;
        $classe->name_classe = $request->name_classe;
        $query = $classe->update();
        return redirect()->back();
        
    }

}
