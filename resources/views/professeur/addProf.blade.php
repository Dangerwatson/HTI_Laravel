@extends('dashboards.admins.layouts.dasMenu')
@section('title','addProf')

@section('content')


<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Add Professeur</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Gestion des
										Professeurs</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>

    <!-- Main content -->
    <section class="content">
					<div class="container-fluid">
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- jquery validation -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Modifier les informatios</h3>
									</div>
									<!-- /.card-header -->
									<!--************************** form start ********************************-->
									<form action="{{url('save.prof')}}" method="post"   enctype="multipart/form-data" id="akdd-inscri-form"  autocomplete="off">
                                    @csrf
                                    <div class="card-body">
														<div class="row">
													<div class="col-12  col-sm-6">
															<div class="form-group">
																<label for="exampleInputEmail1">CODE</label> <input
															type="text" class="form-control" name="codeProf" >
															</div>
														</div>
														<div class="col-12  col-sm-6">
															<div class="form-group">
																<label for="exampleInputEmail1">NOM</label> <input
															type="text" class="form-control" name="nom" onkeyup="this.value=this.value.toUpperCase()">
															
															</div>
														</div>
													</div>
													<div class="row">														
														<div class="col-12  col-sm-6">
															<div class="form-group">
														<label for="exampleInputEmail1">PRENOM</label> <input
															type="text" class="form-control" name="prenom"  onkeyup="this.value=this.value.toUpperCase()">
															
													</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
														<label>SEXE</label> <select  name="gens" class="form-control" >
														    <option value="">-SELECT-</option>
															<option value="Masculin">Masculin</option>
															<option value="Feminin">Feminin</option>
														</select>
													</div>

														</div>
													</div>
																								
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
														<label>TELEPHONE</label> 
														<div class="input-group">
														<div class="input-group-prepend">
                                                                        <span class="input-group-text"><i >+(509)</i></span>
                                                         </div>
														<input type="text" name="telephone" class="form-control" >															
														</div>
													</div>
														</div>

														<div class="col-12 col-sm-6">
															<div class="form-group">
														<label for="exampleInputEmail1">LIEU DE NAISSANCE</label> <input type="text" name="lieuDeNaissance" class="form-control"
															 onkeyup="this.value=this.value.toUpperCase()">
													</div>
															
														</div>
													</div>
													<div class="row">
														<div class="col-12 col-sm-6">
															<div class="form-group">
														<label for="exampleInputEmail1">ADRESSE</label> <input type="text" name="adresse" class="form-control"
															id="exampleInputEmail1">
													    </div>
														</div>
														
														<div class="col-12  col-sm-6">												
													<div class="form-group">														
														<label>PHOTOS</label>
														<div class="custom-file">
															<input type="file" class="custom-file-input"
																 name="image" > <label
																class="custom-file-label" for="customFile">Choose
																file</label>
														</div>
													</div>
													</div>
														</div>
														
													<div class="row">
														<div class="col-12 col-sm-6">
														<div class="form-group">
															<label for="exampleInputEmail1">EMAIL</label> <input
																type="text" name="emailPersonne" class="form-control">
														</div>
														</div>
														
                                                        <div class="col-12 col-sm-6">
                                                           <label > CLASSE</label> 
                                                           <select class="form-control" name="cate_id" >
											                      <option value="">-SELECT CLASSE-</option>
                                                                @foreach($classe as $cla)
											                        <option value="{{$cla->id}}">{{$cla->name_classe}}</option>
                                                                @endforeach															
									                       </select>
											                  <span class="text-danger error-text cate_id_error"></span>
									                 </div>
													</div>
													
													<div class="row">
														<div class="col-12  col-sm-6">												
													<div class="form-group">
															<label for="exampleInputEmail1">NIVEAU ETUDE</label> <input
																type="text" name="niveauEd" class="form-control"
																 onkeyup="this.value=this.value.toUpperCase()">
														</div>
													</div>
													<div class="col-12  col-sm-6">												
													<div class="form-group">
															<label for="exampleInputEmail1">REMARQUE</label> <textarea
																 name="remarque" rows="3" class="form-control"></textarea>
														</div>
													</div>
													</div>
													
													
										</div>

										<!-- /.card-body -->
										<div class="card-footer">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
								<!-- /.card -->
							</div>
							<!--/.col (left) -->
							<!-- right column -->
							<div class="col-md-6"></div>
							<!--/.col (right) -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</section>
    <!-- /.content -->  
@endsection