<a href="{{ url('/persona') }}">Persona</a>
<br><br>
<a href="{{ url('/documento_agregar_1') }}">Agregar</a>
<table>
<thead>
  <tr>
    <th>codigo</th>
    <th>Documento</th>
    <th>opciones</th> 
  </tr>
</thead>
<tbody> 
@foreach ( $documentos as $documento )     
  <tr>
    <td>{{ $documento->codigo_documento }}</td>
    <td>{{ $documento->descripcion }}</td>
    <td>
      <a href="{{ url('/documento/'.$documento->codigo_documento.'/edit') }}">Editar</a>
      <form action="{{ url('/documento/'.$documento->codigo_documento) }}" method="post">
      @csrf 
      {{ method_field('PATCH') }}
      <input type="hidden" value="0" name="estado"/>
      <button>Eliminar</button>
      </form>
    <td>
  </tr>
@endforeach  
</tbody> 
</table>