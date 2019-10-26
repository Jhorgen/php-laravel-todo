@extends('layouts.default')
@section('content')
<div class="row">
 <div class="col-sm-12">
  <div class="pull-left">
    <h2>Todo List</h2>
    </div>
    <div>
     <a href="{{route('todos.create')}}"
      class="btn btn-success btn-block">
       Add Task
     </a>
  </div>
 </div>
</div>

@if($message Session:get('success'))
 <div class="alert alert-success">
  <p>{{$message}}</p>
 </div>
@endif

<table class="table">
<tr>
 <th>Task Name</th>
 <th>Action</th>
</tr>
@foreach($todos as $todo)
<tr>
 <td>{{$todo->todo}}</td>
 <td>
  {!! Form::open(['method' => 'DELETE', 'route' => ['todos.destroy', $todo->id]]) !!}
  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
  {!! Form::close() !!}
 </td>
</tr>
@endforeach
</table>
{!! $todos->render() !!}
@endsection