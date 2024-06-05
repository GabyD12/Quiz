<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Accidente</h1>

    <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Lugar:
            <br>
            <input type="text" name="lugar">
        </label>
        <br>
        <label>
            Fecha:
            <br>
            <input type="text" name="fecha">
        </label>
       
        <br>
        <label>
            Hora
            <br>
            <input type="text" name="hora">
        </label>
       
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>