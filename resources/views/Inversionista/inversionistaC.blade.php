<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>inversionista</h1>

<form action="{{ route('inversionistas.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Apellido:
    <br>
    <input type="text" name="lastname">
</label>
<br>
<label>
    Fecha de Nacimiento:
    <br>
    <input type="date" name="Nacimiento">
</label>
<br>
<label>
    Teléfono:
    <br>
    <input type="text" name="telefono">
</label>
<br>
<label>
    Contraseña:
    <br>
    <input type="password" name="contraseña">
</label>
<br>
<label>
    Correo:
    <br>
    <input type="email" name="correo">
</label>
<br>
<label>
    Ubicación:
    <br>
    <input type="text" name="ubicacion">
</label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
</body>
</html>