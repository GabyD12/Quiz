<h1>Actualizar Profesor</h1>
<form action="{{route('curso.update', $curso)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Lugar
    <br>
    <input name="lugar" type="text" value="{{old('lugar',$curso->lugar) }}">
    <br>
    </label>
   
    <label>
    Fecha:
    <br>
     <input name="fecha" type="text" value="{{old('fecha',$curso->fecha) }}">
     <br>
     </label>
    
    <label>
    Hora:
    <br>
    <input name="hora" type="text" value="{{old('hora',$curso->hora)}}">
    <br>
    </label>
   
    <br>
    <label>
    <br>
   
    <button  type="submit">Actualizar Curso</button>
   
</form>