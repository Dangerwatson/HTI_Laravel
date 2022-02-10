@extends('dashboards.admins.layouts.dasMenu')
@section('title','ListeMatiere')

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
								<!-- Tables Data -->

								<div class="card">
									<div class="card-header">
										<!-- <h3 class="card-title">DataTable with default features</h3> -->
										<a href="{{url('addMatiere')}}"><button type="button" class="btn btn-primary"
											data-toggle="modal" data-target="#addMatiere">add
											new</button></a>
										<!-- <a   class="btn btn-warning" data-toggle="modal" data-target="#editModal">edit</a> -->
									</div>
									<div class="card-header">
										<h3 class="card-title">DataTable with default features</h3>
									</div>
									<!-- /.card-header -->
									<div class="card-body">
									
										<table id="example1"
											class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>ID Matiere</th>
													<th>Code Matiere</th>
													<th>Categorie Matiere</th>
													<th>Matiere</th>
													<th>Coefficient</th>
													<th>Classe</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											@foreach($matiere as $ma)
												<tr>
													<td>{{$ma->id}}</td>
													<td></td>
													<td>{{$ma->categoryMat->nomCatMatiere}}</td>
													<td>{{$ma->nomMatiere}}</td>
													<td>{{$ma->coefficient}}</td>
													<td>{{$ma->classe->name_classe}}</td>
													<td><a href="{{ url('editMat/'.$ma->id)}}"
														class="btn btn-info"><i class="fas fa-edit"></i></a>
                            
                                                    </td>
												</tr>
												@endforeach
											</tbody>
											<tfoot>
												<tr>
													<th>ID Matiere</th>
													<th>Code Matiere</th>
													<th>Categorie Matiere</th>
													<th>Matiere</th>
													<th>Classe</th>
													<th>Coefficient</th>
													<th>Action</th>
												</tr>
											</tfoot>
										</table>
									</div>
									<!-- /.card-body -->
								</div>
							</div>
						</div>
					</div>
				</section>

	oooooooooooooo
	<div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">LISTE DES MATIERES</h3> 
                
                <div class="col-md-2 ml-auto mr-auto">
                <div class="input-group input-group-sm">                
                   <input type="text" th:object="${clsMat}"  th:field="*{classeName}"  class=" border-0" readonly >                                  
                </div>             
              </div> 
                 
                                  <div class="card-header float-right">										
										<a href="{{url('addMatiere')}}"><button type="button" class="btn btn-primary"
											data-toggle="modal" data-target="#addClasses">add
											new</button></a>
									</div>
                           
              </div>
              
               <form >
               <div th:if="${listeMatiere}">          
                   <!-- Main content -->
                    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Date:</h3> -->
              </div>
              <!-- card-header -->
              <div class="card-body"> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
				  <tr>
													<th>ID Matiere</th>
													<th>Code Matiere</th>
													<th>Categorie Matiere</th>
													<th>Matiere</th>
													<th>Coefficient</th>
													<th>Classe</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											@foreach($matiere as $ma)
											Classe: {{$ma->classe->name_classe}}
                          
												<tr>
													<td>{{$ma->id}}</td>
													<td></td>
													<td>{{$ma->categoryMat->nomCatMatiere}}</td>
													<td>{{$ma->nomMatiere}}</td>
													<td>{{$ma->coefficient}}</td>
													<td>{{$ma->classe->name_classe}}</td>
													<td><a href="{{ url('editMat/'.$ma->id)}}"
														class="btn btn-info"><i class="fas fa-edit"></i></a>
                            
                                                    </td>
												</tr>
												@endforeach
											</tbody>
											<tfoot>
												<tr>
													<th>ID Matiere</th>
													<th>Code Matiere</th>
													<th>Categorie Matiere</th>
													<th>Matiere</th>
													<th>Classe</th>
													<th>Coefficient</th>
													<th>Action</th>
												</tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
              </div>
              
              </form>
              
              
            </div>
            
          </div> lll

       
    <!-- /.content -->  
@endsection

