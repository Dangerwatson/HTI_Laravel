<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br />
      <h3 align="center">Live Table Edit Delete with jQuery Tabledit in Laravel</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Sample Data</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
              <tr>
                               
                                       
                    <th rowspan="1" class="text-center">NOM</th>
                    <th rowspan="1" class="text-center">PRENOM</th>
                    <th  id="thMatiere" colspan="2" class="text-center table-active">MATIERE</th>
                    <th rowspan="1" class="text-center">TOTAL</th>
                     <th rowspan="1" class="text-center">MOYENNE</th>
                     <th>Mention</th>
                   </tr>         
                <tr>
                <th></th> 
                   <!--  <th></th> -->
                                  
                    
                    <th></th>
                    @foreach($matiere as $row)
                    <th class="matiere" >{{ $row->nomMatiere}}</th>
                    @endforeach
                     <th></th>
                      <th></th>
                      <th></th>
                                                         
                  </tr>
                </tr>
              </thead>
              <tbody>
                @foreach($inscription as $row)
                <tr>
                  <td>{{ $row->nom }}</td>
                  <td class="tdPrenom">{{ $row->prenom }}</td>
                  @foreach($data as $row)
                  <td class="note">{{ $row->note }}</td>
                  @endforeach
                  <td>kkkk</td>
                  <td>kkkk</td>
                  <td>kkkk</td>
                  <td>kkkk</td>
                  <td>kkkk</td>
                  <td>kkkk</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   
  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:'{{ route("tabledit.action") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[[2, 'note']]
      
    },
    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
  });


  //kkkkkkkkkkkkkkkkkk

  $(document).ready(function(){
		//alert("ok");
			//$("td.1").hide();
			//var thMatiereCount = document.querySelectorAll("#matiere .mat").length;
			var trCount = document.querySelectorAll("tbody tr");
			var thList = document.querySelectorAll("thead th.matiere").length;
			var thCoeMat = document.querySelectorAll("thead th.matiere");
			var SumCoe = 0;
			for(let i = 0 ; i < thCoeMat.length; i++){
				SumCoe += Number.parseFloat(thCoeMat[i].getAttribute("data-coe"))
			}
			//console.log(SumCoe)
			$("#thMatiere").attr("colspan",thList)
			//console.log($("#thMatiere").attr("colspan"))
			
			
			//var trCount = $("tbody tr");
			//var rangTrSum = 1;
			//var rangSum = trCount.length;
			//var firstIdTr = trCount[0].getAttribute("data-idP")
			//console.log(firstIdTr)
			//var firstIdTr = trCount[0].getAttribute("data-idP");
			
				
			/*for(var i=0; i<tds.length; i++){				
				console.log("Id : " + tds[i])
				//var tdr = 
			}*/
			
			//console.log(document.querySelectorAll("#" + String(firstIdTr)))
			//var tdList = document.querySelectorAll("#" + firstIdTr+" .td-note");
			//console.log(trCount.length)
			//console.log(trCount.length * 2)
			
			/*$("tbody tr").each(function(){
				$(this).attr("data-idP")
			})*/
			//var sumTr = Number.parseFloat(thList.length)
			//console.log("th + "+ thList)
			
			for(var i=0; i<trCount.length; i++){
				var idTr = trCount[i].getAttribute("data-idP");
			
				for(let j = 0; j < thList; j++){
					$("#"+idTr +" td.tdPrenom").after('<td class="tt ">0</td>')
					
				}
			}
		
			
		for(var i=0; i<trCount.length; i++){
				var idTr = trCount[i].getAttribute("data-idP");
				
				//console.log("Id tr: " + idTr)
				//var tds = $("#" + firstIdTr + " span")
				//console.log($("#"+idTr +" span").text())
				//console.log($("#"+idTr +" td.total").before("<td>0</td>"))
				$("#"+idTr +" span").parent().hide()
				//let spanText = $("#"+idTr +" span."+idTr).text()
				//console.log("span:"+spanText)
				//$("#"+idTr +" span").text("0")
				//console.log("SPAN "+$("#"+idTr +" span").text())
					
				$("#"+idTr +" span."+idTr).parent().show()
				
				var thSpa = $("#"+idTr +" td."+idTr);
				//var tdNotes = $("#"+idTr +" td."+idTr);
				var newTdNote="";
				
				for(let i = 0; i < thCoeMat.length; i++){
					let idMat = thCoeMat[i].getAttribute('data-idMat');
					for(let j = 0; j < thSpa.length; j++){
						//console.log("MAT ID td : "+thSpa[j].getAttribute('data-idM'))
						if(idMat == thSpa[j].getAttribute("data-idM")){
							let note = thSpa[j].getAttribute('data-note');
							//console.log("MAT ID td : "+thSpa[j].getAttribute("data-idM") +" - " + thSpa[j].innerHTML)
							newTdNote +='<td data-id="'+idTr+'" data-note="'+note+'" class="'+idTr+' note"><span data-td="'+ idTr+'" data-note="'+note+'" class="'+idTr+'">'+note+'</span></td>'
						}
					}					
				}
				console.log("NEW TD : "+thSpa[0]);
				//if(thSpa[0].getAttribute('data-note') != null){
					$("#"+idTr+" td."+idTr).remove()
					$("#"+idTr+" td.tdPrenom").after(newTdNote);
				//}
				
				
				var thSpans = $("#"+idTr +" span."+idTr).length;
				
				
				//console.log(thSpans)
				if(thSpans > 0){
					console.log($("#"+idTr +" td.tt").remove())
					for(let j = 0; j < thList-thSpans; j++){
						
						$("#"+idTr +" td.total").before('<td class="t '+idTr+'" ><span  class="'+idTr+'">0</span></td>')
						//$(".test").hide();
						//console.log($("#"+idTr +" span."+idTr+":last-child").parent())
						//$("#"+idTr +" span."+idTr+":last-child").parent().after('<td class="t">0</td>')
						
					}
				}
				//console.log("span In Th :"+thList);
				//console.log("span In Tr :"+thSpans);
				
				/*for(var j=0; j< tds.length; j++){
					var spanId =  tds[i].getAttribute("data-td")
					console.log("tr:" +idTr+" spanId : "+ spanId)
					console.log($("."+spanId).text())
					
					if(idTr != spanId){
						console.log($("."+spanId).text())
					}
				}*/
				//var tdr = 
				//var noteList = $("#"+idTr +" .note");
				var thSpa = $("#"+idTr +" td."+idTr);
				
				//console.log($("#OK").html())
				var tot = 0;
				//$(".total").text(thSpa.length);
				for(let i=0; i<thSpa.length; i++){
					tot +=Number.parseFloat(thSpa[i].textContent);
					//console.log("COE : "+ Number.parseFloat(thCoeMat[i].getAttribute("data-coe"))/100)
				}
				
				console.log("total :" + tot +" sumCoe :"+SumCoe);
				var moy = ((tot*10)/SumCoe).toFixed(2)
				
				var mention ="";
				if(moy >= 5.00)
					mention = "Reussi";
				else if(moy >= 4 && moy < 5)
					mention = "Ajourne";
				else
					mention = "elimine";
				
				$("#"+ idTr +" .total input").val(tot)
				$("#"+ idTr +" .moy input").val(moy)
				$("#"+ idTr +" .mention input").val(mention)
			}
			
			/*for(var i = 0; i<trCount.length; i++){
				var idTr = trCount[i].getAttribute("data-id");
				console.log("Id : "+idTr)
				console.log("rang "+ rangTrSum)
				for(var j = rangTrSum; j <= (trCount.length * 2) - rangSum; j++){
					console.log("ok" + j)
					rangTrSum++;					
				}
					
				rangTrSum--;
			}*/
		})
		
  //kkkkkkkkkkkkkkkkkk

}); 





