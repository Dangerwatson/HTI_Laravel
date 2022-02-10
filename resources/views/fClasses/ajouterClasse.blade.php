@extends('dashboards.admins.layouts.dasMenu')
@section('title','ajouterClasse')

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

                
                    <div class="card">
                        <div class="card-header">Classe</div>
                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                  <th>CODE CLASSE</th>
                  <th>CATEGORY CLASSE</th>
                  <th>NOM CLASSE</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($classe as $cla)
                  <tr>
                    <td></td>
                    <td>{{$cla->code_classe}}</td>
                    <td>{{$cla->category_classe}}</td>
                    <td>{{$cla->name_classe}}</td>
                    
                    <td><a href="{{ url('edit/'.$cla->id)}}"
														class="btn btn-info"><i class="fas fa-edit"></i></a>
                            
                          </td>
                  </tr>
                  @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
                        </div>
                    </div>
              </div>




              <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">Add new Classe</div>
                        <div class="card-body">
                        <form action="{{ route('add.classe') }}" method="post" id="add-classe-form" autocomplete="off">
                               
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
                                   <div class="form-group">
                                       <label for="">Code Classe</label>
                                       <input type="text" class="form-control" name="code_classe" placeholder="Enter ">
                                       <span class="text-danger error-text code_classe_error"></span>
                                   </div>
                                   <div class="form-group">                                   
                               <label >CATEGORIE CLASSE</label> <select class="form-control" name="category_classe" >
                               <option value="">-SELECT CATEGORY-</option>
                                 <option value="PRIMAIRE">PRIMAIRE</option>
                                 <option value="KINDERGADEN">KINDERGARTEN</option>
                                 <option value="SECONDAIRE">SECONDAIRE</option>															
                               </select>
                               <span class="text-danger error-text category_classe_error"></span>
                             </div>
                                       
                                   <div class="form-group">
                                       <label for="">Nom Classe</label>
                                       <input type="text" class="form-control" name="name_classe" placeholder="Enter ">
                                       <span class="text-danger error-text name_classe_error"></span>
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