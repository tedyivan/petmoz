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
			
	</style>
	
	<div class="container">
			<div class="row formulario">

				
				<div class="col-md-10">
					<h3>Tabela de Usuarios</h3>
				
						<table class="table table-striped table-bordered">
							

							    <tr>
							    
							        <th><strong>Nome</strong></th>
							    	<th><strong>Email</strong></th>
							    	<th><strong>Data</strong></th>
							    	<th><strong>Activo</strong></th>
							    	<th><strong>Opções</strong></th>
							    	
							    </tr>           

							@foreach($users as $user)
							    <tr>
							    
							        <td><a href="/administrador/{{ $user->id }}">{!! $user->name!!}</a></td>
							        <td>{!! $user->email !!}</td>
							        <td>{!! $user->created_at !!}</td>
							        <td>
							        	@if($user->isExist)
							        		activo
							        	@else
							        		desactivo

							        	@endif

							        </td>

							        
							        
							        <td><a href="/produto/{{ $user->id }}/edit">editar<span></span></a></td>
									
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