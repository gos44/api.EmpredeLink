<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('trabajo.update', $trabajo)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            Nombre:
        <br>
        <input name="name" type="string" value="{{old('Name',$trabajo->name) }}">
        <br>
        </label>
        <br>
        <label>
            Apellido:
        <br>
        <input name="last_name" type="string" value="{{old('last_name',$trabajo->last_name)}}">
        <br>
        </label>
        Telefono:
        <br>
        <input name="phone_number" type="number" value="{{old('phone_number',$trabajo->phone_number)}}">
        <br>
        </label>
        Correo:
        <br>
        <input name="mail" type="string" value="{{old('mail',$trabajo->mail)}}">
        <br>
        </label>
        descripcion del emprendimiento:
        <br>
        <input name="description" type="string" value="{{old('description',$trabajo->description)}}">
        <br>
        </label>
        Ubicacion o direccion :
        <br>
        <input name="location" type="string" value="{{old('location',$trabajo->location)}}">
        <br>
        </label>
        URL del emprendimiento:
        <br>
        <input name="url" type="string" value="{{old('url',$trabajo->url)}}">
        <br>
        </label>
        ingrese la fecha:
        <br>
        <input name="date_exp" type="date" value="{{old('date_exp',$trabajo->date_exp)}}">
        <br>
        </label>
        <br>
       
        <button  type="submit">publicar emprendimiento</button>
       
    </form>
   
</body>
</html>