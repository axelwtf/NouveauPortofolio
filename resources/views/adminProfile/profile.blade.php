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

@foreach ($text as $txt)
<div style="padding-bottom:20%">
    <div class="row">
        <div class="col-6">
            {!! $txt->aboutEdit !!}
        </div>
        <div class="col-6">
            <img src="{{ Storage::url($txt->aboutImage) }}" height="20%" width="20%" alt="">
        </div>
    </div>
</div>

@endforeach

<form action="/editProfil" method="POST" enctype="multipart/form-data">
    @csrf
    <textarea name="editor" id="editor" rows="10" cols="80">
            @foreach ($text as $txt)
                {!! $txt->aboutEdit !!}
            @endforeach
    </textarea>
    <input type="file" name="imageAbout" id="">
    <button type="submit">Create</button>
</form>

<script src="/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor');
</script>

{{-- @foreach($users as $key => $value )
<div>
    <img src="{{ Storage::url($value->image->image) }}" alt="">
    <input type="file" name="image">
</div>

<a class="btn" role="button" href="/edit/{{$value->id}}">Edit</a>

@endforeach --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

