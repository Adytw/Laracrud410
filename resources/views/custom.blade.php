
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom</title>
</head>
<body style="background-color:rgb(223, 167, 215)">
    <h1>Custom view</h1>
    <h2> <?php echo $msj ?></h2>
    <h2> <?= $identi ?></h2>
    <h2>{{$A}}</h2>
    <h2>{{$A}} {{$identi}} {{$msj}}</h2>

    <h3><a href="/testview">test (Sin nombre) </a></h3>
    
    <h3><a href="{{route('contact')}}">Contacto (Ruta con nombre) </a></h3>
</body>
</html>
