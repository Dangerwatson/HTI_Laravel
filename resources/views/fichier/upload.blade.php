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
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            

          <!-- /.col -->
        </div>
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
                  <th>name</th>
                  <th>description</th>
                  <th>classe</th>
                  <th>view</th>
                  <th>Download</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($collection as $object)
                  <tr>
                    <td>{{$object->name}}</td>
                    <td>{{$object->description}}</td>
                    <td>{{$object->classe->name_classe}}</td>                    
                    <td><a href="{{url('/view',$object->id)}}">view</a></td>
                    <td><a href="{{url('/download',$object->file)}}">Download</a></td>
                    <td><a href=""
														class="btn btn-info"><i class="fas fa-edit"></i></a>
                            
                          </td>
                  </tr>
                  @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>name</th>
                  <th>description</th>
                  <th>classe</th>
                  <th>view</th>
                  <th>Download</th>
                  </tr>
                  </tfoot>
                </table>
                        </div>
                    </div>
              </div>




              <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">Add new fichier</div>
                        <div class="card-body">
                        <form action="{{ url('saveFic') }}" method="post" enctype="multipart/form-data">
                     
                     @csrf
                         <div class="form-group">
                             <label for="">name</label>
                             <input type="text" class="form-control" name="name" placeholder="Enter nameeee">
                             <span class="text-danger error-text name_error"></span>
                         </div>
                         <div class="form-group">
                             <label for="">description</label>
                             <input type="text" class="form-control" name="description" placeholder="Enter nameeee">
                             <span class="text-danger error-text description_error"></span>
                         </div>
                             
                         <div class="form-group">
                             <label for="">document</label>
                             <input type="file" class="form-control" name="file" placeholder="Enter ">
                             <span class="text-danger error-text file_error"></span>
                         </div>
                         <div class="form-group">                                   
														<label > CLASSE</label> <select class="form-control" name="cate_id" >
														<option value="">-SELECT Classe-</option>
                              @foreach($classe as $cla)
															       <option value="{{$cla->id}}">{{$cla->name_classe}}</option>
                               @endforeach															
														</select>
														<span class="text-danger error-text name_classe_error"></span>
													</div>
                         <div class="form-group">
                             <button type="submit" class="btn btn-block btn-success">SAVE</button>
                         </div>
                     </form>

                        </div>
                    </div>
              </div>
          </div>

    </div>
    <!-- /.content -->  
@endsection