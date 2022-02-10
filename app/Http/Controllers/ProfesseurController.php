<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Matiere;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProfesseurController extends Controller
{
    public function Prof(){
        $classe = Classe::all();       
        return view('professeur/addProf',compact('classe'));        
    }


    public function profSave(Request $request){
        $professeur = new Professeur(); 
        if($request->hasFile('image')){

          $file=$request->file('image');
          $ext=$file->getClientOriginalExtension();
          $filename= time().'.'.$ext;
          $file->move('images/inscription/',$filename);
          $professeur->image=$filename;
        }  
        $professeur->codeProf = $request->codeProf; 
        $professeur->nom = $request->nom; 
        $professeur->prenom = $request->prenom;        
        $professeur->gens = $request->gens;
        $professeur->telephone = $request->telephone;
        $professeur->lieuDeNaissance = $request->lieuDeNaissance;
        $professeur->adresse = $request->adresse;
        $professeur->emailPersonne = $request->emailPersonne;
        $professeur->cate_id = $request->cate_id; 
        $professeur->niveauEd = $request->niveauEd;
        $professeur->remarque = $request->remarque;
        $professeur->save(); 
        
        return redirect()->back();
    }

    
    public function listProf(){
        $professeur = Professeur::all();       
        return view('professeur/listP',compact('professeur'));
    }

    public function EditerProfes($id){
        $classe = Classe::all();
        $professeur = Professeur::find($id);
        return view('professeur/EditPs',compact('professeur','classe'));

    }

    public function updatePSave(Request $request,$id){
        $professeur = Professeur::find($id);
        if($request->hasFile('image')){
            
            $path='images/inscription/'.$professeur->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('images/inscription/',$filename);
            $professeur->image=$filename;
          }  
          $professeur->codeProf = $request->codeProf; 
        $professeur->nom = $request->nom; 
        $professeur->prenom = $request->prenom;        
        $professeur->gens = $request->gens;
        $professeur->telephone = $request->telephone;
        $professeur->lieuDeNaissance = $request->lieuDeNaissance;
        $professeur->adresse = $request->adresse;
        $professeur->emailPersonne = $request->emailPersonne;
        $professeur->cate_id = $request->cate_id; 
        $professeur->niveauEd = $request->niveauEd;
        $professeur->remarque = $request->remarque;
        $professeur->update();
          return redirect('ProfList')->back('status',"ddddddd"); 

    }
}
