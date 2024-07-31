<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Emprendedores</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Lista de Emprendedores</h1>

  <table id="emprendedores-table">
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
      @foreach ($emprendedores as $emprendedor)
        <tr>
          <td>{{ $emprendedor->id }}</td>
          <td>{{ $emprendedor->name }}</td>
          <td>{{ $emprendedor->lastname }}</td>
          <td>{{ $emprendedor->fecha_nacimiento }}</td>
          <td>{{ $emprendedor->telefono }}</td>
          <td>{{ $emprendedor->correo }}</td>
          <td>{{ $emprendedor->ubicacion }}</td>
          <td>
            <a href="{{ route('emprendedor.show', $emprendedor->id) }}">Mostrar</a>
            <a href="{{ route('emprendedor.edit', $emprendedor->id) }}">Editar</a>
            <form action="{{ route('emprendedor.destroy', $emprendedor->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div id="emprendedor-details-modal" style="display: none;">
    <div class="modal-content">
      <span class="close-button" onclick="closeModal()">&times;</span>
      <h2>Detalles del Emprendedor</h2>
      <p id="emprendedor-name"></p>
      <p id="emprendedor-descripcion"></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
