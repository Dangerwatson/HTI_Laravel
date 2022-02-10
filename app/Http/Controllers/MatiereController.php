<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catmatiere;
use App\Models\Classe;
use App\Models\Matiere;
use DataTables;
use Illuminate\Support\Facades\DB;

class MatiereController extends Controller
{
    public function catMatiere(){

        $categoryMat = Catmatiere::all(); 
        return view('Matiere/addCatMat',compact('categoryMat'));
    }


    public function Matiere(){
        //lister matiere
        $matiere = Matiere::all();
         //select catM
        $categoryMat = Catmatiere::all();
        //select classe 
        $classe = Classe::all();
        return view('Matiere/addMatiere',compact('categoryMat','classe','matiere'));
    }



    //ADD NEW cat
    public function addCat_mat(Request $request){        
        
        $validator = \Validator::make($request->all(),[
            'nomCatMatiere'=>'required|unique:catmatieres',            
        ]);
        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
       }else{
        $matiereCat = new Catmatiere();
            $matiereCat->nomCatMatiere = $request->input('nomCatMatiere');            
              
             $query = $matiereCat->save();         
             if(!$query){
                 return response()->json(['code'=>0,'msg'=>'Something went wrong']);
             }else{
                 return response()->json(['code'=>1,'msg'=>'New Category has been successfully saved']);
             }
              }
    }


    //ADD NEW matiere
    public function add_matiere(Request $request){        
        
        $validator = \Validator::make($request->all(),[
            'cateMat_id'=>'required',
            'nomMatiere'=>'required|unique:matieres',
            'coefficient'=>'required',
            'cate_id'=>'required',            
        ]);
        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
       }else{
        $matiere = new Matiere();
            $matiere->cateMat_id = $request->cateMat_id;
            $matiere->nomMatiere = $request->nomMatiere;
            $matiere->coefficient = $request->coefficient;
            $matiere->cate_id = $request->cate_id;            
              
             $query = $matiere->save();         
             if(!$query){
                 return response()->json(['code'=>0,'msg'=>'Something went wrong']);
             }else{
                 return response()->json(['code'=>1,'msg'=>'New Matiere has been successfully saved']);
             }
              }
    }


    public function editM($id){
        $categoryMat = Catmatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::find($id);
        return view('Matiere/EditMat',compact('categoryMat','classe','matiere'));

    }

    public function updateSave(Request $request,$id){
        $matiere = Matiere::find($id);
        $matiere->cateMat_id = $request->cateMat_id;
            $matiere->nomMatiere = $request->nomMatiere;
            $matiere->coefficient = $request->coefficient;
            $matiere->cate_id = $request->cate_id;             
        if($matiere->update()){

            return redirect()->back()->with('success','You are now successfully registerd');
         }else{
             return redirect()->back()->with('error','Failed to register');
         }
    }


    public function listerMatParClasse(){
        $classe = Classe::all();       
        return view('Matiere/ListeMatPClasse',compact('classe'));
    }

    public function vieMatParCl($name_classe){
        if(Classe::where('name_classe',$name_classe)->exists())
        {
            $classe =Classe::where('name_classe',$name_classe)->first();
            $matiere = Matiere::where('cate_id',$classe->id)->get();
            $categoryMat = Matiere::where('cateMat_id',$classe->id)->get();
            return view('Matiere/Vmatiere',compact('classe','matiere','categoryMat'));
        }
       else{
            return redirect('Matiere/Vmatiere')->with('status',"ddddddd"); 
        }

    }

            
    
}
