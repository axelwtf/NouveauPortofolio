@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div>
    <h1>Logo</h1>
</div>


    <div class="row mt-5">
    @foreach ($images as $pic)
        <div class="col-sm-3">
            <form id="tailleCard" action="/deleteLogo/{{$pic->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <img src="{{'images/redimensionner/'.$pic->image}}" height="100px" alt="pic">
                <button type="submit" class='btn btn-danger ml-3'>Delete</button>
            </form>
        </div>
        @endforeach
    </div>

<div class="row mt-5" style="margin-top: 190px;">

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

<div class="row">
    @foreach ($sousLogo as $pic2)
    <div class="col-sm-3">
        <form id="tailleCard" action="/deleteSousLogo/{{$pic2->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <img src="{{'images/redimensionner/'.$pic2->image}}" height="100px" alt="pic">
            <button type="submit" class='btn btn-danger ml-3'>Delete</button>
        </form>
    </div>
    @endforeach
</div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
