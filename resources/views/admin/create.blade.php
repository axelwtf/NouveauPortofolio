@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1 class="text-center">Image Intervention</h1>

<form action="/Upload_Image" method="post" enctype="multipart/form-data">
    @csrf

<div >
    <input name="image" type="file">

    <button type="submit">Envoyer</button>
</div>

</form>
 <h2>image 2</h2>
<form action="/Upload_Image2" method="post" enctype="multipart/form-data">
    @csrf

<div >
    <input name="sousImage" type="file">

    <button type="submit">Envoyer</button>
</div>

</form>

<div class="text-center" style="margin-top: 100px; padding-bottom: 48px;">
    <h1>Project</h1>
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
