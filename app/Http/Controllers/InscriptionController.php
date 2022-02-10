<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Classe;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class InscriptionController extends Controller
{
    public function inscrip(){
        $classe = Classe::all();       
        return view('fInscription/inscription',compact('classe'));
    }

    public function liste(){
        $classe = Classe::all();
        $inscription = Inscription::all();       
        return view('fInscription/ListerInscription',compact('inscription','classe'));
    }


    public function listerElevParClasse(){
        $classe = Classe::all();       
        return view('fInscription/ListerELPcls',compact('classe'));
    }

    
    public function insertEl(Request $request){
        $inscriptions = new Inscription(); 
        if($request->hasFile('image')){

          $file=$request->file('image');
          $ext=$file->getClientOriginalExtension();
          $filename= time().'.'.$ext;
          $file->move('images/inscription/',$filename);
          $inscriptions->image=$filename;
        }  
        $inscriptions->cate_id = $request->cate_id; 
        $inscriptions->nom = $request->nom; 
        $inscriptions->prenom = $request->prenom;        
        $inscriptions->gens = $request->gens;
        $inscriptions->adresse = $request->adresse; 
       // $inscriptions->save(); 
        
        //return redirect()->back();
        if( $inscriptions->save() ){

            return redirect()->back()->with('success','You are send successfully');
         }else{
             return redirect()->back()->with('error','Failed to register');
         }
    }
    
    

    public function editer($id){
        $classe = Classe::all();
        $inscription = Inscription::find($id);
        return view('fInscription/editInsc',compact('inscription','classe'));

    }

    public function vieElevParCl($name_classe){
        if(Classe::where('name_classe',$name_classe)->exists())
        {
            $classe =Classe::where('name_classe',$name_classe)->first();
            $inscription = Inscription::where('cate_id',$classe->id)->get();
            return view('fInscription/vEl',compact('classe','inscription'));
        }
       else{
            return redirect('fInscription/vEl')->with('status',"ddddddd"); 
        }

    }


    public function updateSave(Request $request,$id){
        $inscriptions = Inscription::find($id);
        if($request->hasFile('image')){
            
            $path='images/inscription/'.$inscriptions->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('images/inscription/',$filename);
            $inscriptions->image=$filename;
          }  
          $inscriptions->cate_id = $request->cate_id;
          $inscriptions->nom = $request->nom; 
          $inscriptions->prenom = $request->prenom;
          $inscriptions->gens = $request->gens;
          $inscriptions->adresse = $request->adresse; 
          $inscriptions->update();
          return redirect('listerEl')->back('status',"ddddddd"); 

    }

    
}
