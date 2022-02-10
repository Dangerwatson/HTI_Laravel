
@extends('dashboards.users.menuProf')
@section('title','prof')

@section('content')

  <!--====== SLIDER PART START ======-->
    
  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{asset('frontend/images/page-banner-2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><br><br>
                    <div class="page-banner-cont">
                        <h2></h2>                        
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        
               <form  method="post">
					<div class="page-banner-cont">					
						<h2>Welcome {{ Auth::user()->name }}</h2>
                        <h4>Role:  {{Auth::user()->role}}</h4>
					</div>
				</form>
    </section>
    
   
    @section('css')
<link rel="stylesheet">
<style>
body {margin:0;height:2000px;

}

.icon-bar {
  position: fixed;
  top: 50%;
  right: 10%;
  z-index: 9999;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
 @media only screen and (max-width: 800px) {
  .icon-bar {
     position: fixed;
 
 

 top:95%;
  right:0;
  z-index: 9999;
 
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  }
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

 
.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>
<style type="text/css">
    /*.ul-list li:nth-child(2n+1){
     background-color: #b30000;
     color: #ffffff;
    }
    .ul-list li:nth-child(2n+1){
     background-color: #ff4d4d;
     color: #fff;
    }*/
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
<section id="blog-page" class="pt-90 pb-120 gray-bg" oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;">
<div class="container">
<div class="row">
<div class="icon-bar" >
    <button class="main-btn">Exam Time CountDown : <span class="js-timeout"></span>  </button>
</div>
<div class="col-lg-7">
                   <div class="singel-blog mt-30">
                       
                       <div class="blog-cont">

                       @if($questions->count()>0)
<p>
    Exam Time:    &nbsp; <span class="js-timeout" >{{$quiz->quiz_time}}</span>
</p>

<!-- <div class="icon-bar" >
    <button class="main-btn">Exam Time CountDown : <span class="js-timeout"></span>  </button>
</div> -->
    
    <form action="/exams" method="POST" name="exam">
        {{csrf_field()}}
    <div class="col-md-12">

@foreach($questions as $key=>$ques)
<input type="hidden" name="questions_id{{$key+1}}" value="{{$ques->id}}">
  <input type="hidden" name="ans{{$key+1}}" value="0">
 <h5 > {{$key+1}}. {{$ques->question}}</h5>
  <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
      @foreach($ques->optionsdata as $opt)

      <li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
   
      @endforeach
     
  </ol>
  @endforeach
  <input type="hidden" name="index" value="<?php echo $key+1 ?>">
  <input type="hidden" name="quizes_id" value="{{$quiz->id}}">
</div>
<input type="submit" class="btn btn-sm" value="submit"  >
</form>

@else

<h2 style="color: red;"> Opps! No Data Found</h2>
@endif
                           
                            
                       </div>                       
                   </div> <!-- singel blog -->                  
                   
               </div>


</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script type="text/javascript">
    var interval;
    var form=document.forms.exam;
    function countdown() {
      clearInterval(interval);

      interval = setInterval( function() {
          var timer = $('.js-timeout').html();
          timer = timer.split(':');
          var minutes = timer[0];
          var seconds = timer[1];
          seconds -= 1;
          if (minutes < 0) return;
          else if (seconds < 0 && minutes != 0) {
              minutes -= 1;
              seconds = 59;
          }
          else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

          $('.js-timeout').html(minutes + ':' + seconds);

          if (minutes == 0 && seconds == 0) { clearInterval(interval);  form.submit(); alert("Time Over Please Click Ok Button");}
      }, 1000);
    }
    
    $('.js-timeout').text("{{ $quiz->quiz_time }}");
    countdown();
</script>

@endsection