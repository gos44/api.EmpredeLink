<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Trabajos Publicados</title>
</head>
<body>
 
    <h1>Listado de Trabajos Publicados</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Número de teléfono</th>
            <th>Correo electrónico</th>
            <th>Descripción</th>
            <th>Ubicación</th>
            <th>URL</th>
            <th>Fecha de expiración</th>
            <th>Acciones</th>
        </tr>

        @foreach ($trabajos as $trabajo)
        {{-- Crear una fila --}}
        <tr>
            <td>{{$trabajo->id}}</td>
            <td>{{$trabajo->name}}</td>
            <td>{{$trabajo->last_name}}</td>
            <td>{{$trabajo->phone_number}}</td>
            <td>{{$trabajo->mail}}</td>
            <td>{{$trabajo->description}}</td>
            <td>{{$trabajo->location}}</td>
            <td>{{$trabajo->url}}</td>
            <td>{{$trabajo->date_exp}}</td>
            <td>
                <a href="{{ route('trabajo.show', $trabajo->id) }}">Mostrar</a>
                <td><a href="{{route('trabajo.edit',$trabajo->id)}}">Editar</a></td>
                <form action="{{ route('trabajo.destroy', $trabajo->id) }}" method="POST">
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