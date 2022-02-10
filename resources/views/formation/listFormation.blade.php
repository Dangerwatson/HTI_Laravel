@extends('dashboards.admins.layouts.dasMenu')
@section('title','ListeDFormation')

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
											
							
							<!-- /.col -->
 <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">LISTE DE FORMATION</h3> 
                <!-- card-tools float-left -->
                <div class="col-md-2 ml-auto mr-auto">
                <div class="input-group input-group-sm">                
                  <input type="text" nom  class=" border-0" readonly >                                  
                </div>             
              </div> 
                 <div class="float-right">
                
              </div>              
              </div>
              
               <form >
               <div th:if="${listeFormt}">          
                   <!-- Main content -->
                   <br>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h6 class="text-center">                 
                    <strong> MINISTERE DE L'EDUCATION NATIONALE DE LA JEUNESSE ET DES SPORTS</strong>
                    <!-- <strong class="float-right">Pré......................</strong> -->
                  </h6>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Déposé le :<input type="text" class="border-0" size="15" placeholder="........................">
                  <address>
                  Traité le :<input type="text" class="border-0" size="15" placeholder="..........................."><br>
                  Par :<input type="text" class="border-0" size="15" placeholder="..................................."><br>
                                                        <br><br>
                   <strong>Ecole: SUNSHINE ACADEMY</strong><br>
                    <strong>Adresse: 486,Santo 15 Route de la Croix-des-Bouquets</strong>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col text-center">
                  <strong>Bureau National des Examens d'Etat</strong>
                  <address>
                    <strong>DEPARTEMENT DE L'OUEST</strong><br>                   
                    <strong>Liste de formation-Annee <input type="text" class="border-0" size="5" placeholder="Annee Acad"> </strong><br>
                                                                      <br><br>
                    <strong>Directeur: Jean Yvens FRANCOIS</strong><br>
                   <strong>Communes: Croix-des-Bouquets</strong> 
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 <strong class="float-right">Pré...................... </strong><br>
                  <address>
                  <strong class="float-right">Ins......................</strong><br>
                    <strong class="float-right">Sus......................</strong><br>
                    <strong class="float-right">Total....................</strong><br>
                   <strong class="float-right">Refoulé................ </strong><br>
                   <strong th:object="${clsF}" th:text="*{classeName}" > FONDAMENTALE </strong><br>
                   <strong > TEL: <input type="text" class="border-0" size="25" placeholder="Entrer votre Numero"></strong> <strong>No de la licence.....</strong>
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
 
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-bordered sortable " style="width:100%">
                  
                    <thead>
                                     
                    <tr>
                     <!--  <th>ID</th> -->
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Sexe</th>
                      <th>Date de Naissance</th>
                      <th>Lieu de Naissance</th>
                    </tr>
                    </thead>
                    <tbody>                    
                    
                    @foreach($inscription as $insc)
                  <tr>                    
                    <td>{{$insc->nom}}</td>
                    <td>{{$insc->prenom}}</td>
                    <td>{{$insc->gens}}</td>
                    <td></td> 
                    <td>{{$insc->lieuDeNaissance}}</td>                   
                  </tr>
                  @endforeach
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              
             <script src=https://www.kryogenix.org/code/browser/sorttable/sorttable.js></script>
             <script src="sorttable.js"></script>  
             <script type="text/javascript">
		             var tables = document.getElementsByTagName('table');
		             var table = tables[tables.length - 1];
		             var rows = table.rows;
		             for(var i = 0, td; i < rows.length; i++){
		                 td = document.createElement('td');
		                 td.appendChild(document.createTextNode(i + 1));
		                 rows[i].insertBefore(td, rows[i].firstChild);
		             }
             </script>
         
              <!-- /.row -->

              
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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

       
    <!-- /.content -->  
@endsection