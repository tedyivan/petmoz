@extends('categoria.categoria-layout')

@section('content')
<style type="text/css">
	.acerca-cima{
		background-color: black;
		height: 450px;
	}
	.acerca-meio{
		background-color: white;
		height: 600px;
	}
	.titulo2{
		font-size: 16px;
	}
	.row{
		padding-left: 20px;
	}
	/*
	.conteudo-texto-a{
		padding-top: 15px;
		padding-left: 700px;	
		line-height: 1.42857143;
		font-size: 14px;
	}
	.conteudo-texto-b{
		padding-top: 15px;
		padding-left: 50px;	
		line-height: 1.42857143;
		font-size: 14px;
	}
	.tdireita{
		padding-left: 700px;
	}
	*/
</style>
<section>
<div class="acerca-cima">
	
</div>
<div class="acerca-meio">
	<div class="row">
		<div class="row">
		<div class="col-md-12">
		<h2 class="titulo">Nossa missão, visão e valores</h2><br>
		</div>
		</div>
<div class="row">
<div class="col-md-6">
	
</div>
<div class="col-md-6">
<label class="titulo2 tdireita">Missão:</label><br>
<p class="conteudo-texto-a">Satisfazer nossos clientes, oferecendo-lhes produtos e serviços de excelente qualidade a 
preços competitivos, obtendo a sustentabilidade necessária que permita o 
desenvolvimento da nossa empresa, nossos colaboradores e do nosso país.
</p><br>
</div>

</div>
<div class="row">
<label class="titulo2">Visão:</label><br>
<div class="col-md-6">
<p class="conteudo-texto-b">Sermos reconhecidos como uma empresa moçambicana de referência na venda de produtos 
preservadores da nossa cultura e na prestação de serviços em diversas áreas.
</p><br>
</div>
</div>

<div class="row">
<div class="col-md-6"></div>

<div class="col-md-6">
<label class="titulo2 tdireita">Valores:</label><br>
<p class="conteudo-texto-a">
Expansão do património cultural moçambicano; 
Espírito de equipa baseada na ética, transparência, profissionalismo e honestidade;
Compromisso com o cliente;
Crescimento e rentabilidade.
</p><br>
</div>
</div>		
	</div>
</div>
</section>

<section id="slider-coments">
      <div class="slider-overlay">
      <div class="container ">
      	<h2>Comentarios</h2>
        <div id="carousel-example-generic" class="carousel slide col-xs-12" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">

            <?php $b = 0 ?>
            @foreach($figuras as $figura)
              @if($figura->posicao == 1) 
                <?php $b++ ?>
              @endif
            @endforeach
            
            @for ($i = 0; $i < $b; $i++)
              @if($i==0)
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              @else
                <li data-target="#carousel-example-generic" data-slide-to={{$i}}></li>
                
              @endif

            @endfor
            
            
            @foreach($figuras as $figura)

            @endforeach
          </ol>

          <!-- Wrapper for slides--> 
          <div class="carousel-inner" role="listbox">
                      
          <?php $a=0; ?>
          @foreach($figuras as $figura)
              
             @if($figura->posicao == 1)   
               @if($a == 0)
                <div class="item active">
                  <img src="{{ asset($figura->file)}}" class="imgSlider">  
                  <?php $a++ ?> 
                               
                </div>
               @else
                 <div class="item">
                  <img src="{{ asset($figura->file)}}" class="imgSlider">  
                  <?php $a++ ?> 

                </div>
               @endif
              @endif
          @endforeach
        

          </div>

          
        </div>

      </div>
      </div>
      
      
    </section>




@endsection