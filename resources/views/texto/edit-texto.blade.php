@extends('categoria.categoria-layout')

@section('content')
	<style>
			.formulario{
				padding: 30px;
			}
			.buttons-abaixo{
				text-align: center;
				margin-top: 30px;
			}
			.titulo{
				margin-top: 20px;
				margin-bottom: 30px;
				font:24px normal Oxygen;
			}
	</style>
	
	<div class="container">
			
			<div class="formulario">
			<label class="titulo">Adicionando texto</label>
				{!! Form::model($texto,['url'=>'/texto/'.$texto->id, 'method'=>'PATCH', 'files'=>'true']) !!}
					<div class="form-group">
					
					<h4>Titulo</h4>		
						{!!Form::text('titulo',null,['class'=>'form-control']) !!}
					
					</div>

					<h4>Descricao</h4>
					<div class="form-group">
						
						{!!Form::textarea('descricao',null,['class'=>'form-control']) !!}
					
					</div>

					<div class="form-group">
					
					<h4 for="posicao">Posicao</h4>
					<select name="posicao" class="form-control">
  							@foreach ($posicaos as $posicao) {
    							<option value="{{$posicao}}" >Posicao - {{$posicao}}</option>
  							}
  							@endforeach
					</select>
									
					</div>
					
					<div class="form-group">
					
					<h4 for="estado">Estado</h4>
					<select name="estado" class="form-control">
  							<option value="0" >Activo</option>
  							<option value="1" >Desactivos</option>
					</select>
									
					</div>

      				<div class="form-group buttons-abaixo">
					<button type="submit" class="btn btn-primary">Registar</button>
				    <a href="{{ url('/texto') }}" class="btn btn-warning">Cancel</a>
				    </div>


				{!! Form::close() !!}
			</div>

			
	</div>

@endsection