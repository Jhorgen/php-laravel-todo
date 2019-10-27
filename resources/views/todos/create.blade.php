@extends('layouts.default')
@section('content')
<div class="row">
 <div class="col-sm-12">
  <div class="pull-left">
   <h2>Add New Task</h2>
  </div>
  <div>
   <a href="{{route('todos.index')}}" class="btn btn-success btn-block">
    Go Back
   </a>
  </div>
 </div>
</div>

@if(count($errors) > 0)
<div class="alert alert-danger">
 <strong>Something went wrong</strong>
  <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
  </ul>
</div>
@endif


@endsection
