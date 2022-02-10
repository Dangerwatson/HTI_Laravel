@extends('dashboards.admins.layouts.dasMenu')
@section('title','editProf')

@section('content')


<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Edit Professeur</h1>
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
									<form action="{{url('update.prof/'.$professeur->id) }}" method="post"   enctype="multipart/form-data" id="akkdd-inscri-form"  autocomplete="off">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
														<div class="row">
													<div class="col-12  col-sm-6">
															<div class="form-group">
																<label for="exampleInputEmail1">CODE</label> <input
															type="text" class="form-control" name="codeProf" value="{{$professeur->codeProf}}" >
															</div>
														</div>
														<div class="col-12  col-sm-6">
															<div class="form-group">
																<label for="exampleInputEmail1">NOM</label> <input
															type="text" class="form-control" name="nom" value="{{$professeur->nom}}" onkeyup="this.value=this.value.toUpperCase()">
															
															</div>
														</div>
													</div>
													<div class="row">														
														<div class="col-12  col-sm-6">
															<div class="form-group">
														<label for="exampleInputEmail1">PRENOM</label> <input
															type="text" class="form-control" name="prenom" value="{{$professeur->prenom}}"  onkeyup="this.value=this.value.toUpperCase()">
															
													</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
														<label>SEXE</label> 
                                                        <select  name="gens" id="gens"  class="form-control" >														   
															<option value="Masculin" {{$professeur->gens == "Masculin" ? 'selected' : '' }}>Masculin</option>
															<option value="Feminin" {{$professeur->gens == "Feminin" ? 'selected' : '' }}>Feminin</option>
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
														<input type="text" name="telephone" value="{{$professeur->telephone}}" class="form-control" >															
														</div>
													</div>
														</div>

														<div class="col-12 col-sm-6">
															<div class="form-group">
														<label for="exampleInputEmail1">LIEU DE NAISSANCE</label> <input type="text" name="lieuDeNaissance" value="{{$professeur->lieuDeNaissance}}" class="form-control"
															 onkeyup="this.value=this.value.toUpperCase()">
													</div>
															
														</div>
													</div>
													<div class="row">
														<div class="col-12 col-sm-6">
															<div class="form-group">
														<label for="exampleInputEmail1">ADRESSE</label> <input type="text" name="adresse" value="{{$professeur->adresse}}" class="form-control"
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
                                                                @if($professeur->image)
                                                                     <img src="{{asset('images/inscription/'.$professeur->image)}}" width="70">
                                                                @endif
														</div>
													</div>
													</div>
														</div>
														
													<div class="row">
														<div class="col-12 col-sm-6">
														<div class="form-group">
															<label for="exampleInputEmail1">EMAIL</label> <input
																type="text" name="emailPersonne" value="{{$professeur->emailPersonne}}" class="form-control">
														</div>
														</div>
														
                                                        <div class="col-12 col-sm-6">
                                                           <label > CLASSE</label> 
                                                           <select class="form-control" name="cate_id" id="name_classe">
                                                            @foreach($classe as $cla)
                                                                <option value="{{$cla->id}}" {{$cla->id==$professeur->cate_id? 'selected' : ''}}>{{$cla->name_classe}}</option>
                                                            @endforeach 
                                                            </select>
											                  <span class="text-danger error-text cate_id_error"></span>
									                 </div>
													</div>
													
													<div class="row">
														<div class="col-12  col-sm-6">												
													<div class="form-group">
															<label for="exampleInputEmail1">NIVEAU ETUDE</label> <input
																type="text" name="niveauEd" value="{{$professeur->niveauEd}}" class="form-control"
																 onkeyup="this.value=this.value.toUpperCase()">
														</div>
													</div>
													<div class="col-12  col-sm-6">												
													<div class="form-group">
															<label for="exampleInputEmail1">REMARQUE</label> <input type="text"
																 name="remarque" value="{{$professeur->remarque}}" rows="3" class="form-control"></input>
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