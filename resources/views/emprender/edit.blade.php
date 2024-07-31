<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('emprendedor.update', $emprendedor)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input type="text" name="name" value="{{old('Name',$emprendedor->name) }}">
    </label>
    <br>
    <label>
        Lastname:
        <br>
        <input type="text" name="lastname" value="{{old('lastname',$emprendedor->lastname) }}">
    </label>
    <br>
    <label>
        Fecha de nacimiento:
        <br>
        <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento',$emprendedor->fecha_nacimiento) }}">
    </label>
    <br>
    <label>
        Password:
        <br>
        <input type="password" name="password" value="{{old('password',$emprendedor->password) }}">
    </label>
    <br>
    <label>
        Telefono:
        <br>
        <input type="number" name="telefono" value="{{old('telefono',$emprendedor->telefono) }}">
    </label>
    <br>
    <label>
        Imagen:
        <br>
        <input type="text" name="imagen" value="{{old('imagen',$emprendedor->imagen) }}">
    </label>
    <br>
    <label>
        Correo:
        <br>
        <input type="email" name="correo" value="{{old('correo',$emprendedor->correo) }}">
    </label>
    <br>
    <label>
        Ubicacion:
        <br>
        <input type="text" name="ubicacion" value="{{old('ubicacion',$emprendedor->ubicacion) }}">
    </label>
    <br>
    <label>
        Numero:
        <br>
        <input type="number" name="numero" value="{{old('numero',$emprendedor->numero) }}">
    </label>
    <br>
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>