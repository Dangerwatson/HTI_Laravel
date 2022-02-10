<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Classe;
use App\Models\Presence;
use DB;
class PresenceController extends Controller
{
    public function addPres(){
        $classe = Classe::all(); 
        return view('presence/AddPresence',compact('classe'));
    }


    public function savePresence(Request $request){
        
            $presAbs = $request->presAbs;            
            $id_pers = $request->id_pers;
            $cate_id = $request->cate_id;
            for($i=0;$i<count($presAbs);$i++){

                $datasave =[
                    
                    'presAbs'=>$presAbs[$i],
                    'id_pers'=>$id_pers[$i],
                    'cate_id'=>$cate_id[$i],
 
                ];         
                         
            
             DB::table('presences')->insert($datasave);            
             
            }
            return redirect()->back();           
              

    }

    public function addPresParCl($name_classe){
        if(Classe::where('name_classe',$name_classe)->exists())
        {
            $classe =Classe::where('name_classe',$name_classe)->first();
            $inscription = Inscription::where('cate_id',$classe->id)->get();            
            return view('presence/AddPclaPresence',compact('classe','inscription'));
        }
       else{
            return redirect('presence/AddPclaPresence')->with('status',"ddddddd"); 
        }

    }

    
    public function listePres(){
        $classe = Classe::all(); 
        return view('presence/ListePresence',compact('classe'));
    }
    
    public function ListPresParCl($name_classe){
        if(Classe::where('name_classe',$name_classe)->exists())
        {
            $classe =Classe::where('name_classe',$name_classe)->first();
            $inscription = Inscription::where('cate_id',$classe->id)->get();
            $presence = Presence::where('cate_id',$classe->id)->get();            
            return view('presence/ListPclaPresence',compact('classe','inscription','presence'));
        }
       else{
            return redirect('presence/ListPclaPresence')->with('status',"ddddddd"); 
        }

    }
}
