<a href="{{ url('/listar_documento') }}">Tipo de documentos</a>
<br><br>
<a href="{{ url('/persona_agregar_1') }}">Agregar</a>
<table>
<thead>
  <tr>
    <th>codigo</th>
    <th>nombre</th>
    <th>apellido paterno</th>
    <th>apellido materno</th>
    <th>Tipo de documento</th>
    <th>Numero de documento</th>
    <th>opciones</th> 
  </tr>
</thead>
<tbody> 
@foreach ( $personas as $persona )     
  <tr>
    <td>{{ $persona->codigo_persona }}</td>
    <td>{{ $persona->nombre }}</td>
    <td>{{ $persona->apellido_paterno }}</td>
    <td>{{ $persona->apellido_materno }}</td>
    <td>{{ $persona->descripcion }}</td>
    <td>{{ $persona->dni }}</td>
    <td>
      <a href="{{ url('/persona/'.$persona->codigo_persona.'/edit') }}">Editar</a>
      <form action="{{ url('/persona/'.$persona->codigo_persona) }}" method="post">
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