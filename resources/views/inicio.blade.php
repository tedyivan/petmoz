@extends('master')

@section('content')
		
    


    <section id="slider-full"> 
      <script type="text/javascript" src="{{ asset('js/jssor.slider-21.1.5.min.js')}}"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>

        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 700px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 700px; overflow: hidden;">
          <!--  <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" src="img/c-phone.png" />
                    <img data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" src="img/c-jssor-slider.png" />
                    <img data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" src="img/c-text.png" />
                    <img data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" src="img/c-fruit.png" />
                    <img data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" src="img/c-navigator.png" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="img/c-phone-horizontal.png" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="img/c-slide-1.jpg" />
                        <img data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="img/c-slide-3.jpg" />
                    </div>
                    <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="img/c-navigator-horizontal.png" />
                    <img data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="img/c-finger-pointing.png" />
                </div>
            </div>
          -->


           <?php $a=0; ?>
          @foreach($figuras as $figura)
              
              @if($figura->posicao == 1)   
               @if($a == 0)
                
                  <!--<img src="{{ asset($figura->file)}}" class="imgSlider">  
                  -->
                  <div data-p="225.00" style="display: none;">
                  <img data-u="image" src="{{ asset($figura->file)}}" />
                  <?php $a++ ?> 
                  </div>
                
               @else
                
                  <!--<img src="{{ asset($figura->file)}}" class="imgSlider">  
                  -->
                  <div data-p="225.00" data-po="80% 55%" style="display: none;">      
                  <img data-u="image" src="{{ asset($figura->file)}}" />
                  <?php $a++ ?> 
                  </div>

                
               @endif
              @endif
          @endforeach

            
            <a data-u="add" href="http://www.jssor.com/demos/full-width-slider.slider" style="display:none">Full Width Slider</a>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

    <!-- #endregion Jssor Slider End -->


    </section>




    <section id="about" class="text-center">
        <div class="container" >
        <div class="row">

               
                @if(Auth::check())
                  <div class="text-left">
                      <span class="danger">POSIÇÃO 0</span>  
                  </div>
                @endif

               @foreach($textos as $texto)
                  <div class="about-top" >
                    @if($texto->posicao == 0)
                    
                      <h2 class="titulo1">{!! $texto->titulo !!}</h2>
                        <div style="height:30px;">
        
                        </div>
                      <p class="texto">{!! $texto->descricao !!}</p>
                    @endif
                    
                  </div>
               @endforeach
               

            <div class="about-content"> 
           <!--     
                <div class="col-md-4">
                  <div class="about-icon">
                    <img src="/images/jesus.jpg" height="200px" width="300px">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="about-icon">
                    <img src="/images/jesus.jpg" height="200px" width="300px">
                  </div>
                </div>
                <div class="col-md-4" height="200px" width="300px">
                  <div class="about-icon">
                    <img src="/images/jesus.jpg" height="200px" width="300px">
                  </div>
                </div>
            </div>
          -->
          <?php $c=0; ?>
          @foreach($figuras as $figura)
           @if($figura->posicao == 0)
            <div class="col-md-4">
                  <div class="about-icon quadrinho">
                    <img src="{{ asset($figura->file)}}" height="200px" width="300px">
                  @if(Auth::check())
                    <div class="baixos-overlay">
                                          
                      {!! Form::open(['method' => 'DELETE', 'route' =>['figura.destroy', $figura->id]]) !!}
                          <button class="submeter" type="submit"><span class="lapis glyphicon glyphicon-remove" ></span></button>
                        {!! Form::close() !!}

                    </div>
                  @endif

                  </div>
            
            </div>
            <?php $c++;?>
          @endif
          @endforeach
            </div>
          
          </div>
          <div class="row btn-add-fig">
          @if(Auth::check())
           @if($c >= 3)
            <h4>O numero de imagens excedida</h4>
           @else

                  <a class="btn uppicserve btn-primary" role="button" data-toggle="modal" href="#modalfigura" >
                   Imagem <span class="glyphicon glyphicon-plus"></span>
                  </a>  
           @endif   
          @endif
          </div>




        </div>


    </section>
    <section id="texto-about" >
      <div class="container">
        @if(Auth::check())
            <div>
                <span class="danger">POSIÇÃO 1</span>  
            </div>
        @endif

        @foreach($textos as $texto)
            
            <div class="about-top" >
              @if($texto->posicao == 1)



                <h3 class="tituloRed">{!! $texto->titulo !!}</h3>
                <div style="height:35px;">
        
                </div>
                <p class="texto">{!! $texto->descricao !!}</p>
              @endif
            </div>
         @endforeach

      </div>
    </section>

      <section id="contant-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="block-left">
                            <div class="contant-1-text-area">
                                <div class="contant-1-head">
                                    <h1>Onec ultrices ultricies tellus </h1>
                                </div>
                                <div class="contant-1-text">
                                    <h2>Duis bibendum diam non <br> erat facilisis tincidunt.</h2>
                                    <p>Duis bibendum diam non erat facilaisis tincidunt. Fusce leo <br /> neque, lacinia at tempor vitae, porta at arcu. Vestibulum <br /> varius non dui at pulvinar. Ut egestas orci in quam <br /> sollicitudin aliquet. </p>
                                    <button type="button" class="btn btn-default edit-button-2">Ver Mais</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                    <div class="col-md-6 col-xs-10">
                        <div class="block-right">
                            <div class="contant-1-block-right-img">
                                <img src="../images/dog1.jpg" alt="img" height="300px">
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #contant-1 close -->


<!-- A parte do modal para fazer upload-->
  <div class="modal fade" id="modalfigura" tabindex="-1" aria-hidden="true" role="dialog">
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
              <input id="posicao" name="posicao" value="0" class="form-control" type="hidden">
              </div>
        
              <div class="form-group">
                    <label for="userfile">Image File</label>
                    <input type="file" class="form-control" name="userfile">
                  </div>
            </div>      
            <div class="modal-footer">
                  <div class="form-group buttons-abaixo">
              <button type="submit" class="btn btn-primary">Registar</button>
                <a href="{{ url('/') }}" class="btn btn-warning">Cancel</a>
                </div>
        </div>

        {!! Form::close() !!}
    
      </div>  
    </div>
    
  </div>








    
@endsection
