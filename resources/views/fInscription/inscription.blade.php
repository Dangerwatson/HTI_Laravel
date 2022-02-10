@extends('dashboards.admins.layouts.dasMenu')
@section('title','inscription')

@section('content')


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

<div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add new Classes</div>
                        <div class="card-body">
                            <form action="{{ route('add.inscrip') }}" method="post"   enctype="multipart/form-data" id="add-inscri-form"  autocomplete="off">
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
                                <!-- <div class="form-group">
                                    <label for="">Code Classe</label>
                                    <input type="text" class="form-control" name="code_classe" placeholder="Enter ">
                                    <span class="text-danger error-text code_classe_error"></span>
                                </div> -->
                                <div class="form-group">                                   
														<label >CATEGORIE CLASSE</label> <select class="form-control" name="cate_id" >
														<option value="">-SELECT CATEGORY-</option>
                              @foreach($classe as $cla)
															       <option value="{{$cla->id}}">{{$cla->name_classe}}</option>
                               @endforeach															
														</select>
														<span class="text-danger error-text name_classe_error"></span>
													</div>
                                    
                                <div class="form-group">
                                    <label for="">Nom </label>
                                    <input type="text" class="form-control" name="nom" placeholder="Enter ">
                                    <span class="text-danger error-text nom_error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">PreNom</label>
                                    <input type="text" class="form-control" name="prenom" placeholder="Enter ">
                                    <span class="text-danger error-text prenom_error"></span>
                                </div>
                           
                            <div class="form-group">                                   
                               <label >GENS</label> <select class="form-control" name="gens" >
                               <option value="">-SELECT GEns-</option>
                                 <option value="MASCULIN">MASCULIN</option>
                                 <option value="FEMININ">FEMININ</option>                                 															
                               </select>
                               <span class="text-danger error-text category_classe_error"></span>
                             </div>
                                    
                                
                                <div class="form-group">
                                    <label for="">adresse</label>
                                    <input type="text" class="form-control" name="adresse" placeholder="Enter ">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">adresse</label>
                                    <input type="file" class="form-control" name="image" placeholder="Enter ">
                                    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
  
              
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content --> 
    
    
@endsection