</script>




<div class="col-12 table-responsive">
              <div  class="card-body"> 
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                     
                    <th rowspan="1" class="text-center">CODE ELEVE(s)</th>                   
                    <th rowspan="1" class="text-center">NOM</th>
                    <th rowspan="1" class="text-center">PRENOM</th>
                    <th  id="thMatiere" colspan="2" class="text-center table-active">MATIERE</th>
                    <th rowspan="1" class="text-center">TOTAL</th>
                     <th rowspan="1" class="text-center">MOYENNE</th>
                     <th>Mention</th>
                   </tr>                   
                  
                  <tr>
                    <th></th> 
                   <!--  <th></th> -->
                    <th></th>                  
                    <th></th>
                    <th></th>
                    <th class="matiere" >
                      </th>
                     <th></th>
                      <th></th>
                                                         
                  </tr>
                  </thead>
                  <tbody>
                  <tr th:each="n:${moyen}" th:data-idP="${n.idPerson}" th:id="${n.idPerson}" class="t">
<!--                  <td><input type="checkbox" class="checkUpdate" th:data-id="${n.idRelve}" th:data-name="${n.note}"/><input type="hidden" class="idRelve" name="idRelve" th:value="${n.idRelve}"/></td> --> 
                  <td th:text="${n.AnneeAcade.anneeAC}"></td>                   
                  <td th:text="${n.codeEl}" ></td>
                  <td th:text="${n.nom}"></td>
                   <td class="tdPrenom" th:text="${n.prenom}"></td> 
                  	
                    <td th:each="n:${notC}" th:data-id="${n.eleves.idPerson}" th:data-idM="${n.matiere.idMatiere}" name="note" class="note" th:data-note="${n.note}" th:class="${n.eleves.idPerson}"><span th:data-td="${n.eleves.idPerson}" th:class="${n.eleves.idPerson}" th:data-note="${n.note}">[[${n.note}]]</span> 
                    <input type="hidden"  th:value="${n.idRelve}"  name="releveNote"  class="form-control" ></td> 
                     
                                                      
                     <td class="total"><input class="border-0 bg-transparent" size="5" readonly name="total"/></td>                     
                     <td class="moy"><input class="border-0 bg-transparent" size="2" readonly name="moyenne"/></td>
                     <td class="mention"><input class="border-0 bg-transparent" size="5" readonly name="mention" value="inconnu"/></td>
                    <!--  insertion personne -->
                      <input type="hidden"  th:value="${n.idPerson}"  name="idPerson"  class="form-control" >  
                     <!-- <input type="hidden"  th:value="${n.AnneeAcade.idAcad}"  name="anneeAcad"  class="form-control" >  --> 
                                    
                   </tr>
                  </tbody>
                  <!-- <tfoot>
                  
                  </tfoot> -->
                </table>               
                
              </div>
              </div>
