<form action="{{ url('/documento_agregar_2') }}" method="post">
    @csrf
  <label for="fname">Documento:</label><br>
  <input type="text" name="descripcion"><br>

  <button>Grabar</button>
</form>