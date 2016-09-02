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
			<label class="titulo">Actualizar dados da Categoria: {!! $categoria->designacao !!}</label>
				{!! Form::model($categoria,['url'=>'categoria/'.$categoria->id, 'method'=>'PATCH']) !!}
					<div class="form-group">
					
									<div class="form-group">
									
									<h4>Designacao</h4>		
										{!!Form::text('designacao',null,['class'=>'form-control']) !!}
										<span class="help-block">{{$errors->first('designacao')}}</span>
									</div>
						
									<div class="form-group">
				         				<h4 for="descricao">Descricao</h4>
				         				{!!Form::textarea('descricao',null,['class'=>'form-control']) !!}
				      				</div>
		

				     </div>

      				<div class="form-group buttons-abaixo">
					<button type="submit" class="btn btn-primary">Actualizar</button>
					
				    <a href="{{ url('/categoria') }}" class="btn btn-warning">Cancel</a>
				    </div>


				{!! Form::close() !!}
				<!--{!! delete_form(['categoria.destroy',$categoria->id]) !!}-->
			</div>

			
	</div>

@endsection