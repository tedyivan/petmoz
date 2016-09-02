@extends('categoria.categoria-layout')

@section('content')
	<style>
			.formulario{
				margin-top: 30px;
			}
			.btn-lateral{
				text-align: right;
				margin-top: 40px;
			}
			.submeter{
				/* back white  e sem border    */
				 background: #fff;
    			 border: 0px solid #ccc;

			}
			
	</style>
	<div class="container">
		<div class="row formulario">
			<div class="col-md-1">
				
			</div>	
			<div class="col-md-9">
						<h3>Tabela de Categorias</h3>
					
							<table class="table table-striped table-bordered">
								

								    <tr>
								    
								        <th><strong>Designacao</strong></th>
								    	<th><strong>Descricao</strong></th>
								    	<th>opcões</th>
								    </tr>           

								@foreach($categorias as $categoria)
								    <tr>
								    
								        <td><a href="/categoria/{{ $categoria->id }}">{!! $categoria->designacao!!}</a></td>
								        <td>{!! $categoria->descricao !!}</td>
								        <td>
								        	<form action="/categoria/{{ $categoria->id }}/edit">
								        		<button class="submeter" type="submit"><span class="glyphicon glyphicon-edit"></span></button>
								        	</form>

								        	{!! Form::open(['method' => 'DELETE', 'route' =>['categoria.destroy', $categoria->id]]) !!}
								        		<button class="submeter" type="submit"><span class=" glyphicon glyphicon-remove" ></span></button>
								        	{!! Form::close() !!}
								       
								        </td>
								       
										
									</tr>
								@endforeach
							
						</table>
				</div>
				<div class="col-md-2">
						<a class="btn btn-primary" href="{{ url('/categoria/create') }}">adicionar <span class="glyphicon glyphicon-plus"></span></a>	
				</div>
		</div>	
	</div>
@endsection