@extends('layout.main_template')

@section('content')
<h2> Index brands</h2>

<br>
<button> <a href="{{route('brands.create')}}"> Crear marca </a> </button> 
</br>
<table>
    <thead>
        <th> Nombre del producto</th>
        <th> Descripcion</th>
       
    </thead>
    
    <tbody>
        @foreach($brands as $b)
        <tr>
            <td>{{ $b->brand}}</td>
            <td>{{ $b->description }}</td>
            
            
        </tr>
        @endforeach
    </tbody>

</table>


@endsection
