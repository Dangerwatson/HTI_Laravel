<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizes;
use App\Models\Questions;
use App\Models\Exams;
use App\Models\Results;
use App\Models\Fichier;
use App\Models\Classe;
use App\Models\SendDevoir;
use Sentinel;

class frontendController extends Controller
{
    function index(){

        return view('frontend/index');
    }

    function Devoir(){
      $collection = Fichier::all(); 
        $classe = Classe::all();             
        return view('frontend/Devoir/devoir',compact('collection','classe'));
  }

  function SenDev(){
    $collection = Fichier::all(); 
      $classe = Classe::all();             
      return view('frontend/Devoir/Sendevoir',compact('collection','classe'));
}

public function storeficSend(Request $request){ 
       
  $data=new SendDevoir();

   $file=$request->file;
   $filename= time().'.'.$file->getClientOriginalExtension();
   $request->file->move('images/inscription/',$filename);
     $data->file=$filename;
     
  // $data->cate_id = $request->cate_id;
   $data->user_id = $request->user_id;
    
   //$data->save(); 
   //return redirect()->back();

   if( $data->save() ){

    return redirect()->back()->with('success','You are send successfully');
 }else{
     return redirect()->back()->with('error','Failed to register');
 }

}


function DevoirRec(){
  $devRec = SendDevoir::all(); 
    $classe = Classe::all();             
    return view('frontend/Devoir/ListdevoirRec',compact('devRec','classe'));
}

    
//     public function __construct()
//   {
//     return $this->middleware('member');
//   }


   public function quizList()
    {
        $quizes=Quizes::orderBy('id','desc')->paginate(30);
        return view('frontend/Exam/quizList',compact('quizes'));
    }

    
    public function exam($id)
    {
       $quiz=Quizes::where('id',$id)->where('status',1)->first();
 
      $questions=Questions::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id',$quiz->id)->get();
      return view('frontend.exam.examStar',compact('questions','quiz'));

     
    }
    public function examPost(Request $request)
    {
      $userId=Sentinel::getUser()->id;
      $date=date('Y-m-d');
        $yes=0;
        $no=0;
       $data=$request->all();
       $result=array();
       for($i=1; $i<=$request->index;$i++){
           if(isset($data['questions_id'.$i])){
          if($exam=Exams::where('user_id',$userId)->where('questions_id',$data['questions_id'.$i])->first()){

          }else{
            $exam=new Exams;
          }
               
               $question=Questions::where('id',$data['questions_id'.$i])->get()->first();
               if($question->answer==$data['ans'.$i])
               {
                   $result[$data['questions_id'.$i]]='Yes';
                   $exam->is_ans="yes";
                   $yes++;
               }else{
                   $result[$data['questions_id'.$i]]='No';
                   $exam->is_ans="No";
                   $no++;
               }
          $exam->user_id= $userId;
            $exam->quizes_id= $question->quizes_id;
               $exam->questions_id=$data['questions_id'.$i];
               $exam->ans=$data['ans'.$i];

               $exam->save();

           }
           
       }

       if($res=Results::where('user_id',$userId)->where('quizes_id',$request->quizes_id)->first()){

       }else{
        $res=new Results;
       }
       $res->user_id= $userId;
       $res->quizes_id= $request->quizes_id;
       $res->date= $date;
       $res->yes_ans=$yes;
       $res->no_ans=$no;
       $res->result_json=json_encode($result);
       $res->save();

       return redirect('/MyExamResult')->with('success','Thaks For Join This Exam');

    }

    public function examResult()
    {
       $userId=Sentinel::getUser()->id;
      $results=Results::orderBy('id','desc')->where('user_id',$userId)->paginate(10);
      $results=Results::all();
      return view('frontend.exam.result',compact('results'));
    }
    
     public function ResultDetails($id)
    {
        $userId=Sentinel::getUser()->id;
       $exams=Exams::where('user_id', $userId)->where('quizes_id',$id)->get();
       $quiz=Quizes::find($id);
       $questions=Questions::where('quizes_id',$id)->get();
      return view('frontend.exam.resultDetails',compact('exams','quiz','questions'));
    }
}
