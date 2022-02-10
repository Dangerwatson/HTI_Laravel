
@extends('frontend.corpsIndex')
@section('title','Dashboard')

@section('content')


<section id="slider-part-3" class="bg_cover"  style="background-image: url({{asset('frontend/images/slider/s-3.jpg')}})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="slider-cont-3 text-center">
                        <h2>WELCOME TO</h2><br>
                        <span>SUNSHINE ACADEMY</span>
                        
                    </div> <!-- slider cont3 -->
                </div>
            </div> <!-- row -->
            <div class="slider-feature pt-30 d-none d-md-block">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-80">
                            <div class="icon">
                                <img src="frontend/images/all-icon/man.png" width="140" height="50" alt="icon">
                            </div>
                            <div class="cont ">
                                <h3>Objectif</h3>
                                <span>HTISchoolSoftWare Est une plateforme Numerique qui permet de gerer des activites pedagogiques/Academiques des ces ecoles</span>

                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-80">
                            <div class="icon">
                                <img src="frontend/images/all-icon/book.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>Informations scolaires</h3>
                                  <li style="color:white";> Gestion d'ecole plus rapide et plus intelligente</li>
                                  <li style="color:white";> Une meilleure gestion des enserignants des eleves </li>
                                  <li style="color:white";> Consultation des emplos du temps </li>
                                  <li style="color:white";> Interface simple a utiliser</li>
                                  <li style="color:white";> Meme fonctionalites pour toutes ses anexes</li>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-80">
                            <div class="icon">
                                <img src="frontend/images/all-icon/expert.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3> Caracteristiques</h3>
                                <li style="color:white";>Inscription en ligne </li>
                                 <li style="color:white";>Systeme multi-utilisateurs </li>
                                 <li style="color:white";>Gestion des examens et des notes </li>
                                 <li style="color:white";>Gestion de la presnce et absence</li>
                                <li style="color:white";>Automatisation des operations </li>
                                 <li style="color:white";>Systeme de messagerie interne </li>
                                
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                </div> <!-- row -->
            </div> <!-- slider feature -->
        </div> <!-- container -->
    </section><br>

@endsection

