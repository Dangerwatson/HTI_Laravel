@extends('dashboards.admins.layouts.dasMenu')
@section('title','editerClasse')

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
                            <form action="{{url('update-data/'.$classe->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="">Code Classe</label>
                                    <input type="text" class="form-control" name="code_classe"  value="{{$classe->code_classe}}">
                                    
                                <!-- </div>
                                <div class="form-group"> 
                                 <input type="text" class="form-control" name="category_classe"  value="{{$classe->category_classe}}">
														    <div class="form-group">  -->
                                                                    
														<label >CATEGORIE CLASSE</label> 
                            <select class="form-control" name="category_classe" id="category_classe" >
															<option value="PRIMAIRE" {{$classe->category_classe == "PRIMAIRE" ? 'selected' : '' }}>PRIMAIRE</option>
															<option value="KINDERGADEN" {{$classe->category_classe == "KINDERGADEN" ? 'selected' : '' }}>KINDERGARTEN</option>
															<option value="SECONDAIRE" {{$classe->category_classe == "SECONDAIRE" ? 'selected' : '' }}>SECONDAIRE</option>															
														</select>
														<span class="text-danger error-text category_classe_error"></span>
													</div> 
														
													
                                    
                                <div class="form-group">
                                    <label for="">Nom Classe</label>
                                    <input type="text" class="form-control" name="name_classe" value="{{$classe->name_classe}}">
                                    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>




            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->  
@endsection