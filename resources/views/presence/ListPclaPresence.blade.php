@extends('dashboards.admins.layouts.dasMenu')
@section('title','Listpresence')

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
                      
                  																									
						<th>CODE ELEVES</th>
						<th>NOM</th>
						<th>PRENOM</th>
                        <th>STATUS</th>	
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($presence as $pre)
                  <tr>
                  
                    <td th:text="${e.codeEl}" class="mailbox-name"></td>
                    <td >{{$pre->inscription->nom}}</td>                  
                    <td >{{$pre->inscription->prenom}}</td>
                    <td >{{$pre->presAbs}}</td>
                  </tr>
                  @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  <tr>                      
                  <th>CODE ELEVES</th>
				   <th>NOM</th>
				  <th>PRENOM</th>
                  <th>STATUS</th>
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