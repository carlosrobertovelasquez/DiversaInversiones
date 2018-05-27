@extends('layouts.app')
@section('content')



<!--Video, navegacion, menu y publicaciones principales-->
<div data-vide-bg="video/srix">
    <div class="center-container">
        <div class="navigation">
            <div class="container">


                <!--Menu-->

                <div class="navigation-right">
                    <span class="menu"><img src="images/menu.png" alt=" " /></span>
                    <nav class="link-effect-3" id="link-effect-3">
                        <ul class="nav1 nav nav-wil">
                            <li class="active"><a data-hover="Principal" href="{{ url('principal?setFocus=true') }}">Principal</a></li>
                            <li><a data-hover="Inversiones" href="{{ url('noticias?setFocus=true') }}">Inversiones</a></li>
                            <li><a data-hover="Quienes Somos" href="{{ url('QuienesSomos?setFocus=true') }}" >Quienes Somos</a></li>
                            <li><a data-hover="Instalaciones" href="{{ url('instalaciones?setFocus=true')}}">Instalaciones</a></li>
                            
                            <li><a data-hover="Contacto" href="{{ url('contacto?setFocus=true') }}">Contacto</a></li>
                            <!--validacion de cerrar sesion-->
                            @if (Auth::guest())
                                <li><a data-hover="Mi Cuenta" href="{{ url('login?setFocus=true') }}">Mi Cuenta</a></li>
                            @else
                                <li class="dropdown">
                                    <a data-hover="{{ Auth::user()->name }} {{ Auth::user()->last_name }}" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                                    </a>
                                  <ul class="dropdown-menu">
                                      <div class="col-xs-4 text-center">
                                            <a href="home">Panel</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                              <a href="logout">Salir</a>
                                        </div>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </nav>
                        <!-- script-para-menu -->
                            <script>
                               $( "span.menu" ).click(function() {
                                 $( "ul.nav1" ).slideToggle( 300, function() {
                                 // Animation complete.
                                  });
                                 });
                            </script>
                        <!-- /script-para-menu -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="w3ls_banner_info">
            <div class="container">
                <div class="w3l_banner_logo">
                    <img src="images/Escudo_red.png" alt=" " class="img-responsive" />
                </div>
                <h3>Invierta Con Nosotros Somos la Mejor Soluccion</h3>
                <p>La educación trae consigo la oportunidad , y a su vez la inspiración.</p>
                <div class="more">
                    <a href="#" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModal">Filosofia</a>
                </div>
                <!--modal-video-->
                <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <!--Boton Filosofia-->
                            <div class="modal-header">
                                Ingresar
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <section>
                            <!--Filosofia-->
                                <div class="modal-body">
                                    <img src="images/17.jpg" alt=" " class="img-responsive" />
                                    <p>"El Colegio Rafael María Carrasquilla está comprometido con la formación íntegral de los niños, niñas y jovenen que están a su cargo desarrollando a nivel conceptual , las habilidades comunicativas y el razonamiento lógico; a nivel procedimental, el anlisis y la criticidad y como valores fundamentales el amar, respetar y valorar la vida; del mismo modo, se les forma en el respeto por los valores fundamentales de la dignidad humana, los derechos humanos, la aceptación, la tolerancia hacia las diferencias y la construcción a través de todas sus actitudes del valor de la responsabilidad”.
                                        <i>"Formando en talentos y valores para la excelencia".</i></p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- banner-boton-imagen-text -->
<div id="contenido" class="banner-bottom-image-text">
</br>
<!--               Seccion de publicaciones               -->
<div class="FondoPublicaciones">
    <div id="CenterContent" class="CenterContent">
          <h3 class="Titulo">NOSTROS</h3>
        <div id="ContentIzquierda" class="ContentIzquierda">
            <div class="Titulo2" >MISION
            </div>
            <br />
                <p class="Texto1">Es misión de DIVERSAS INVERSIONES administrar y hacer crecer el patrimonio de nuestros inversionistas, mediante una asesoría basada en el conocimiento y la integridad de un excelente recurso humano
                </p>
                </br>
                <div class="Linea"></div>
                </br>
        </div>  
        <div id="ContentDerecha" class="ContentDerecha">
        <div class="Titulo2" >VISION
        </div>
        <br />
      <p class="Texto1">Ser el líder en excelencia en el servicio y atención al cliente, mediante asesoría personalizada y el desarrollo de inversiones y proyectos que agreguen valor a la gestión de sus carteras de inversión.

      </p>
            </br>
            <div class="Linea"></div>
            </br>
      
</div>
 
</div>

<!--           fin    Seccion de publicaciones               -->


</div>

@stop






