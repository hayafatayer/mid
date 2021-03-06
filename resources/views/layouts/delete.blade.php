@extends('layouts.master')

@section('content')

<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('product.index') }}" class="btn btn-info">Back to all tasks</a>
        <a href="{{ route('product.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['product.destroy', $task->id]
        ]) !!}
            {!! Form::submit('Delete thisproduct?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
