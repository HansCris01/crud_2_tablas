<form action="{{ url('/persona/'.$persona->codigo_persona) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('persona.formulario');
</form>