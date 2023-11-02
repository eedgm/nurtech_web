<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo cliente</title>
</head>
<body>
    <h1 style="text-align: center;">Nuevo Cliente</h1>

    <p>Nombre: {{ $details['name'] }}</p>
    <p>Correo: {{ $details['from'] }}</p>
    <p>Asunto: {{ $details['subject'] }}</p>
    <p>Telefono: {{ $details['phone'] }}</p>
    <p>Mensaje:</p>
    <div>
        {{ $details['body'] }}
    </div>
</body>
</html>
