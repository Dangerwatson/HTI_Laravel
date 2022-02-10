<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Quizes;
class QuizFontController extends Controller
{
    public function index()
    {
    	 $quizes=Quizes::orderBy('id','desc')->paginate(30);
        return view('frontend.exam.quiz_list',compact('quizes'));
    }
}
