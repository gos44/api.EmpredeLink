<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> Publicar Emprendimiento </h1> 
   
   <form action="{{route('Publicar_Emprendimiento.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        Nombre:
        <br>
        <input type="string" name="name">
    </label>
    <br><br>
    <label>
        Apellido:
        <br>
        <input type="string" name="last_name">
    </label>
    <br><br>
    <label>
        Telefono: 
        <br>
        <input type="number" name="phone_number">
    </label>
    <br><br>
    <label>
        Correo:
        <br>
        <input type="string" name="mail">
    </label>
    <br><br>
    <label>
        descripcion del emprendimiento :
        <br>
        <input type="text" name="description">
    </label>
    <br><br>
    <label>
        Ubicacion o direccion  :
        <br>
        <input type="string" name="location">
    </label>
    <br><br>
    <label>
        URL del emprendimiento :
        <br>
        <input type="string" name="url">
    </label>
    <br><br>
    <label>
        ingrese la fecha:
        <br>
        <input type="date" name="date_exp">
    </label>
    <br><br>

    <button type="submit">publicar emprendimiento :</button>
   

</form>

</body>
</html>