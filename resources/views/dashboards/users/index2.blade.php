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
    <br><br><br><br>

@endsection


