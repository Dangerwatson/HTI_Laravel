
@extends('dashboards.users.menuProf')
@section('title','startExamen')
@section('content')


  <!--====== SLIDER PART START ======-->
    
  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('frontend/images/page-banner-2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                            
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item active" >  
                            <h2>Welcome {{ Auth::user()->name }}</h2>
                        <h4>Role:  {{Auth::user()->role}}</h4></li>
							</ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <br><br><br>
    
<section class="page-banner services-banner">
<div class="container">
<div class="banner-header">
<h2> Examen</h2>
<span class="underline center"></span>
<p class="lead"></p>
</div>
<div class="breadcrumb">
<ul>

<li>Examen</li>
</ul>
</div>
</div>
</section>

@section('css')
<style type="text/css">

    .ul-list li:hover{
     background-color: #ffffff;
     color: red;
    }
    .ul-list li{
        padding: 10px;
    }
    .ul-list li a{
        font-size:16px;
    }
</style>
@endsection
@section('content')
<section class=" ">
<div class="container">
   
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_v09t"></div><br>
            
<div class="row">
    <div class="col-md-12">
        <h3>Today Exam</h3><br>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th> Exam Title </th>
                    <th> Exam Time </th>
                    <th> Total Question </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
 
                    @foreach($quizes as $key=>$quz)
                 
                   
                <tr>
                    <td> {{++$key}} </td>
                    <td> {{$quz->quiz_name}}</td>
                    <td> {{$quz->quiz_time}}</td>
                    <td> {{$quz->number_of_question}}</td>
                    <!-- <td><a href="/exam-start/{{$quz->id}}">Strat Exam</a></td> -->

                    @if(Auth::check())
                    @php
                    $user=Auth::getUser()->id;
                  $quiz=App\Models\Results::where('user_id',$user)->where('quizes_id',$quz->id)->first();
                    @endphp
                    @if($quiz)
                    <td>Complete </td>
                    @else
                        <td><a href="/exam-start/{{$quz->id}}">Strat Exam</a></td>
                        @endif
                    @else
                    <td><a href="/exam-start/{{$quz->id}}">Strat Exam</a></td>
               
                    @endif
                </tr>
               
                 
                @endforeach
               
                 
            </tbody>
        </table>
    </div>
    
    {{$quizes->links()}}
   
</div>
</div>

</div>
</section>
<br><br><br><br>

@endsection

