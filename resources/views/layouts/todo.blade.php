@extends('layouts.app')
@section('content')
<div class="container">

    <div>
        <h3>Please enter you name: </h3>
        <form class="form-inline" method="post" action="my_name">
            <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" />

            <div class="form-group">
                <input type="text" class="form-control" name="name" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <h3>Hello, nobody!</h3>
    </div>
</div>

@endsection
