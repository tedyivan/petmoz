@extends('produto.produto-layout')

@section('content')
	<style >
			.conteudo{
				padding: 40px;
			}
			
			.baixos{
				padding: 10px;
				background: #e1e1e1;
				margin-top:30px;
				text-align: center;
			}
			.btn-baixos{
				margin-top: 30px;
				margin-right: 100px;
				text-align: right;
			}
			.imgcima img{
				/*max-height: 300px;
				max-width: 450px;
				*/
				display: block;
			    margin-left: auto;
			    margin-right: auto;

			}
			.btn-add-img{
				margin-top: 10px;
			}

			.baixos-icon img{

			}

			.baixos-icon{
				position: relative;
				overflow: hidden;
			}
			.baixos-overlay{
				position: absolute;
				background: rgba(0,0,0,.5);
				width: 100%;
				height: 100%;
				
			}

			.baixos-icon:hover .baixos-overlay{
				top:0;
			} 

			.lupa{
				font-size: 50px;
				color: #fff;
				text-align: center;
				
			    
			}

			.cima{
				text-align: center;
			}

			.dadosproduto {
				margin-left: 70px;
				padding-top: 6%;
			}

			.carousel-control {
			  padding-top:0%;
			  width:5%;
			}

			.cada-img>img {
			  
			  min-width: 100%;
			  height: 150px;
			  padding: 4px;
			}

			#carousel-baixo{
				 width: 100%; 
                 margin: auto;
                 
				 padding: 19px;
				 
				 


			}

			.carousel {
				height: 120px;
				position: relative;
			}

			.carousel-inner{
				position: relative;
				width: 100%;
				overflow: hidden;
				padding: -20px;
			}

					#cima {
			    border-radius: 5px;
			    cursor: pointer;
			    transition: 0.3s;
			}

			#myImg:hover {opacity: 0.7;}
			.imgHover:hover {opacity: 0.7;}

			.baixos{
				background: black;
			}

			.centro {
			    margin: 0 auto;
			    width: 80%;
			}

			.baixos{
				text-align: center;
			}
			

	</style>
	<!-- A parte do modal para fazer upload-->
	<div class="modal fade" id="upload" tabindex="-1" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-lg">		
			<div class="modal-content">	
				<div class="modal-header">
					<h2>Adicionando imagem</h2>
				</div>
				
				<div class="modal-body">
					<label class="titulo">Upload image</label>
						{!! Form::open(['url'=>'/image', 'method'=>'POST', 'files'=>'true']) !!}
							<div class="form-group">
							
							<h4>Designacao</h4>		
								{!!Form::text('nome',null,['class'=>'form-control']) !!}
							<input id="produto_id" name="produto_id" class="form-control" type="hidden">
							</div>
				
							<div class="form-group">
		         				<label for="userfile">Image File</label>
		         				<input type="file" class="form-control" name="userfile">
		      				</div>
		      	</div>			
		      	<div class="modal-footer">
		      				<div class="form-group buttons-abaixo">
							<button type="submit" class="btn btn-primary">Registar</button>
						    <a href="{{ url('/produto') }}" class="btn btn-warning">Cancel</a>
						    </div>
				</div>

				{!! Form::close() !!}
		
			</div>	
		</div>
		
	</div>




	<section id="abaut">
		<div class="row conteudo">
		<div class="col-md-1 "></div>
		

		
			<p class="titulo text-left">{!! $produto->nome !!}</p>	
			<div class="row cima">
			    <div class="col-md-8 col-xs-offset-2">
					<div class="imgcima ">
					<img src="{{ asset($images->first()->file) }}" class="" height="300px" width="300px"  id="topcima"/> 
					</div>
				</div>
			</div>
				
			<div>
			<div class="row baixos ">
			  <!--VISUALIZACAO EM FRAMES-->
			 <div style="padding-left:54px;">
			 <?php $conta = 0; ?>
		
			@foreach($images as $image)
			 	
			   @if($conta == 0)
			   	<div class="col-md-3 col-xs-4"  >
					<div class="baixos-icon ">
						
					  <a class="darken">
						<img src="{{ asset($image->file) }}" class=" imgHover" height="150px" width="150px" id="imgClickAndChange" onclick="viewimagetop('{{ asset($image->file) }}')" />
					  </a>

										

					</div>
				</div>

			   @else
			 	<div class="col-md-3 col-xs-4 col-md-offset-1">
					<div class="baixos-icon ">
						
					  <a class="darken">
						<img src="{{ asset($image->file) }}" class=" imgHover" height="150px" width="150px" id="imgClickAndChange" onclick="viewimagetop('{{ asset($image->file) }}')" />
					  </a>

										

					</div>
				</div>
				
				@endif
				<?php $conta++?>
			@endforeach
			
			</div>

			</div>
			
				
				
		<div class="row">
		<div class="dadosproduto  col-xs-12">
			<div class="col-md-6">	
				<div class="form-group">
					<label>Nome : </label>
					{!! $produto->nome !!}
				</div>

				<div class="form-group">
					<label>Preco: </label>
					{!! $produto->preco !!} mt
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Descricao: </label>
					{!! $produto->descricao !!}
				</div>

				<div class="form-group">
					<label>Raca:</label>
					{!!$categoria_produto->designacao!!}
				</div>
			</div>
		</div>
		</div>


		</div>
		
		
		
	</section>

																			
	</div>

     <script type="text/javascript">
     		var topimage = document.getElementById('topcima');
							
						function viewimagetop (x) {
						    topimage.src = x;
				
						}


				
     </script>
	
@endsection


