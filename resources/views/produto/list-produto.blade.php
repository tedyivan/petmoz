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
			.cada-icon{
				display: block;

				margin-right: 15px;
				margin-bottom: 15px;
			}
			.lupa,.dvpreco{
				text-align: center;
			}
			.thumbnail img { min-height:300px; height:300px; } 
			.cadaproduto { 
				margin-top: 15px;
				margin-bottom: 50px;}
			.dvnome{
				text-align: left;
				
			}

			
			.carousel-control.left, .carousel-control.right {
				   background-image:none;
				   filter:none;
			}

			.carousel img {
			  position: absolute;
			  top: 0;
			  left: 0;
			  min-width: 90%;
			  max-width: 90%;
			  height: 500px;
			}

			
			.gold{
				color: #FFDF00;
			}

			.lbnome{
				font-size:large; 
				

			}

			.lbpreco{
				font-size:medium;

			}

			.lbcaption{
				background: black;
			}
			.letrascaorousel{
				padding-top: 20%;
			}

			.quadro{
				position: relative;
				overflow: hidden;
			}

			.baixos-overlay{
				position: absolute;
				background: rgba(0,0,0,.5);
				width: 100%;
				height: 100%;
				
			}
			.quadro:hover .baixos-overlay{
				top:0;
			} 

			.lupa{
				font-size: 300px;
				color: #fff;
				text-align: center;
				display: block;
				
			    
			}


/* Inicio do Modal */

						#cima {
			    border-radius: 5px;
			    cursor: pointer;
			    transition: 0.3s;
			}

			#myImg:hover {opacity: 0.7;}
			.imgHover:hover {opacity: 0.7;}
