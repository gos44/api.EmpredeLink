<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asociar Emprendedores e Inversionistas</title>
</head>
<body>
    <h1>Asociar Emprendedores e Inversionistas</h1>
    <form action="{{ route('interes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <br>
        <h1>Emprendedores:</h1>
        <select name="emprendedor_id">
            @foreach($emprendedores as $emprendedor)
                <option value="{{ $emprendedor->id_emprendedor }}">{{ $emprendedor->id_emprendedor }} - {{ $emprendedor->Nombre_de_empresa }}</option>
            @endforeach
        </select>
        <br>
        <h1>Inversionistas:</h1>
        <select name="inversionista_id">
            @foreach($inversionistas as $inversionista)
                <option value="{{ $inversionista->id_inversionista }}">{{ $inversionista->id_inversionista }} - {{ $inversionista->Nombre }} {{ $inversionista->Apellido }}</option>
            @endforeach
        </select>
        
        <br><br>
        <button type="submit">Asociar</button>
    </form>
</body>
</html>