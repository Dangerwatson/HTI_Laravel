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
                                <li class="breadcrumb-item active" aria-current="page">Send Devoir</li>
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

    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="singel-blog mt-30">
                       
                       <div class="blog-cont">
                           
								
								
													
				<div class="row justify-content-center">
                    
						
                   <section id="corses-singel" class="pt-10 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3>Learn basis javascirpt from start for beginner</h3>
                        </div> 
                        
                       
                    </div> <!-- corses singel left -->
                    
                </div>
                <div class="col-lg-4">
                <form action="{{ url('saveFicSend') }}" method="post" enctype="multipart/form-data">
                @if ( Session::get('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                      </div>
                   @endif
                   @if ( Session::get('error'))
                      <div class="alert alert-danger">
                        {{ Session::get('error') }}
                      </div>
                   @endif
                @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                         <!-- <span> {{ Auth::user()->id }}</span> -->
                         <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                         
                         
                                <div class="singel-publication mt-30 ">
                            Telecharger le fichier a envoyer :  <span><input type="file" name="file"   class="form-control" ></span>
                            <span class="text-danger error-text file_error"></span>
                            <div class="cont ">                                
                                <div class="button text-right">
                                    <button class="main-btn " type="submit" width="70" heigth="70">Send Devoir</button> 
                                </div>
                            </div>
                        </div>                               
                           
                        </div>
                        
                      
                    </div>
                    </form>
                </div>
            </div> <!-- row -->
            
       
        </div> <!-- container -->
    </section>
  
  
                       </div>                       
                   </div> <!-- singel blog -->                  
                   
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @endsection