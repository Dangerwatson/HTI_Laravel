<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\sample_data;
use App\Models\Note;
use DB;

class AjouterNoteController extends Controller
{
    //public function addNote(){
      // $inscription = Inscription::all();
       //lister matiere
      // $matiere = Matiere::all(); 
        //$data = DB::table('notes')->get();      
        //return view('ajouterNote/ListePNote',compact('data','matiere','inscription'));
   // }

    //public function addNote11(){
       // // $inscription = Inscription::all(); 
        // //$data = DB::table('sample_datas')->get();
         //$matiere = Matiere::all(); 
         //$classe = Classe::all();
         //$inscription = Inscription::all();       
         //return view('ajouterNote/addNote1',compact('inscription','matiere','classe'));    
         
    // }

    public function listNotParClasse(){
        $classe = Classe::all();               
        return view('ajouterNote/ListeNote',compact('classe','matiere')); 

    }

    public function listNotes($name_classe){
        if(Classe::where('name_classe',$name_classe)->exists())
        {
            $classe =Classe::where('name_classe',$name_classe)->first();
            $inscription = Inscription::where('cate_id',$classe->id)->get();
            $matiere = Matiere::where('cate_id',$classe->id)->get();
            $data = Note::where('cate_id',$classe->id)->get();
            return view('ajouterNote/ListePNote',compact('classe','inscription','matiere','data'));
        }
       else{
            return redirect('ajouterNote/ListePNote')->with('status',"ddddddd"); 
        }

    }


     public function addNotParClasse(){
        $classe = Classe::all();      
        return view('ajouterNote/AddNotPClasse',compact('classe',));
    }

    public function vieNotParCl($name_classe){
        if(Classe::where('name_classe',$name_classe)->exists())
        {
            $classe =Classe::where('name_classe',$name_classe)->first();
            $inscription = Inscription::where('cate_id',$classe->id)->get();
            $matiere = Matiere::where('cate_id',$classe->id)->get();
            return view('ajouterNote/addNote1',compact('classe','inscription','matiere'));
        }
       else{
            return redirect('ajouterNote/addNote1')->with('status',"ddddddd"); 
        }

    }

    

    // public function saveNote(Request $request){
    //     $note1 = new sample_data();
    //         $note1->note = $request->note;
                        
                        
    //         if( $note1->save() ){

    //             return redirect()->back()->with('success','You are now successfully registerd');
    //          }else{
    //              return redirect()->back()->with('error','Failed to register');
    //          }

    // }


    public function saveNote(Request $request){
        //$note1 = new sample_data();
            //$no_id = $request->no_id;
            $note = $request->note;
            $mat_id = $request->mat_id;
            $id_pers = $request->id_pers;
            $cate_id = $request->cate_id;
            for($i=0;$i<count($id_pers);$i++){

                $datasave =[
                    //'no_id'=>$no_id[$i],
                    'note'=>$note[$i],
                    'mat_id'=>$mat_id[$i],
                    'id_pers'=>$id_pers[$i],
                    'cate_id'=>$cate_id[$i],
 
                ];         
                         
             //return dd($datasave);
             DB::table('notes')->insert($datasave);            
             
            }
            return redirect()->back();           
              

    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'note'	=>	$request->note,
    				
    			);
    			DB::table('notes')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('notes')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
    }
}
