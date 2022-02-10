@extends('dashboards.admins.layouts.dasMenu')
@section('title','ListeClasse')

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
							<div class="col-md-3">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">LISTE DES CLASSES</h3>

										<div class="card-tools">
											<button type="button" class="btn btn-tool"
												data-card-widget="collapse">
												<i class="fas fa-minus"></i>
											</button>
										</div>
									</div>
									<div class="card-body p-0" >
										<ul class="nav nav-pills flex-column" >
                    @foreach($classe as $cla)
											<li class="nav-item" ><a class="nav-link"href="{{url('viewMatClasse/'.$cla->name_classe)}}"> 
                        <i class=" nav-link fas fa-inbox">{{$cla->name_classe}}</i>
                     @endforeach
											 <span class="badge bg-primary float-right"></span>
											</a></li>

										</ul>
									</div>
									
								</div>
								
							</div>	
							<!-- /.col -->
</section>

       
    <!-- /.content -->  
@endsection