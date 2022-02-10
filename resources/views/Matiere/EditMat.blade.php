@extends('dashboards.admins.layouts.dasMenu')
@section('title','addMatiere')

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
          


  
              
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


    <div class="container">
          <div class="row" >
              <div class="col-md-8">

                
              <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">Add new Categorie Matiere</div>
                        <div class="card-body">
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
                        <form action="{{url('update.matiere/'.$matiere->id) }}" method="post" id="add-Matiere-form" autocomplete="off">
                        @method('PUT')
                               @csrf

                               <div class="form-group">                                   
														<label >CATEGORIE MATIERE</label>
                                                         <select class="form-control" name="cateMat_id" id="nomCatMatiere">
                                                          @foreach($categoryMat as $catM)
															       <option value="{{$catM->id}}" {{$catM->id==$matiere->cateMat_id? 'selected' : ''}}>{{$catM->nomCatMatiere}}</option>
                                                          @endforeach															
														</select>
														<span class="text-danger error-text cateMat_id_error"></span>
								</div>

                                
                                   <div class="form-group">
                                       <label for="">MATIERE</label>
                                       <input type="text" class="form-control" name="nomMatiere" value="{{$matiere->nomMatiere}}" placeholder="Enter ">
                                       <span class="text-danger error-text nomMatiere_error"></span>
                                   </div>

                                   <div class="form-group">
                                       <label for="">COEFFICIENT</label>
                                       <input type="text" class="form-control" name="coefficient" value="{{$matiere->coefficient}}" placeholder="Enter ">
                                       <span class="text-danger error-text coefficient_error"></span>
                                   </div>
                                    
                                   <div class="form-group">
                                   <label > CLASSE</label> 
                                   <select class="form-control" name="cate_id" id="name_classe">											
                                       @foreach($classe as $cla)
											<option value="{{$cla->id}}" {{$cla->id==$matiere->cate_id? 'selected' : ''}}>{{$cla->name_classe}}</option>
                                       @endforeach															
									</select>
											<span class="text-danger error-text cate_id_error"></span>
									</div>

                                   <div class="card-footer">
                                       <button type="submit" class="btn btn-primary">SAVE</button>
                                   </div>
                               </form>


                        </div>
                    </div>
              </div>
          </div>

    </div>
    <!-- /.content -->  
@endsection