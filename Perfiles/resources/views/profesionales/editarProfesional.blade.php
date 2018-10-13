@extends('layouts.menu')
@section('titulo','REGISTRAR PROFESIONAL')
@section('contenido')

    
   <div class="row justify-content-center mt-4">
        <div class="col-sm-8">
		   @include('complementos.error')
		   @include('complementos.errorAjax')
            <form method="POST" action="{{route('modificarProfesional',['id'=>$profesional->id])}}">
                {!! csrf_field() !!}

				
				<div class = "form-group row "> 
					<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" id="nombre" class="form-control" name="nombre_prof" value="{{old('nombre_prof',$profesional->nombre_prof)}}">
					</div>
				</div>
								
				<!--Nombre tutor -->
                

				<div class = "form-group row"> 
					<label for="ap_pa" class="col-sm-2 col-form-label">Apellido Paterno</label>
					<div class="col-sm-4">
						<input type="text" id="ape_pa" class="form-control" name="ap_pa_prof" value="{{old('ap_pa_prof',$profesional->ap_pa_prof)}}">
					</div>
				</div>
				

               
				<div class = "form-group row"> 
					<label for="ap_ma_prof" class="col-sm-2 col-form-label">Apellido Maternos</label>
					<div class="col-sm-4">
						<input type="text" id="ape_ma_prof" class="form-control" name="ap_ma_prof" value="{{old('ap_ma_prof',$profesional->ap_ma_prof)}}">
					</div>
				</div>

				<div class = "form-group row"> 
					<label for="ci_prof" class="col-sm-2 col-form-label">CI</label>
					<div class="col-sm-4">
						<input type="text"  class="form-control" name="ci_prof" id="ci_prof" value="{{old('ci_prof',$profesional->ci_prof)}}">
					</div>
				</div>

                <div class = "form-group row"> 
					<label for="telef_prof" class="col-sm-2 col-form-label">Telefono</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="telef_prof" id="telef_prof" value="{{old('telef_prof',$profesional->telef_prof)}}">
					</div>

					<label for="correo_prof" class="col-sm-2 col-form-label">Correo</label>
					<div class="col-sm-4">
						<input type="email"  class="form-control" name="correo_prof" value="{{old('correo_prof',$profesional->correo_prof)}}">
					</div>
				</div>

				<div class = "form-group row"> 
					<label for="direc_prof" class="col-sm-2 col-form-label">Direccion</label>
					<div class="col-sm-4">
						<input type="text" id="direccion" class="form-control" name="direc_prof" id="direc_prof" value="{{old('direc_prof',$profesional->direc_prof)}}">
					</div>

					<label for="titulo_id" class="col-sm-2 col-form-label">Titulo</label>
					<div class="col-sm-4 row-fluid" >
						<select name="titulo_id" id="titulo_id" class="form-control" >
                            <option disabled selected > -- select an option -- </option>
                            @foreach ($titulos as $titulo)
                                @if ($profesional->titulo_id == $titulo->id)
                                    <option value="{{$titulo->id}}" selected >{{$titulo->nombre}}</option>                                    
                                @else
                                    <option value="{{$titulo->id}}" >{{$titulo->nombre}}</option>
                                @endif
								
							@endforeach
						</select>
					</div>
				</div>

				
				<div class = "form-group row"> 
					<label for="area_id" class="col-sm-2 col-form-label">Area</label>
					<div class="col-sm-4">
						<select name="area_id" id="area_id" class="form-control" >
                            @foreach ($areas as $area)
                                @if ($area->id == $profesional->areas->pluck('id')[0])
                                    <option value="{{$area->id}}" selected>{{$area->nombre}}</option> 
                                @elseif($area->id == $profesional->areas->pluck('id')[1])
                                    <option value="{{$area->id}}" selected>{{$area->nombre}}</option>
                                @else
                                <option value="{{$area->id}}">{{$area->nombre}}</option>
                                @endif
							@endforeach
						</select>
					</div>

					<label for="subarea_id" class="col-sm-2 col-form-label">Sub Area</label>
					<div class="col-sm-4">
						<select name="subarea_id" id="subarea_id" class="form-control" >
							@foreach ($subareas as $subarea)
                                @if ($subarea->id == $profesional->areas->pluck('id')[0])
                                    <option value="{{$subarea->id}}" selected>{{$subarea->nombre}}</option> 
                                @elseif($subarea->id == $profesional->areas->pluck('id')[1])
                                    <option value="{{$subarea->id}}" selected>{{$subarea->nombre}}</option>
                                @else
                                    <option value="{{$subarea->id}}">{{$subarea->nombre}}</option>
                                @endif
							@endforeach
						</select>
					</div>
				</div>   
				<div class = "form-group row"> 
					<div class="col-sm-2"></div>
					<div class="col-8">
							<a href="{{ route('listarProfesionales') }}" class="btn btn-danger">Cancel</a>
							<button  type="submit" class='btn btn-success registrar'>Modificar</button>
					</div>
					
						
				</div>
			</form>

		</div>
	
	</div>
@endsection

