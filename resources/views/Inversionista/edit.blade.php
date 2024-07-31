<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('inversionistas.update', $inversionista)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Nombre:
        <br>
        <input name="name" type="text" value="{{old('Name',$inversionista->name) }}">
        <br>
        </label>
        <br>
        <label>
        Apellido:
        <br>
        <input name="lastname" type="text" value="{{old('lastname',$inversionista->lastname)}}">
        <br>
        </label>
        fecha de nacimiento:
        <br>
        <input name="Nacimiento" type="date" value="{{old('Nacimiento',$inversionista->Nacimiento)}}">
        <br>
        </label>
        Telefono:
        <br>
        <input name="telefono" type="number" value="{{old('telefono',$inversionista->telefono)}}">
        <br>
        </label>
        contraseña:
        <br>
        <input name="contraseña" type="text" value="{{old('contraseña',$inversionista->contraseña)}}">
        <br>
        </label>
        correo:
        <br>
        <input name="correo" type="text" value="{{old('lastname',$inversionista->correo)}}">
        <br>
        </label>
        Ubicacion:
        <br>
        <input name="ubicacion" type="text" value="{{old('lastname',$inversionista->ubicacion)}}">
        <br>
        </label>
        <br>
        <button  type="submit">Actualizar</button>
       
    </form>
   
</body>
</html>