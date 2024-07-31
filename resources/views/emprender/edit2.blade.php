<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('emprendimiento.update', $emprendimiento)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input type="text" name="nombre_emprendimiento" value="{{old('nombre_emprendimiento',$emprendimiento->nombre_emprendimiento) }}">
    </label>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion" value="{{old('descripcion',$emprendimiento->descripcion) }}">
    </label>
    <label>
        especificaciones:
        <br>
        <input type="text" name="especificaciones" value="{{old('especificaciones',$emprendimiento->especificaciones) }}">
    </label>
    <label>
        categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria',$emprendimiento->categoria) }}">
    </label>

    
    <br>
    <label>
       
    
        
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
   
</body>
</html>