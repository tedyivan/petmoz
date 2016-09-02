@extends('categoria.categoria-layout')

@section('content')
	<style>
	.thumbnail{
		border: 5px;
		border-color: black;
		border:0;
    	box-shadow:0;
    	border-radius:0;
	}
	
	p{
		   white-space:pre-wrap;
	 }
	 .btn-add-img{
	 	padding-top: 20px;
	 	text-align: right;
	 }
	 .thumbnail img{
	 	max-height: 250px;
	 	min-height: 250px;
	 }
	</style>


    <section id="about" class="text-center">
        <div class="container" >
        	<div class="row">
            <div class="about-top" >
         
                <h2 class="titulo">{!! $servico->designacao !!}</h2>
                  
            </div>
         
            <div class="about-content"> 
                
             @foreach($servicoImages as $image)
			 	<div class="col-md-4 col-xs-12 ">
					<div class="baixos-icon">
						
						<div class="thumbnail">
						<img src="{{ asset($image->file) }}" class="img-responsive" height="250px" width="300px" id="imgClickAndChange" onclick="changeImage('{{ asset($image->file) }}')" />
						</div>

					</div>
				</div>
				

			@endforeach
                

            </div>
           </div>
            <div class="row btn-add-img">
			 
             @if(Auth::check())

			 @if(count($servicoImages) >= 3)
			 	<h4>O numero de imagens excedida</h4>
			 @else
				<a class="btn uppicserve btn-primary" role="button" data-toggle="modal" href="#upload" data-id="{!! $servico->id !!}">
               Imagem <span class="glyphicon glyphicon-plus"></span>
            	</a>	
			 @endif		
			@endif
			</div>
          
        </div>


    </section>
    <section id="texto-about" >
      <div class="container">

       <h2 class="titulo">{!! $servico->designacao !!}</h2>
       <p class="corpo">{!! $servico->descricao !!} </p>
      </div>
    </section>

    <!-- A parte do modal para fazer upload-->
	<div class="modal fade" id="upload" tabindex="-1" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-lg">		
			<div class="modal-content">	
				<div class="modal-header">
					<h2>Adicionando imagem</h2>
				</div>
				
				<div class="modal-body">
					<label class="titulo">Upload image</label>
						{!! Form::open(['url'=>'/servicoimage', 'method'=>'POST', 'files'=>'true']) !!}
							<div class="form-group">
							
							<h4>Designacao</h4>		
								{!!Form::text('nome',null,['class'=>'form-control']) !!}
							<input id="servico_id" name="servico_id" class="form-control" type="hidden">
							</div>
				
							<div class="form-group">
		         				<label for="userfile">Image File</label>
		         				<input type="file" class="form-control" name="userfile">
		      				</div>
		      	</div>			
		      	<div class="modal-footer">
		      				<div class="form-group buttons-abaixo">
							<button type="submit" class="btn btn-primary">Registar</button>
						    <a href="{{ url('/servico') }}" class="btn btn-warning">Cancel</a>
						    </div>
				</div>

				{!! Form::close() !!}
		
			</div>	
		</div>
		
	</div>



@endsection