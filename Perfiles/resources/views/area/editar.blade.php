@extends('layouts.menu')
@section('titulo','EDITAR AREA')
@section('contenido')


<!--ERRORES-->
	@include('complementos.error')				
<!--FIN ERRORES-->
	<div class="row justify-content-center mt-4">
		<div class= "col-sm-9" style="left: 100px;" >
			<form method="POST" action="{{route('modificarArea',$area->id)}}">
				{!! csrf_field() !!}
				<!--Nombre area -->
				<div class = "form-group row"> 
					<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" placeholder="nombre area" name="nombre" autocomplete="off"
						value="{{old('nombre',$area->nombre)}}">
					</div>
				</div>
		
				<div class = "form-group row"> 
					<label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" placeholder="codigo area" name="codigo" autocomplete="off"
						value= {{old('codigo',$area->codigo)}}>
					</div>
				</div>
				
				<div class = "form-group row">
					<label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
					<div class="col-sm-7">
						<textarea class="form-control" placeholder="descripcion no obligatoria" autocomplete="off"
						name="descripcion" rows="5">{{old('descripcion',$area->descripcion)}}</textarea>
					</div>
					
				</div>
		
				<div class = "form-group row"> 
					<div class="col-sm-2"></div>
					<div class="col-7">
						<a href="{{ route('Areas') }}" class="btn btn-danger">Cancelar</a>	
						<button type="submit" class='btn btn-success registrar'>Modificar</button>
					</div>		
				</div>
			</form>
		</div>
	</ class="row justify-content-center mt-4">

@endsection