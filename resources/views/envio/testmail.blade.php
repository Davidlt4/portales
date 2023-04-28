<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturalsoft mail</title>
</head>
<body>
    <!--https://mailer.portalns.es:9000-->
    <img src="{{route('eventoAbierto',$details['token'])}}">
    <p>{{$details['contenido']}}</p>
</body>
</html>