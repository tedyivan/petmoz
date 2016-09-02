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
					<h3>Tabela de Textos</h3>
				
						<table class="table table-striped table-bordered">
							

							    <tr>
							    
							        <th><strong>Titulo</strong></th>
							    	<th><strong>Conteudo</strong></th>
							    	<th><strong>Posicao</strong></th>
							    	<th><strong>Estado</strong></th>
							    	<th><strong>Autor</strong></th>
							    </tr>           

							@foreach($textos as $texto)
							    <tr>
							    
							        <td><a href="/texto/{{ $texto->id }}">{!! $texto->titulo!!}</a></td>
							        <td ><p class="corta">{!! $texto->descricao !!}</p></td>
							        <td>{!! $texto->posicao !!}</td>
				        			<td>{!! $texto->isExist !!}</td>
                                    <td> <!--{!! $texto->user_id !!}-->
                                    		@foreach($users as $user)
                                    			@if($user->id == $texto->user_id)
                                    				{!! $user->name !!}
                                    			@endif
                                    		@endforeach

                                    </td>
                                    <td><form action="/texto/{{ $texto->id }}/edit">
								        		<button class="submeter" type="submit"><span class="glyphicon glyphicon-edit"></span></button>
								        </form>

								        {!! Form::open(['method' => 'DELETE', 'route' =>['texto.destroy', $texto->id]]) !!}
								        	<button class="submeter" type="submit"><span class=" glyphicon glyphicon-remove" ></span></button>
								        {!! Form::close() !!}




							        </td>

									
								</tr>
							@endforeach
						
					</table>
			</div>
			<div class="col-md-2 btn-lateral">
				<a class="btn btn-primary" href="{{ url('/texto/create') }}">adicionar <span class="glyphicon glyphicon-plus"></span></a>
			</div>


			</div>
	</div>

@endsection