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
<h1 class="text-center">Image Intervention</h1>

<form action="/Upload_Image" method="post" enctype="multipart/form-data">
    @csrf

<div >
    <input name="image" type="file">

    <button class="btn" type="submit">Envoyer</button>
</div>

</form>
 <h2>image 2</h2>
<form action="/Upload_Image2" method="post" enctype="multipart/form-data">
    @csrf

<div >
    <input name="sousImage" type="file">

    <button class="btn" type="submit">Envoyer</button>
</div>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
