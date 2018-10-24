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

<div class="text-center" style="margin-top: 100px; padding-bottom: 48px;">
    <h1>New Project</h1>
</div>

<form class="text-center" action="/create/tasks" method="post" enctype="multipart/form-data">

    @csrf
    <div class="container">
        <input id="titre" class="form-control" name="leTitre" type="text" value="" enctype="multipart/form-data">

        <textarea class="form-control" style="margin-top:15px;" id="description" name="laDescription" id="" cols="30"
            rows="10"></textarea>

        <div class="mt-4">
            <input type="file" name="image">
            <button type="submit" id="btnEnvoie">Envoyer</button>
        </div>
    </div>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
