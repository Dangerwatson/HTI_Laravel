@extends('dashboards.admins.layouts.dasMenu')
@section('title','addCat_Matiere')

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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">
  add new
</button>
                        <div class="card-header">Classe</div>
                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
		          <th>CATEGORIE MATIERE</th>
				   <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($categoryMat as $catM)
                  <tr>
                    <td></td>
                    <td>{{$catM->nomCatMatiere}}</td>
                    <td><a href="" data-toggle="modal" data-target="#ModalEdit"
														class="btn btn-info"><i class="fas fa-edit"></i></a>
                            
                          </td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
				  <th>CATEGORIE MATIERE</th>
				  <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                        </div>
                    </div>
              </div>




              <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">Add new Categorie Matiere</div>
                        <div class="card-body">
                        <form action="{{url('saveCatM')}}" method="post" id="add-catM-form" autocomplete="off">
                               
                            
   
                               @csrf
                                   <div class="form-group">
                                       <label for="">Code Classe</label>
                                       <input type="text" class="form-control" name="nomCatMatiere" placeholder="Enter ">
                                       <span class="text-danger error-text nomCatMatiere_error"></span>
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
    @include('Matiere.create') 
@endsection