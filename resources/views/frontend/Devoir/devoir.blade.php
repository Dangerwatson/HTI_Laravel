
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
                    <div class="row">
                   <!--  <form id="uploadFiles" name="uploadFiles" method="post"  th:action=@{/uploadFilesTel} encType="multipart/form-data">
                        <div class="col-lg-12 col-md-6">
                         <span> [[${#request.userPrincipal.principal.fullName}]]</span>
                         <input type="text" class="form-control" th:value="${#authentication.getPrincipal().getUser2()}">
                         <input type="text" class="form-control" th:value="${#authentication.getPrincipal().getUser2()}" name="classe">
                                <div class="singel-publication mt-30 ">
                            Telecharger le fichier a envoyer :  <span><input type="file" name="files" multiple required accept="video/*"  class="form-control" ></span>
                            <div class="cont ">                                
                                <div class="button text-right">
                                    <a href="" class="main-btn">Send Devoir</a>
                                    <button class="main-btn " type="submit" width="70" heigth="70">Send Devoir</button>
                                </div>
                               
                            </div>
                        </div>                               
                           
                        </div>
                      </form> -->
                       
                       
                        <div class="col-lg-12 col-md-6">
                         <form class="You-makelike mt-30" action="sendDevoir">
                         <center>                                                   
                            <button  class="btn btn-warning"><a href="{{url('senDevoir')}}">Send Devoir </a></button>
                            </center>
                            </form>                         
                                
                        </div>
                     
                        
                    
                        
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30 ">
                                <h6>Telecharger ici </h6> 
                                <div class=" mt-20 gray-bg"><br>
                                    <div class="col-lg-10 col-md-6 col-sm-8" >
                                  
                    @foreach($collection as $object)           
                        <div class="singel-publication mt-30 ">
                            <h6 >{{$object->name}}</h6>                            
                            <div class="cont ">
                                
                                <div class="button text-right">
                                <a href="{{url('/download',$object->file)}}">Download</a>
                                </div>
                            </div>
                        </div> 
                         <div class="cont" >
                         Description: <p >{{$object->description}}</p>
                                    <p >{{$object->created_at}}</p>                                  
                         </div> 
                    @endforeach                       
                    </div>       
                                   
                                </div>                                
                               
                            </div>
                        </div>
                    </div>
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