<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista desde la base da datos</title>
</head>
<body>
    <section>
        <h3>Informacion desde la base de datos</h3>
        <p>{{$client->client_name}}</p>
        <p>{{$client->first_last_name}}</p>
        <p>{{$client->second_last_name}}</p>
        
    </section>
</body>
</html>