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
			<label class="titulo">Adicionando Servico</label>
				{!! Form::open(['url'=>'/servico', 'method'=>'POST', 'files'=>'true']) !!}
					<div class="form-group">
					
					<h4>Designacao</h4>		
						{!!Form::text('designacao',null,['class'=>'form-control']) !!}
					
					</div>

					<h4>Descricao</h4>
					<div class="form-group">
						
						{!!Form::textarea('descricao',null,['class'=>'form-control']) !!}
					
					</div>

					<div class="form-group">
					<div class="form-group">
         				<h4 for="userfile">Image File</h4>
         				<input type="file" class="form-control" name="userfile">
      				</div>
														
					</div>
					
      				<div class="form-group buttons-abaixo">
					<button type="submit" class="btn btn-primary">Registar</button>
				    <a href="{{ url('/servico') }}" class="btn btn-warning">Cancel</a>
				    </div>


				{!! Form::close() !!}
			</div>

			
	</div>

@endsection