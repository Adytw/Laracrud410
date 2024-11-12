<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get(); //obtener todos los datos de la tabla        
        return view ('products_index', compact('products'));
        //echo "Index Productos";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $brands = Brand::get(); //para obtener todoslos datos de un modelo o tabla
       $brands = Brand::pluck('id', 'brand');//obtener datos especificos 
       // dd($brands);
        return view ('products_create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "Registro realizado";
       // dd($request);

       Product::create($request->all());
       return to_route('products.index')-> with ('status', 'Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        echo "Show Productos";
        return view ('products_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        echo "Edit Productos";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        echo "Update Productos";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        echo "Destroy Productos";
    }
}
