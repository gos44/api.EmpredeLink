<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> resena </h1> 
   
   <form action="{{route('resenas.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        califique con : bueno regular y malo:
        <br>
        <input type="string" name="qualification">
    </label>
    <br><br>
    <label>
        comentario:
        <br>
        <input type="string" name="comment">
    </label>
    <br><br>
    

    <button type="submit">enviar resena :</button>
   

</form>

</body>
</html>