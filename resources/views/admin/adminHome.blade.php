@extends('adminlte::page')

@section('title', 'AdminLTE')
{{--  <link rel="stylesheet" href="/css/app.css">  --}}

@section('content_header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>zz
            @endforeach
        </ul>
    </div>
@endif
@stop

@section('content')



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
