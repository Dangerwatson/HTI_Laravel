<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichier;
use App\Models\Classe;

use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;

class FichierController extends Controller
{
    public function uploadFic(){ 
        $collection = Fichier::all(); 
        $classe = Classe::all();             
        return view('fichier/upload',compact('collection','classe'));
    }

     
    public function storefic(Request $request){ 
       
       $data=new Fichier();

        $file=$request->file;
        $filename= time().'.'.$file->getClientOriginalExtension();
        $request->file->move('images/inscription/',$filename);
          $data->file=$filename;

          $data->name = $request->name; 
        $data->description = $request->description;
        $data->cate_id = $request->cate_id;
         
        $data->save(); 
        return redirect()->back();

    }

    public function download(Request $request,$file) {
        return response()->download(public_path('images/inscription/'.$file));
    }


    public function view($id) {
        $data=Fichier::find($id);
        return view('fichier/viewFic',compact('data'));
    }

    
}
