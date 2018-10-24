@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a type="btn" href="adminCreate"> Create </a>

@stop

@section('content')

@foreach($tasks as $key => $value)

<form class="col-sm-4" id="tailleCard" action="/delete/{{$value->id}}" method="post">

    @csrf
    <div class="card-body">
        <div class="text-center">
            <img id="img" class="card-img-top" src="{{ Storage::url($value->image) }}" alt="{{$value->image}}" width="300" height="200">
        </div>


        <div class="text-center">
                <h4 class="card-title">Mon Titre est : <strong>{{$value->titre}}</strong></h4>
            <p class="card-text">{{$value->description}}</p>
        </div>

    </div>

    <div class="card-footer text-center">
        <a class="btn btn-warning ml-3" role="button" href="/edit/{{$value->id}}">Edit</a>
        <button type="submit" class='btn btn-danger ml-3'>Delete</button>
    </div>

</form>

@endforeach


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop








