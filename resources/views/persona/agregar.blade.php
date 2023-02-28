<form action="{{ url('/persona_agregar_2') }}" method="post">
    @csrf
  <label for="fname">Nombre:</label><br>
  <input type="text" name="nombre"><br>
  <label for="lname">Apellido paterno:</label><br>
  <input type="text" name="apellido_paterno"><br>

  <label for="fname">Apellido materno:</label><br>
  <input type="text" name="apellido_materno"><br>

  <label for="cars">Tipo de documento:</label><br>


  <select id="cars" name="codigo_documento">
  @foreach ( $documentos as $documento )    
  <option value="{{ $documento->codigo_documento }}">{{ $documento->descripcion }}</option>
  @endforeach  
  </select> 
  <br>

  <label for="lname">Numero de documento:</label><br>
  <input type="text" name="dni"><br>

  <button>Grabar</button>
</form>