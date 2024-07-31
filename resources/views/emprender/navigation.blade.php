<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Redirecciones a Vistas</h1>
    <ul>
        <li><a href="{{ url('Conexion/asociar') }}">Asociar</a></li>
        <li><a href="{{ url('emprender/edit') }}">Editar Emprendedor</a></li>
        <li><a href="{{ url('emprender/edit2') }}">Editar Emprendedor 2</a></li>
        <li><a href="{{ url('emprender/emprendedor') }}">Emprendedor</a></li>
        <li><a href="{{ url('emprender/emprendimiento') }}">Emprendimiento</a></li>
        <li><a href="{{ url('emprender/listar') }}">Listar Emprendedores</a></li>
        <li><a href="{{ url('emprender/listar2') }}">Listar Emprendedores 2</a></li>
        <li><a href="{{ url('emprender/show') }}">Mostrar Emprendedor</a></li>
        <li><a href="{{ url('emprender/show2') }}">Mostrar Emprendedor 2</a></li>
        <li><a href="{{ url('resena/create') }}">Crear Reseña</a></li>
        <li><a href="{{ url('resena/edit') }}">Editar Reseña</a></li>
        <li><a href="{{ url('resena/listar') }}">Listar Reseñas</a></li>
        <li><a href="{{ url('resena/show') }}">Mostrar Reseña</a></li>
        <li><a href="{{ url('trabajo/edit') }}">Editar Trabajo</a></li>
        <li><a href="{{ url('trabajo/listar') }}">Listar Trabajos</a></li>
        <li><a href="{{ url('trabajo/show') }}">Mostrar Trabajo</a></li>
        <li><a href="{{ url('trabajo/tabla') }}">Tabla de Trabajo</a></li>
        <li><a href="{{ url('edit') }}">Editar</a></li>
        <li><a href="{{ url('inversionistaC') }}">Inversionista</a></li>
        <li><a href="{{ url('registrosL') }}">Registros</a></li>
        <li><a href="{{ url('welcome') }}">Bienvenido</a></li>
    </ul>
</body>
</html>
