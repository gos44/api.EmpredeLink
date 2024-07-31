<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Emprendedor</title>
</head>
<body>
    <h1>Detalles del Emprendedor</h1>
    <ul>
        <li>Nombre:              {{ $emprendedor->name }}</li>
        <li>Apellido:            {{ $emprendedor->lastname }}</li>
        <li>Fecha de Nacimiento: {{ $emprendedor->fecha_nacimiento }}</li>
        <li>Teléfono:            {{ $emprendedor->telefono }}</li>
        <li>Correo:              {{ $emprendedor->correo }}</li>
        <li>Ubicación:           {{ $emprendedor->ubicacion }}</li>
        <li>Número:              {{ $emprendedor->numero }}</li>
    </ul>
</body>
</html>