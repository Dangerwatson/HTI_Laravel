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
              <div class="col-md-12">

                
              <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">Add new Categorie Matiere</div>
                        <div class="card-body">
                        <form action="{{url('saveMatiere')}}" method="post" id="add-Matiere-form" autocomplete="off">
                               
                               @csrf

                               <div class="form-group">                                   
														<label >CATEGORIE MATIERE</label>
                                                         <select class="form-control" name="cateMat_id" >
														<option value="">-SELECT CATEGORY MATIERE-</option>
                                                          @foreach($categoryMat as $catM)
															       <option value="{{$catM->id}}">{{$catM->nomCatMatiere}}</option>
                                                          @endforeach															
														</select>
														<span class="text-danger error-text cateMat_id_error"></span>
								</div>
								

                                   <div class="form-group">
                                       <label for="">MATIERE</label>
                                       <input type="text" class="form-control" name="nomMatiere" placeholder="Enter ">
                                       <span class="text-danger error-text nomMatiere_error"></span>
                                   </div>

                                   <div class="form-group">
                                       <label for="">COEFFICIENT</label>
                                       <input type="text" class="form-control" name="coefficient" placeholder="Enter ">
                                       <span class="text-danger error-text coefficient_error"></span>
                                   </div>
                 
                                   <div>
                                   <label > CLASSE</label> 
                                   <select class="form-control" name="cate_id" >
											<option value="">-SELECT CLASSE-</option>
                                       @foreach($classe as $cla)
											<option value="{{$cla->id}}">{{$cla->name_classe}}</option>
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