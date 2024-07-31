<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Inversionistas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Lista de Inversionistas</h1>

  <table id="inversionistas-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">Nombre</th>
        <th style="background-color: #3498db; color: white;">Apellido</th>
        <th style="background-color: #3498db; color: white;">Fecha de Nacimiento</th>
        <th style="background-color: #3498db; color: white;">Teléfono</th>
        <th style="background-color: #3498db; color: white;">Correo</th>
        <th style="background-color: #3498db; color: white;">Ubicación</th>
        <th style="background-color: #3498db; color: white;">Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($inversionistas as $inversionista)
        <tr style="cursor: pointer;" onclick="showInversionistaDetails({{ $inversionista->id }})">
          <td>{{ $inversionista->id }}</td>
          <td>{{ $inversionista->name }}</td>
          <td>{{ $inversionista->lastname }}</td>
          <td>{{ $inversionista->Nacimiento }}</td>
          <td>{{ $inversionista->telefono }}</td>
          <td>{{ $inversionista->correo }}</td>
          <td>{{ $inversionista->ubicacion }}</td>
          <td>
            <a href="{{ route('inversionistas.show', $inversionista->id) }}">Mostrar</a>
            <td><a href="{{route('inversionistas.edit',$inversionista->id)}}">Editar</a></td>
            <td>
            <form action="{{ route('inversionistas.destroy', $inversionista->id) }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div id="inversionista-details-modal" style="display: none;">
    <div class="modal-content">
      <span class="close-button" onclick="closeModal()">&times;</span>
      <h2>Detalles del Inversionista</h2>
      <p id="inversionista-name"></p>
      <p id="inversionista-descripcion"></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>