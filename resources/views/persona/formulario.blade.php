<label for="fname">Nombre:</label><br>
  <input type="text" name="nombre" value="{{ $persona->nombre }}"><br>
  <label for="lname">Apellido paterno:</label><br>
  <input type="text" name="apellido_paterno" value="{{ $persona->apellido_paterno }}"><br>

  <label for="fname">Apellido materno:</label><br>
  <input type="text" name="apellido_materno" value="{{ $persona->apellido_materno }}"><br>

  <select id="cars" name="codigo_documento">
  <option value="{{ $persona->codigo_documento }}">{{ $persona->descripcion }}</option>  
  @foreach ( $documentos as $documento )    
  <option value="{{ $documento->codigo_documento }}">{{ $documento->descripcion }}</option>
  @endforeach  
  </select> 
  <br>

  <label for="lname">Numero de documento:</label><br>
  <input type="text" name="dni" value="{{ $persona->dni }}"><br>

  <button>Actualizar</button>