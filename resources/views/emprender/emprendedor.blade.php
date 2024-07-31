<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Emprendedor</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('emprender.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label>
        Name:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Lastname:
        <br>
        <input type="text" name="lastname">
    </label>
    <br>
    <label>
        Fecha de nacimiento:
        <br>
        <input type="date" name="fecha_nacimiento">
    </label>
    <br>
    <label>
        Password:
        <br>
        <input type="password" name="password">
    </label>
    <br>
    <label>
        Telefono:
        <br>
        <input type="number" name="telefono">
    </label>
    <br>
    <label>
        Imagen:
        <br>
        <input type="text" name="imagen">
    </label>
    <br>
    <label>
        Correo:
        <br>
        <input type="email" name="correo">
    </label>
    <br>
    <label>
        Ubicacion:
        <br>
        <input type="text" name="ubicacion">
    </label>
    <br>
    <label>
        Numero:
        <br>
        <input type="number" name="numero">
    </label>
    <br>
    <button type="submit">Iniciar sesión</button>
</form>
</body>
</html>