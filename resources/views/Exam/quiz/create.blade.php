@extends('dashboards.admins.layouts.dasMenu')
@section('title','Quize')

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

    

       kkkkkkkkkk
       <form class="form-horizontal" role="form" action="{{ url('saveExam') }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="space-4"></div>
 
 
<div class="space-4"></div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
    <div class="col-sm-9">
         
     <input type="text" id="form-field-2" placeholder="Quize Name" class="col-xs-10 col-sm-5" name="quiz_name" required="" >
         
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="Descriotion" class="col-xs-10 col-sm-5" name="description" required="" />
       
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Date</label>
    <div class="col-sm-9">
        <input type="date" id="form-field-2" placeholder="quiz date" class="col-xs-10 col-sm-5" name="quiz_date"   />
       
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Time</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5" name="quiz_time" required="" title="example 01:00 " />
        <span> exm: 00:00</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Number Of Question View for User</label>
    <div class="col-sm-9">
        <input type="text" id="form-field-2" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5" name="number_of_question" required="" />
       
    </div>
</div>
<div class="space-4"></div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
        </button>

        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="ace-icon fa fa-undo bigger-110"></i>
            Reset
        </button>
    </div>
</div>

<div class="hr hr-24"></div>

 
</form>

<div class="col-md-12">
    <table class="table table-bordered">
       <thead>
           <tr>
           <tr>
               <th>Sl</th>
               <th>Quiz Name</th>
               <th>Description</th>
               <th>Date</th>
               <th>Time</th>
              
               <th>Num of Exam Qus</th>
          <th>Status</th>
          <th>P.No</th>
               <th>Details</th>
               <th>Edit</th>
               <th>Delete</th>
           </tr>
           </tr>
       </thead>
       <tbody>
       @foreach($quizes as $key=>$data)
           <tr>
               <td>{{++$key}} </td>
               <td>{{$data->quiz_name}} </td>
               <td>{{$data->description}} </td>
               <td>{{$data->quiz_date}} </td>
               <td>{{$data->quiz_time}} </td>
                         
               <td>{{$data->number_of_question}} </td>
               <td><input type="checkbox" name="status" class="quiz-status" data_id="{{$data->id}}" {{$data->status=='1'?'checked':''}}> </td>
               <td><a href="/quize/addquestion/{{$data->id}}">Add Question</a></td>
          <td><a href="/quizesDetails/{{$data->id}}">Details</a></td>
               <td><a href="/quizes/{{$data->id}}/edit">Edit</a></td>
               <td>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>
              </td>
           </tr>
           @endforeach
       </tbody>
    </table>
</div>

    <!-- /.content -->  
    @endsection

@section('js')

<script type="text/javascript">
 
    $(document).on('click','.quiz-status',function(){
     var id=$(this).attr('data_id');
   var url=("{!!url('/')!!}");
   
     $.get(url+'/quiz_status/'+id,function(fb){
         alert('Staus Successfully changed');
     });
    });
</script>
@endsection
@section('script')

