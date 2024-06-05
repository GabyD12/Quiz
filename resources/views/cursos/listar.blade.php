<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>Listar cursos</h1>


    @foreach ($cursos as $curso)
    <tr>
        <br>
        
        <td>{{$curso->lugar}}</td>
        <td>{{$curso->fecha}}</td>
        <td>{{$curso->hora}}</td>
        
        
        <td><a href="{{route('curso.show',$curso->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <td><a href="{{route('curso.edit',$curso->id)}}">Editar</a></td>
        
    </tr>
@endforeach
   
</body>
</html>