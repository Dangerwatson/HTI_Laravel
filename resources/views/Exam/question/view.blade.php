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
Question  Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Question for front page </small>&nbsp;<a href="/questions/create">Add new Question </a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-md-12">
<!-- PAGE CONTENT BEGINS -->



<table class="table table-bordered tale-hover" id="datatables">
    <thead>
        <tr>
            <th>SL</th>
            <th>Quiz Name</th>
            <th>Question</th>
            <th>Right Ans</th>
           
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($questions as $key=>$qus)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$qus->quizes->quiz_name}}</td>
                <td>{{$qus->question}}</td>
                <td>{{$qus->answer}}</td>
                <td>View</td>
                <td><a href="{{ url('editer/'.$qus->id)}}">Edit</a></td>
                <td>
                   
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>



</div>
</div>




@endsection



