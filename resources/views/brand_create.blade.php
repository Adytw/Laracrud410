@extends('layout.main_template')

@section('content')

@include ('fragments.formstyle')

<h1> Create brand </h1>
<form action= "{{route('brands.store')}}" method= "POST">
    @csrf

    <label for =""> Nombre de la marca </label>
    <input type= "text" name = "brand">
<br>
    <label for=""> Descripcion </label>
    <input type= "text" name = "description"><br></br>

    <button type = "submit"> Registrar </button>

</form>

@endsection