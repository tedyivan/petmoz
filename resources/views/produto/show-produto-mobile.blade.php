@extends('categoria.categoria-layout')

@section('content')
	<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="/css/smoothDivScroll.css" />

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

			.row-fluid{
    white-space: nowrap;
}
.row-fluid .col-xs-12{
    display: inline-block;
}

 #abaute{
 	visibility: hidden;
 }

		#makeMeScrollable div.scrollableArea *
		{
			position: relative;
			display: block;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
				block of code. It's just a nice feature that prevent the images from
				accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}



	</style>

	<section id="abaut">
			
			<div style="height:80px;">
				
			</div>
			<h2 class="titulo">{!! $produto->nome !!}</h2>
			
			<div id="makeMeScrollable">
				
				@foreach($images as $image)
					 <img src="{{ asset($image->file) }}"  height="300px"   />
								
				@endforeach
				
			</div>
		
	  <div class="container">
	  		<div style="height:20px;">
				
			</div>
	  	    <div class="form-group">
					<label>Nome : </label>
					{!! $produto->nome !!}
				</div>

				<div class="form-group">
					<label>Preco: </label>
					{!! $produto->preco !!} mt
				</div>
				<div class="form-group">
					<label>Descricao: </label>
					{!! $produto->descricao !!}
				</div>

				<div class="form-group">
					<label>Raca:</label>
					{!!$categoria_produto->designacao!!}
				</div>
	  </div>








		
	
	<script src="/js/customer_jquery/jquery.1.10.2.min.js"  type="text/javascript"></script>
		
	<!-- jQuery UI (Custom Download containing only Widget and Effects Core)
	     You can make your own at: http://jqueryui.com/download -->
	<script src="/js/customer_jquery/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	
	<!-- Latest version (3.1.4) of jQuery Mouse Wheel by Brandon Aaron
	     You will find it here: https://github.com/brandonaaron/jquery-mousewheel -->
	<script src="/js/customer_jquery/jquery.mousewheel.min.js" type="text/javascript"></script>

	<!-- jQuery Kinectic (1.8.2) used for touch scrolling -->
	<!-- https://github.com/davetayls/jquery.kinetic/ -->
	<script src="/js/customer_jquery/jquery.kinetic.min.js" type="text/javascript"></script>

	<!-- Smooth Div Scroll 1.3 minified-->
	<script src="/js/customer_jquery/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>

	<!-- If you want to look at the uncompressed version you find it at
	     js/jquery.smoothDivScroll-1.3.js -->

	<script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
			// None of the options are set
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart",

				hotSpotScrolling: false,
				touchScrolling: true,
				manualContinuousScrolling: true,
				mousewheelScrolling: false
			});
		});
	</script>
	

	</section>

	


	
																			
	</div>


	
@endsection


