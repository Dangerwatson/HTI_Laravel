@extends('dashboards.admins.layouts.dasMenu')
@section('title','Dashboard')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



          
          <section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<div class="card">
									
								
									<!-- /.card-body -->
									
								</div>
								
							</div>
							<!-- /.col -->
 <div class="col-md-9">
            <div class="card card-primary card-primary">
              <div class="card-header">
                <h3 class="card-title">PALMARES</h3>
              </div>
              <!-- /.card-header -->
              <form action="{{ url('save.note') }}" method="post" id="addll-classe-form" autocomplete="off">
              @csrf
              <div class="card-body">
              <div >
               <div class="row">
                 <div class="col-sm-3">
                      <!-- select frequence -->
                      <div class="form-group">
                        <label>CONTROLE/MENSUEL:</label>
                         <select class="form-control" name="frequence" >                                          
										<optgroup style="color:red" label="MENSUEL">
										                    <option style="color:black" value="">SELECTIONNER</option>														    
															<option style="color:black" value="Janvier">Janvier</option>
															<option style="color:black" value="Fevrier">Fevrier</option>
															<option style="color:black" value="Mars">Mars</option>
															<option style="color:black" value="Avril">Avril</option>
															<option style="color:black" value="Mai">Mai</option>
															<option style="color:black" value="Juin">Juin</option>
															<option style="color:black" value="Juillet">Juillet</option>
															<option style="color:black" value="Aout">Aout</option>
															<option style="color:black" value="Septembre">Septembre</option>
															<option style="color:black" value="Octobre">Octobre</option>
															<option style="color:black" value="Novembre">Novembre</option>
															<option style="color:black" value="Decembre">Decembre</option>
										</optgroup>	
										<optgroup style="color:red" label="CONTROLE">														    
															<option style="color:black" value="1er Controle">1er Controle</option>
															<option style="color:black" value="2eme Controle">2eme Controle</option>
															<option style="color:black" value="3eme Controle">3eme Controle</option>
															<option style="color:black" value="4eme Controle">4eme Controle</option>
										</optgroup>														
						</select>
						
                      </div>
                      
                    </div>
                    
                     <div class="col-sm-3">
                      <!-- select matiere-->
                      <div class="form-group">
                        <label>MATIERE</label>
                         <select id="list" class="form-control"  name="mat_id" >
									<option value="">-SELECT matiere-</option>
                              @foreach($matiere as $mat)
									<option value="{{$mat->id}}">{{$mat->nomMatiere}}</option>
                               @endforeach															
									</select> 
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-3">
                     <!-- input classe-->
                <div class="form-group">
                 <label>CLASSE </label>
                  <input   class="form-control" readonly>
                  
                </div>
                </div>
                
                      <div class="col-sm-3">
                      <!-- select annee academique-->
                      <div class="form-group">
                        <label>ANNEE ACADEMIQUE</label>
                        <select class="custom-select" name="anneeAcad">
                          <option value="">-SELECT-</option>
                            <th:block th:each="anne:${listAnnee}">
						  <option  th:text="${anne.anneeAC}" th:value="${anne.idAcad}"></option>
                        </select>
                      </div>
                    </div>
                
                </div>
                @foreach($inscription as $insc)
                {{$insc->classe->name_classe}}
                <input type="hidden" name="cate_id[]" value="{{$insc->cate_id}}">
                <div  class="form-group">
                   <div class="form-group row">                   
                   <input type="hidden" name="id_pers[]" value="{{$insc->id}}">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >{{$insc->nom}} </label>
                    <label for="inputEmail3" class="col-sm-2 col-form-label" > {{$insc->prenom}}</label>                    
                    <div class="col-sm-5">
                      <!-- <input name="note"  class="form-control" id="inputEmail3" value="0"> -->
                      
                        <input type="text" name="note[]" value="{{$insc->note}}" value="0" class="form-control">
                        <div class="inputs">
                          <input type="text" class="input"  name="mat_id[]" />
                        </div>
                      <!-- <input type="text"  value="{{$mat->id}}" name="mat_id[]"> -->
                   <!-- <select class="form-control" name="mat_id[]" >
									<option value="">-SELECT matiere-</option>
                              @foreach($matiere as $mat)
									<option value="{{$mat->id}}">{{$mat->nomMatiere}}</option>
                               @endforeach															
									</select>  -->
										<span class="text-danger error-text nomMatiere_error"></span>
				   
                    </div> 
                  </div> 
                </div>
                @endforeach
                
                <!-- /.card-body -->
										<div class="card-footer">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
              </div>
              </div>
              </form>
              <!-- /.card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
          <form>
<b> Select you favourite tutorial site using dropdown list </b>
<select id = "myList"  >
<option> ---Choose tutorial--- </option>
<option onClick = "favTutorial()"> w3schools </option>
<option> Javatpoint </option>
<option> tutorialspoint </option>
<option> geeksforgeeks </option>

<div id="a">

</div>

</select>

<p> Your selected tutorial site is:</p>
<div id="input-list">
</div>
<!-- @foreach($inscription as $insc) 
<input type = "text"  id = "favourite" size = "20"/>
@endforeach -->
</form>
          
					<!-- /.container-fluid -->
				</section>



        <script>
                        var list = document.getElementById('list');
                        var listInput = document.getElementsByClassName('inputs');
                        
                        list.addEventListener('change', () => {
                          var input = document.getElementsByClassName('input');
                          
                          
                          for(let i = 0; i < listInput.length; i++){
                            input[i].value = list.options[list.selectedIndex].innerHTML;
                            listInput[i].appendCild(input[i]);
                          }

                        });
        </script>

<script>
function favTutorial() {
  // var myList = document.getElementById("myList");
  // var inputList = document.getElementById("input-list");

let d=document.getElementById('a');
let t=[];

 for(let i=0;i<3;i++)
 {
    t[i]=document.createElement('input');
    d.appendChild(t[i]);
 }
  

  
  

  // var value1 = myList.options[myList.selectedIndex].text;

  // for(let i = 0; i < 3; i++){
   
  //   var input = document.createElemnt('input');
  //   input.setAttribute('value', value1);
  //   myList = document.append(input);
  // }


  }
</script>

          @endsection



         