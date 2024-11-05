@extends('layout.main_template')

@section('content')

@include ('fragments.formstyle')

<h1> Create productos </h1>
<form action= "{{route('products.store')}}" method= "POST">
    @csrf

    <label for =""> Nombre del producto </label>
    <input type= "text" name = "nameProduct">

    <label for=""> Marca </label>
    <input type="text" name= "brand">

    <label for=""> Cantidad </label>
    <input type="number" name= "stock">

    <label for=""> Precio unitario </label>
    <input type="text" name= "unit_price">

    <label for=""> Imagen </label>
    <input type="text" name= "imagen">

    <button type = "submit"> Registrar </button>

</form>

@endsection