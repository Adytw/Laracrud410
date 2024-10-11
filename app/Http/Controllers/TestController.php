<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class TestController extends Controller
{
    function test(){
        ///conectar con el modelo que conceta a la base de datos 
        $client = Client::find(1);
        var_dump($client); ///imprime todos los datos de paso
        ///retornar una lista con la informacion del modelo
        return view('testdb', ['client' => $client ]);
        

    }
}
