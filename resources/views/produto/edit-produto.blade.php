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
			<label class="titulo">Registo de produto</label>
				{!! Form::model($produto,['url'=>'/produto/'.$produto->id, 'method'=>'PATCH', 'files'=>'true']) !!}
					<div class="form-group">
					
					<h4>Designacao</h4>		
						{!!Form::text('nome',null,['class'=>'form-control']) !!}
					
					</div>

					<h4>Preco</h4>
					<div class="form-group">
						
						{!!Form::text('preco',null,['class'=>'form-control']) !!}
					
					</div>

					<h4>Descricao</h4>
					<div class="form-group">
						
						{!!Form::textarea('descricao',null,['class'=>'form-control']) !!}
					
					</div>

					<div class="form-group">
											
					<h4 for="categoria_id">Categoria</h4>
					
					<select id="categoria_id" name="categoria_id" class="form-control">
  							@foreach ($categorias as $categoria) {
    							<option value="{{$categoria->id}}" >{{ $categoria->designacao }}</option>
  							}
  							@endforeach
					</select>
					<a class="btn btn-primary" onclick="addcategoria()" href="#modalcategoria">adicionar <span class="glyphicon glyphicon-plus"></span></a>
					
							
							{!! Form::label('categoria_id',$categorias)!!}
							{!! Form::select('categoria_id', $categorias , Input::old('categoria_id')) !!}
						
					</div>
					
      				
      				<div class="form-group buttons-abaixo">
					<button type="submit" class="btn btn-primary">Registar</button>
				    <a href="{{ url('/produto') }}" class="btn btn-warning">Cancel</a>
				    </div>


				{!! Form::close() !!}
			</div>
	</div>

@endsection