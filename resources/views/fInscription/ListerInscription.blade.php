@extends('dashboards.admins.layouts.dasMenu')
@section('title','Dashr')

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


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>CLASSE</th>
                  <th>GENS</th>
                  <th>ADRESSE</th>
                  <th>IMAGES</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($inscription as $insc)
                  <tr>
                    <td></td>
                    <td>{{$insc->nom}}</td>
                    <td>{{$insc->prenom}}</td>
                    <td>{{$insc->classe->name_classe }}</td>
                    <td>{{$insc->gens}}</td>
                    <td>{{$insc->adresse}}</td>
                    <td>
                    <img src="{{asset('images/inscription/'.$insc->image)}}" width="70">
                    </td>
                    <td><a href="{{ url('editEl/'.$insc->id)}}"
														class="btn btn-info"><i class="fas fa-edit"></i></a>
                            
                          </td>
                  </tr>
                  @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>CLASSE</th>
                  <th>GENS</th>
                  <th>ADRESSE</th>
                  <th>IMAGES</th>
                  <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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