@extends('layout.main_template')

@section('content')
@include ('fragments.formstyle')

<style>
    button{
        width: 50px;
        padding: 8px 16 px;
        margin-block-start: 32px;
        border: 1px solid black;
        border-radius: 5px;
        display: block;
        color: white;
        background-color: black;
    }

    h3{
        width: 100%;
        height: 10px;
        font-weight: bold;
        font-family:Arial, Helvetica, sans-serif;
        display: inline-block;
    }
    </style>


<table>
    <thead>
        <h3> ¿Estás seguro de eliminar el producto {{ $product->nameProduct }}?</h3>
    </thead>
    <tbody>
        <tr>
            <form action="{{ route('products.index')}}">
                <button type= "submit"> No</button>

            </form>
        </td>
        <td>
            <form action="{{ route('products.destroy', $product->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type= "submit"> Si </button>

            </form>
        </td>
        </tr>
    </tbody>
        
</table>


@endsection