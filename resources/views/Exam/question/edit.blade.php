@extends('dashboards.admins.layouts.dasMenu')
@section('title','AddQuestion')

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

    

    <div class="page-header">
<h1>
Question  Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Question for front page </small>&nbsp;<a href="/questions">View Question  </a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-md-12">
<!-- PAGE CONTENT BEGINS -->

     
     <form action="{{url('update-question/'.$data->id) }}" method="post"   >
     @csrf
     @method('PUT')

<div class="space-4"></div>
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
    <div class="col-sm-10">
         
        <select class="form-control" name="quizes_id" required="">
            <option value="{{$data->quizes_id}}">{{$data->quizes->quiz_name}}</option>
            @foreach($quiz as $qzs)
            <option value="{{$qzs->id}}">{{$qzs->quiz_name}}</option>
            @endforeach
        </select>
       
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Question </label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder="question" class="form-control" name="question" required="" value="{{$data->question}}" />
       
    </div>
</div>

 
    
 

@foreach($data->optionsdata as $key=>$option)
<input type="hidden" name="option_id[]" value="{{$option->id}}">
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Option {{++$key}} </label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" value="{{$option->option}}" />
       
    </div>
</div>
@endforeach
 
 

 
    
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Right Answer</label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder="Right Answer" class="form-control" name="answer" required="" value="{{$data->answer}}" />
       
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Note : </label>
    <div class="col-sm-10">
        <input type="text" id="form-field-2" placeholder=" Note " class="form-control" name="note" value="{{$data->note}}"   />
       
    </div>
</div>


<div class="space-4"></div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Update
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

 <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>




@endsection

