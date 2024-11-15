@extends('layout.main_template')

@section('content')


@include('fragments.formstyle')
<h1>Editar productos</h1>

<form action="{{route('products.update', $product->id)}}" method="POST">
@csrf
@method('PUT')
<label for="">Nombre de producto</label>
<input type="text" name="nameProduct" value="{{$product->nameProduct}}">

<br>
<label for="">Marca</label><br><br>
<select name="brand_id">
    <option value="">Selecciona. . .</option>
    @foreach ($brands as $brand => $id)
    <option {{$product->brand_id == $id ? 'selected' : ''}} value="{{$id}}">{{$brand}}</option> 
    @endforeach
   

</select>
<br><br>
<label for="">Cantidad</label>
<input type="number" name="stock" value="{{$product->stock}}">

<label for="">Precio unitario</label>
<input type="number" name="unit_price" value="{{$product->unit_price}}">


<label for="">Imagen</label>
<input type="file" name="imagen">


<br>
<button type="submit"> Editar </button>
</form>


@endsection
