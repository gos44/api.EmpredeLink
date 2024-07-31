<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Nombre del emprendimiento</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('emprendimiento.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label>
        Nombre del emprendimiento:
        <br>
        <input type="text" name="nombre_emprendimiento">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br>
    <label>
        especificaiones:
        <br>
        <input type="text" name="especificaciones">
    </label>
    <br>
    <label>
        categoria:
        <br>
        <input type="text" name="categoria">
    </label>
    <br>
  <br>
 
  
    <br>
    
    <button type="submit">Publicar</button>
</form>
</body>
</html>