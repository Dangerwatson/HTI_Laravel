@extends('dashboards.admins.layouts.dasMenu')
@section('title','presence')

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
							
 <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">CAHIER D'APPEL</h3> 
                <!-- card-tools float-left -->
                <div class="col-md-2 ml-auto mr-auto">
                <div class="input-group input-group-sm">                
                  <input type="text" th:object="${cls}"  th:field="*{classeName}"  class="form-control" readonly >                 
                  <div class="input-group-append">                    
                  </div>
                </div>
              </div>
                
                
                <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              
               <form action="{{ url('save.pres') }}" method="post"  autocomplete="off">
               @csrf
               <div >
               <div class="card-body p-0">               
              <div class="mailbox-controls">
               <input type="hidden"  >
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i></i><!-- <i class="far fa-square"></i> -->
                <input type="checkbox"  id="check1" class="checkPresAll"/>
                </button> Check all                          
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                <thead>
												<tr>
													<th>PRESENCE/ABSENCE</th>																										
													<th>CODE ELEVES</th>
													<th>NOM</th>
													<th>PRENOM</th>
												</tr>
				</thead>
                  <tbody>
                  @foreach($inscription as $insc)
                   <!-- {{$insc->classe->name_classe}} -->
                  <tr >
                    <td>                     
                      <input type="checkbox"  id="check1" class="checkPres" />                      
                        <input type="text"   name="presAbs[]"  value="{{$insc->presAbs}}" class="presValue  border-0" size="5" readonly/>                       
                        <input type="hidden" name="id_pers[]" value="{{$insc->id}}">
                        <input type="hidden" name="cate_id[]" value="{{$insc->cate_id}}">
                                               
                    </td>                   
                   
                    <td th:text="${e.codeEl}" class="mailbox-name"></td>
                    <td  class="mailbox-name">{{$insc->nom}}</td>                  
                    <td  class="mailbox-subject">{{$insc->prenom}}</td>
                    
                  </tr>
                  @endforeach
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
              </div>
              <div class="card-footer">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
              </form>
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</section>
<!-- checkkkkkkkkkkkkkkkkk -->
<script>
  
  
</script>

    
    <!-- /.content -->  
@endsection