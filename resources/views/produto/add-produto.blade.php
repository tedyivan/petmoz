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
				{!! Form::open(['url'=>'/produto', 'method'=>'POST', 'files'=>'true']) !!}
					<div class="form-group">
					
					<h4>Designacao</h4>		
						{!!Form::text('nome',null,['class'=>'form-control']) !!}
					    <span>{!! $errors->first('nome') !!}</span>
					</div>

					<h4>Preco</h4>
					<div class="form-group">
						
						{!!Form::text('preco',null,['class'=>'form-control']) !!}
						<span>{!! $errors->first('preco') !!}</span>
					</div>

					<h4>Descricao</h4>
					<div class="form-group">
						
						{!!Form::textarea('descricao',null,['class'=>'form-control']) !!}
					
					</div>

					<div class="form-group">
					
					<h4 for="categoria_id">Categoria</h4>
					<select name="categoria_id" class="form-control">
  							@foreach ($categorias as $categoria) {
    							<option value="{{$categoria->id}}" >{{ $categoria->designacao }}</option>
  							}
  							@endforeach
					</select>
					<a class="btn btn-primary" onclick="addcategoria()" href="#modalcategoria">adicionar <span class="glyphicon glyphicon-plus"></span></a>
					
					<!--
					@foreach($categorias as $categoria)
						<h2>{{ $categoria->designacao}}

					@endforeach
					-->

					</div>
					<div class="form-group">
         				<h4 for="userfile">Image File</h4>
         				<input type="file" class="form-control" name="userfile" accept="image/gif, image/jpeg, image/png" riqured>
         				<span>{!! $errors->first('userfile') !!}</span>
      				</div>
      				
      				<div class="form-group buttons-abaixo">
					<button type="submit" class="btn btn-primary">Registar</button>
				    <a href="{{ url('/tblprodutos') }}" class="btn btn-warning">Cancel</a>
				    </div>


				{!! Form::close() !!}
			</div>

			<div class="modal fade" id="modalcategoria" tabindex="-1" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-lg">		
					<div class="modal-content">	
						<div class="modal-header">
							<h2>Adicionando Categoria</h2>
						</div>
						
						<div class="modal-body">
							
							{!! Form::open(['url'=>'/categoria', 'method'=>'POST', 'files'=>'true']) !!}
									<div class="form-group">
									
									<h4>Designacao</h4>		
										{!!Form::text('designacao',null,['class'=>'form-control']) !!}
									<input id="produto_id" name="produto_id" class="form-control" type="hidden">
									</div>
						
									<div class="form-group">
				         				<h4 for="descricao">Descricao</h4>
				         				{!!Form::textarea('descricao',null,['class'=>'form-control']) !!}
				      				</div>
				      	</div>			
				      	<div class="modal-footer">
				      				<div class="form-group buttons-abaixo">
									<button type="submit" class="btn btn-primary" >Registar</button>
								    <a href="{{ url('/produto/create') }}" class="btn btn-warning">Cancel</a>
								    </div>
						</div>

						     {!! Form::close() !!}
				
					</div>	
				</div>
				
			</div>
	</div>

@endsection