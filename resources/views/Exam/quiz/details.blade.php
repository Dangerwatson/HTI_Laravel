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

    

       <h3>{{$data->quiz_name}}</h3>
       <hr>

       @foreach($questions as $key=>$ques)
       <h5> {{$key+1}}. {{$ques->question}}</h5>
       <ol class="ul-list" style="list-style-type: lower-alpha;">

       @foreach($ques->optionsdata as $opt)
        
       <li> <input type="radio" {{$opt->option==$ques->answer ? 'checked' : ''}} /> {{$opt->option}} </li>
       @endforeach       
       </ol>
       @if($ques->note!="")
            <h5 style="color: blue ;">Remarque : {{$ques->note}}</h5>
      @endif
       @endforeach
       
@endsection

@section('js')

<script type="text/javascript">
 
    
</script>
@endsection


