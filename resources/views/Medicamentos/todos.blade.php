@extends('layouts.template')

@section('title','Actualizar')

@section('sidebar')


@section('content')
{{$todos}}
{{url('medicamentos/update')}}

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Receta</th>
			<th>Fecha de Vencimiento</th>
			<th>Efectos secundarios</th>
			<th>Editar</th>
		</tr>		
	</thead>
	<tbody>
		@foreach($todos as $medi)
			<tr>
				<td>{{$medi["id"]}}</td>
				<td>{{$medi["nombre"]}}</td>
				<td>{{$medi["mg"]}}</td>
				<td>{{$medi["receta"]}}</td>
				<td>{{$medi["fechaVenc"]}}</td>
				<td>{{$medi["efectoSecundarios"]}}</td>
				<td> <a href="{{url('medicamentos/update/'.$medi['id'])}}">Editar</a> </td>
			</tr>
		@endforeach
	</tbody>

</table>


@endsection