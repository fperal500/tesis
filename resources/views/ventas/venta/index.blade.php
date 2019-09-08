@extends('layouts.admin')

@section('contenido')

<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

			<h3>Listado de Ventas <a href="venta/create"><button class="btn btn-success"> Nuevo </button></a></h3>

			@include('ventas.venta.search')

	</div>
</div>

<div class="row">

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

		<div class="table-responsive">


			<table class="table table-striped table-boredered table-condensed table-hover">

				<thead>

					<th>Fecha</th>

					<th>Cliente</th>

					<th>Comprobante</th>

					<th>Impuesto</th>

					<th>Total</th>

					<th>Estado</th>

					<th>Opciones</th>

				</thead>

				@foreach ($ventas as $vent)

				<tr>
					<td>{{ $vent->fecha_hora}}</td>
					<td>{{ $vent->nombre}}</td>
					<td>{{ $vent->tipo_comprobante. ': '.$vent->serie_comprobante.'-'.$vent->num_comprobante}}</td>
					<td>{{ $vent->impuesto}}</td>
					<td>{{ $vent->total_venta}}</td>
					<td>{{ $vent->estado}}</td>

					<td>

						<a href="{{URL::action('VentaController@show', $vent->idventa)}}"><button class="btn btn-primary">Detalles de la venta</button></a>

						<a href="" data-target="#modal-delete-{{$vent->idventa}}" data-toggle="modal"><button class="btn btn-danger">Anular Ventas</button></a>

					</td>

				</tr>
				@include('ventas.venta.modal')
				@endforeach

			</table>

		</div>

		{{$ventas->render()}}

	</div>

</div>

@endsection
