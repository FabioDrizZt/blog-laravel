<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo del Correo</title>
</head>

<body>
    <h1>Correo Electronico enviado con laravel</h1>
    <p>Este es mi primer correo</p>

    <p><strong>Nombre:</strong></p> {{ $contacto['nombre'] }}
    <p><strong>correo:</strong></p> {{ $contacto['correo'] }}
    <p><strong>mensaje:</strong></p> {{ $contacto['mensaje'] }}
</body>

</html>
