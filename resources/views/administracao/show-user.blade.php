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
					<h3>Informação do usuario</h3>
						
					<form class="form-horizontal" role="form" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								{!! $user-> name !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								{!! $user-> email !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Telefone</label>
							<div class="col-md-6">
								{!! $user-> telephone !!}
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<a  class="btn btn-primary" href="{{ url('/administrador/') }}">
									<span class="glyphicon glyphicon-chevron-left"></span>
									Voltar
								</a>
								
							</div>
						</div>
					</form>	
						




			</div>
			<div class="col-md-2 btn-lateral">
				<a class="btn btn-primary" role="button" href="{{ url('/administrador/') }}">adicionar <span class="glyphicon glyphicon-plus"></span></a>
			</div>


			</div>
	</div>

@endsection