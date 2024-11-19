@extends('layout.main_template')

@section('content')

<h1> Detalles de la marca </h1>
<h3> Marca: {{ $brand->brand}}</h3>
<h3> Descripcion: {{ $brand->descripcion }}</h3>

@endsection 