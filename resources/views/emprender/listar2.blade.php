<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Emprendimientos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Lista de Emprendimientos</h1>

  <table id="emprendimientos-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">Nombre del Emprendimiento</th>
        <th style="background-color: #3498db; color: white;">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($emprendimientos as $emprendimiento)
        <tr>
          <td>{{ $emprendimiento->id }}</td>
          <td>{{ $emprendimiento->nombre_emprendimiento }}</td>
          <td>{{ $emprendimiento->descripcion }}</td>
          <td>{{ $emprendimiento->especificaciones }}</td>
          <td>{{ $emprendimiento->categoria }}</td>
          <td>{{ $emprendimiento->emprendedor_id }}</td>
         
          <td>
            <a href="{{ route('emprendimiento.show', $emprendimiento->id) }}">Mostrar</a>
            <a href="{{ route('emprendimiento.edit', $emprendimiento->id) }}">Editar</a>
            <form action="{{ route('emprendimiento.destroy', $emprendimiento->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>
