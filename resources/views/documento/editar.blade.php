<form action="{{ url('/documento/'.$documento->codigo_documento) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('documento.formulario');
</form>