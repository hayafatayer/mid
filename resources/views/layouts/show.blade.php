@extends('layout')
@section('content')
<h1>{{$task}}</h1>

@endsection
<a href="{{ route('product.edit', $task->id) }}">edit</a>
