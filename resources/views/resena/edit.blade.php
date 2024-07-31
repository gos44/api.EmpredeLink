<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('resena.update', $resena)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            califique con : bueno regular y malo:
        <br>
        <input name="qualification" type="string" value="{{old('qualification',$resena->qualification) }}">
        <br>
        </label>
        <br>
        <label>
            comentario:
        <br>
        <input name="comment" type="string" value="{{old('comment',$resena->comment)}}">
        <br>
        </label>
       <br>
       
        <button  type="submit">enviar resena</button>
       
    </form>
   
</body>
</html>

