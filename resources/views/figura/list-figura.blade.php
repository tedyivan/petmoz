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
					<h3>Tabela de figuras</h3>
				
						<table class="table table-striped table-bordered">
							

							    <tr>
							    
							        <th><strong>Titulo</strong></th>
							    	<th><strong>Posicao</strong></th>
							    	
							    </tr>           

							 @foreach($figuras as $figura)
							    <tr>
							    
							        <td><a href="hjhjhj">{{ $figura->caption  }}</a></td>
							        <td>{!! $figura->posicao !!}</td>
				        			
                                    <td>
								        {!! Form::open(['method' => 'DELETE', 'route' =>['figura.destroy', $figura->id]]) !!}
								        	<button class="submeter" type="submit"><span class=" glyphicon glyphicon-remove" ></span></button>
								        {!! Form::close() !!}




							        </td>

									
								</tr>
							@endforeach
						
					</table>
			</div>
			<div class="col-md-2 btn-lateral">
				<a class="btn uppicserve btn-primary" role="button" data-toggle="modal" href="#modalfiguraslide" >
                   Imagem <span class="glyphicon glyphicon-plus"></span>
                  </a> 

			</div>


			</div>
	</div>

	<!-- A parte do modal para fazer upload-->
  <div class="modal fade" id="modalfiguraslide" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg">   
      <div class="modal-content"> 
        <div class="modal-header">
          <h2>Adicionando imagem</h2>
        </div>
        
        <div class="modal-body">
          <label class="titulo">Upload image</label>
            {!! Form::open(['url'=>'/figura', 'method'=>'POST', 'files'=>'true']) !!}
              <div class="form-group">
              
              <h4>Designacao</h4>   
                {!!Form::text('nome',null,['class'=>'form-control']) !!}
              {!! $errors->first('nome','<span class="help-block">:message</span>') !!}
              
              </div>
              <h4 for="posicao">Posicao</h4>
					<select name="posicao" class="form-control">
  							
    							<option value="0" >0</option>
    							<option value="1" >1</option>
    							<option value="2" >2</option>
    							<option value="3" >3</option>
    							<option value="4" >4</option>
  							
					</select>
        
              <div class="form-group">
                    <label for="userfile">Image File</label>
                    <input type="file" class="form-control" name="userfile">
                  </div>
            </div>      
            <div class="modal-footer">
                  <div class="form-group buttons-abaixo">
              <button type="submit" class="btn btn-primary">Registar</button>
                <a href="{{ url('/figura/') }}" class="btn btn-warning">Cancel</a>
                </div>
        </div>

        {!! Form::close() !!}
    
      </div>  
    </div>
    
  </div>


@endsection