/* The Modal (background) */
.modal {
	display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 150%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

	
	.my2Modalcenter {
    
    
    
    margin-left: -125px;
   
}		




	</style>
	
	
	

	<div class="container">
				<!-- The Modal -->
					<div id="myModal" class="modal">
					  
					  <div class="modal-content">
					  <span class="close">×</span>
					  <img  id="img01">
					  <div id="caption"></div>
					
					<div class="row cima">
					    <div class="col-sm-6">
							<div class="imgcima ">
							<img src="" class="img-responsive" height="400px" width="400px"  id="cima"/> 
							</div>
						</div>

						<div class="row baixo col-sm-12 text-center col-md-offset-1">
							<div class="col-sm-3 ">
								<a class="darken">
									<img src="" class="img-responsive imgHover" height="150px" width="150px"  id="imgLateral1"/>
								</a>
							</div>
							<div class="col-sm-3">
								<a class="darken">
									<img src="" class="img-responsive imgHover" height="150px" width="150px"  id="imgLateral2"/>
								</a>
							</div>
							<div class="col-sm-3">
								<a class="darken">
									<img src="" class="img-responsive imgHover" height="150px" width="150px"  id="imgLateral3"/>
								</a>
							</div>
						</div>





					</div>
					</div>
					</div>




				<div class="row formulario hidden-xs">
					
					<div class="col-md-11">
					<!--<h3>Produtos</h3>-->
					<h2>{!! $categoria->designacao !!}</h2>

						<div class="row ">
							@foreach($produtos_imgs as $produto_img)
							 	<div class="col-md-4 cadaproduto">
									<div class="dvnome">
										<label class="lbnome">{{ $produto_img->nome }}</label>
									</div>
									<div class="thumbnail quadro">
									  <a class="darken">
										<img src="{{ asset($produto_img->file) }}" height="300px" width="300px" data-toggle="modal" id="{{ $produto_img->id }}" data-target="#my2Modal" onclick="setIdProduto('{{ $produto_img->id }}')" />
									  	<label class="lbcaption">{{ $produto_img->id }}</label>
									  </a>	
										<!--
										<div class="baixos-overlay">
											<a  data-toggle="modal" data-target="#my2Modal" class="lupa glyphicon glyphicon-zoom-in"></a>
											
										</div>
										-->


										

									</div>
									<div class="dvpreco">
										<span class="glyphicon glyphicon-star gold"></span>	<label class="lbpreco">Preço: {{ $produto_img->preco }} mt</label> <span class="glyphicon glyphicon-star gold"></span>
										
									</div>
									<div style="text-center">
										<!--
										<a class="btn uppic btn-primary" role="button" id="testeshow" >
						               show produto <span class="glyphicon glyphicon-plus"></span>
						            	</a>
						            		
						            	<button onclick="viewimage('{{ asset($produto_img->file) }}');">clicoooo</button>
										-->

									</div>
								</div>
							@endforeach
											

						</div>
								
					</div>
					
					



				<script type="text/javascript">
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the image and insert it inside the modal - use its "alt" text as a caption
					var img = document.getElementById('imgClickAndChange');
					var modalImg = document.getElementById("img01");
					var captionText = document.getElementById("caption");
					var modalImg0 = document.getElementById("cima");
					var imgLateral1 = document.getElementById("imgLateral1");
					var imgLateral2 = document.getElementById("imgLateral2");
					var imgLateral3 = document.getElementById("imgLateral3");
					function viewimage (x) {
						
						modal.style.display = "block";
					    //modalImg.src = x;
					    modalImg0.src = x;
					    imgLateral1.src = x;
					    imgLateral2.src = x;
					    imgLateral3.src = x;

					}
					function viewobject (x) {
						
						alert(x);
					    

					}

					img.onclick = function(){
					    modal.style.display = "block";
					    modalImg.src = this.src;
					    captionText.innerHTML = this.alt;
					}

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() { 
					    modal.style.display = "none";
					}

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = "none";
					    }
					}
				</script>


				</div>

				<div class="modal fade" id="show-produto" tabindex="-1" aria-hidden="true" role="dialog">
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
					         			
					      				 
												
					      						<h2><?php $produto_img->id; ?></h2>
												
										
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




				<div class="row formulario hidden-lg">
				<div class="hidden-lg">
							<h3>Produtos</h3>
							<div id="carouselProduto" class="carousel slide" data-ride="carousel" data-interval="false" >
								  <!-- Indicators -->
								  <!--
								  <ol class="carousel-indicators">
								    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								    <li data-target="#myCarousel" data-slide-to="1"></li>
								    <li data-target="#myCarousel" data-slide-to="2"></li>
								    <li data-target="#myCarousel" data-slide-to="3"></li>
								  </ol>
									-->
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								    
									@foreach($produtos_imgs as $count=>$produto_img)
            								
											@if($count == 0)
												<div class="item active">
												<a href="/produto/{{$produto_img->id}}" > 
										           <img src="{{ asset($produto_img->file) }}" id="imgClickAndChange" onclick="changeImage('{{ asset($produto_img->file) }}')" />
									      		   <div class="carousel-caption">
									      		   		<label class="lbcaption">{{ $produto_img->nome }}</label><br>
									      		   		<label class="lbcaption">{{ $produto_img->preco }}</label>	
									      		   </div>	

									      		</div>
										    	</a>
										    @else
										    
										    <div class="item">
										    	<a href="/produto/{{$produto_img->id}}">
										    	   <img src="{{ asset($produto_img->file) }}" id="imgClickAndChange" onclick="changeImage('{{ asset($produto_img->file) }}')" />
										   		   <div class="carousel-caption letrascaorousel">
									      		   		<label class="lbcaption">{{ $produto_img->nome }}</label><br>
									      		   		<label class="lbcaption">{{ $produto_img->preco }}</label>	
									      		   </div>
									      		</a>	
										    </div>
										    
										    @endif

										  <div class="hidden">
										   {{++$count }}
										   </div>
									
									@endforeach










								  </div>

								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#carouselProduto" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#carouselProduto" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
							</div>



						</div>
				
				</div>

				<!-- modal 2 ajax                                             -->

				<div class="modal fade" id="my2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog " role="document">
				    <div class="modal-content my2Modalcenter">
				      <!--
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				      </div>
				      -->
				      <div class="modal-body">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <div id="modal-body-id">
				        	
				        </div>
				      </div>
				      <!--
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				      -->
				    </div>
				  </div>
				</div>


























<!--
				<button id="getRequest">Get Request</button>
				<div id="dialogDiv"></div>


<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#my2Modal">
  Launch demo modal2
</button>
-->
				<script type="text/javascript">
				var idProduto = '1';
				function setIdProduto (arg) {
					idProduto = arg;
				}

				$("#my2Modal").on("show.bs.modal", function(e) {
				    var link = $(e.relatedTarget);
				    alert(idProduto);
				    
					$.get('/produtomodal/'+idProduto,function (data) {
									
									console.log(data);
									
									//$(this).find(".modal-body").load(data);
									$('#modal-body-id').html(data);

								});




				});

					$(document).ready(
						function(){
							$('#getRequest').click(function () {
								$.get('/produto/1',function (data) {
									
									console.log(data);
									$('#dialogDiv').html(data);

								});

								}
								);
							
						} 
					)	

					

					

				  </script>

	</div>












@endsection