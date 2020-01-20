@extends('layouts.main')
@section('content')
<h1> Página HOME </h1>

@if (session('successMsg'))
    <div class="alert alert-success" role="alert">
         {{session('successMsg')}}
    </div>
@endif

@endsection