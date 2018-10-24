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
@stop

@section('content')

<a href="/adminCreateSkill">Create Skill</a>

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
