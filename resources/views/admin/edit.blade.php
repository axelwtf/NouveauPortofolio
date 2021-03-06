@extends('adminlte::page')

@section('title', 'Dashboard')

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
@stop

@section('content')

<form class="text-center" action="/update/{{ $tasks->id }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class=" col-sm-6">
            {{--  <div class="container">  --}}
                <input class="form-control" id="titre" name="leTitre" type="text" value="{{$tasks->titre}}">
                <textarea class="mt-5 form-control" id="description" name="laDescription">{{$tasks->description}}</textarea>
                <div class="mt-4"><button type="submit" id="btnEnvoie">Envoyer</button></div>
            {{--  </div>  --}}
        </div>

        <div class="text-right col-sm-6">
            <img src="{{ Storage::url($tasks->image) }}" alt="{{$tasks->image}}" width="520" height="300">
            <div class="centrer">
                <input type="file" name="image">
            </div>
        </div>
    </div>

</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
