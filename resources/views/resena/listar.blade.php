<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de reseñas</title>
</head>
<body>
 
    <h1>Listado de reseñas</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>calificacion</th>
            <th>comentario</th>
            <th>Acciones</th>
        </tr>

        @foreach ($resena as $resena)
        {{-- Crear una fila --}}
        <tr>
            <td>{{$resena->id}}</td>
            <td>{{$resena->qualification}}</td>
            <td>{{$resena->comment}}</td>
           
            <td>
                <a href="{{ route('resena.show', $resena->id) }}">Mostrar</a>
                <td><a href="{{route('resena.edit',$resena->id)}}">Editar</a></td>
                <form action="{{ route('resena.destroy', $resena->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>