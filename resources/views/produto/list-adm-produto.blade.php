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
			<div class="row formulario hidden-xs">

				
				<div class="col-md-10">
					<h3>Tabela de Produtos</h3>
				
						<table class="table table-striped table-bordered">
							

							    <tr>
							    
							        <th><strong>Nome</strong></th>
							    	<th><strong>Preco</strong></th>
							    	<th><strong>Descricao</strong></th>
							    	<th><strong>Categoria</strong></th>
							    </tr>           

							@foreach($produtos as $produto)
							    <tr>
							    
							        <td><a href="/produto/{{ $produto->id }}">{!! $produto->nome!!}</a></td>
							        <td>{!! $produto->preco !!}</td>
							        <td>{!! $produto->descricao !!}</td>

							        @foreach($categorias as $categoria)
							        		@if($categoria->id == $produto->categoria_id)
							        			<td>{!! $categoria->designacao !!}</td>
							        		@endif
							        @endforeach
							        
							        
							        <td><form action="/produto/{{ $produto->id }}/edit">
								        		<button class="submeter" type="submit"><span class="glyphicon glyphicon-edit"></span></button>
								        </form>

								        {!! Form::open(['method' => 'DELETE', 'route' =>['produto.destroy', $produto->id]]) !!}
								        	<button class="submeter" type="submit"><span class=" glyphicon glyphicon-remove" ></span></button>
								        {!! Form::close() !!}




							        </td>
									
								</tr>
							@endforeach
						
					</table>
			</div>
			<div class="col-md-2 btn-lateral">
				<a class="btn btn-primary" href="{{ url('/produto/create') }}">adicionar <span class="glyphicon glyphicon-plus"></span></a>
			</div>


			</div>
	</div>

@endsection