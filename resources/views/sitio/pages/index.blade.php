@extends('sitio.layout.principal')
@section('contenido')
    <main class="fondo_principal">
<!-- Inicio-->
    <section class="d-flex justify-content-center align-items-center" id="inicio">
        <div class="contenedor_banner">
                <div class="banner">
                        
                        <div class="cont_banner">
                            <h1 class="mb-lg-5 mb-5">Tus mercancías del punto A al punto E de forma rápida y segura.</h1>
                            <a href="#nosotros" class="btn_banner">
                                Conocer más...
                            </a>
                        </div>

                        <div class="img_banner">
                            <img src="{{ asset('imagenes/banners/banner_principal.png') }}" alt="Conectamos empresas, intermediarios y transportistas con solo unos clics.">
                        </div>
                </div>
        </div>  
     </section>





<!-- Conocenos-->
     <section class="justify-content-center align-items-center separador_seccion" id="nosotros">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex-column justify-content-center">
                    <div class="text_sep">
                        <h2 class="text-center text_h1">¿Quienes somos?</h2>
                        <p class="txt_contenido">Somos una empresa 100% mexicana que nace de la preocupación por las problemáticas y necesidades que enfrenta la logística del autotransporte de carga federal referente a la solución de millas vacías 
                        y reducción de la huella ecológica en el sector, así como en la mejora del servicio prestado por los transportistas.</p>
                        <p class="txt_contenido">Creemos en la tecnología como una excelente vía para aumentar la eficiencia y confianza del servicio dejando todo de manera simple para los usuarios de TraPAPE.</p>   
                        <p class="txt_contenido">Estamos convencidos que nuestro método innovador va a ser de agrado para empresas generadoras de carga, intermediarios logísticos, agentes aduanales y autotransportistas
                        de carga dando resultados satisfactorios en el ámbito económico, ecológico y puntualidad en el servicio.</p> 
                    </div>
                </div>  
                <div class="col-lg-6 d-flex-column">
                     <img class="a1" src="{{ asset('imagenes/tracto_1.png') }}" alt="Optimiza tus operaciones y reduce costos con TraPAPE">
                </div> 
            </div>
        </div>
    </section>

<!-- Servicios-->
    <section class="justify-content-center align-items-center separador_seccion fondo_emint" id="servicios">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-lg-6 d-flex-column">
                    <video width="90%" autoplay loop muted playsinline><source src="{{ asset('imagenes/videotrap.mp4') }}" type="video/mp4"></video>
                </div> 
                <div class="col-lg-6 d-flex-column justify-content-center">
                    <div class="mar_con">
                        <h2 class="text_h1 text-center">Conoce a Trapape</h2>
                        <p class="txt_contenido">A través de las tecnologías de TRAPAPE, ponemos en contacto y coordinamos la logística entre EMPRESAS E INTERMEDIARIOS 
                            que requieren enviar mercancías con TRANSPORTISTAS verificados y confiables, que se encuentren disponibles para realizar dicho servicio.
                        </p>
                        <p class="txt_contenido">Contrata servicios de transporte para tus mercancías en la app de TraPAPE de forma rápida, fácil y segura. 
                        </p>  

                        <div class="text-center">
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.trapape.consig"><img class="btn-google_play" src="{{ asset('imagenes/icon/btn-google_play.svg') }}" alt="Botón para ir a GooglePlay"></a> 
                        </div>
                        
                    </div>
                </div>  
            </div>
        </div>
    </section>

<!-- Emisor o intermemdiario-->    
    <section class="justify-content-center align-items-center separador_seccion" id="emisor_intermediario">
        <div class="container">
                <div class="row margen_emi">
                    <div class="col-lg-12 d-flex-column text-center">
                        <h2 class="text-center title_emi">¿Por qué elegirnos?</h2>
                    </div>
                 
                </div>   

                <div class="row text-center marg_bottom">
                    <div class="col-lg-4 d-flex-column text-center card_ser">
                        <div>
                            <img class="a2" src="{{ asset('imagenes/elegirnos/ben1.svg') }}" alt="Publica tus mercancías en la app.">
                            <h3 class="txt_emi">Publica tus mercancías abiertamente o para tus transportistas de confianza.</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center card_ser">
                        <div>
                            <img class="a2" src="{{ asset('imagenes/elegirnos/ben2.svg') }}" alt="Rastreo en tiempo real.">
                            <h3 class="txt_emi">Rastrea tus mercancías en tiempo real, las 24/7 en un solo lugar.</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center card_ser">
                        <div>
                            <img class="a2" src="{{ asset('imagenes/elegirnos/ben3.svg') }}" alt="Precios accesibles y cotizaciones.">
                            <h3 class="txt_emi">Libertad para establecer precios accesibles o solicitar cotizaciones.</h3>
                        </div>
                    </div>

                </div>

                <div class="row text-center marg_bottom">
                    <div class="col-lg-4 d-flex-column text-center card_ser">
                        <div>
                            <img class="a2" src="{{ asset('imagenes/elegirnos/ben4.svg') }}" alt="Perfil del transportista.">
                            <h3 class="txt_emi">Visualiza el perfil del transportista, conductor y unidad que llevará tus mercancías.</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center card_ser">
                        <div>
                            <img class="a2" src="{{ asset('imagenes/elegirnos/ben5.svg') }}" alt="Chat en tiempo real">
                            <h3 class="txt_emi">Comunícate a través del chat en tiempo real con el transportista.</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center card_ser">
                        <div>
                            <img class="a2" src="{{ asset('imagenes/elegirnos/ben6.svg') }}" alt="Estatus de las mercancías">
                            <h3 class="txt_emi">Observa el estatus de tus mercancías en un solo lugar: envíos en tránsito y terminados.</h3>
                        </div>
                    </div>
              </div>  
                    
        </div>
    </section>

    <section class="justify-content-center align-items-center separador_seccion  fondo_emint">
        <div class="container">
            <h2 class="text_h1 text-center">¿Cómo funciona?</h2>

            <div class="group_pasos">

                <div class="row margin_phone">
                    <div class="col-lg-4 d-flex-column text-center">
                        <div class="paso">
                            <img src="{{ asset('imagenes/icon/Icon-num1.svg') }}">
                            <h3>Registro.</h3>
                            <p>
                                Acceda a la aplicación y creé una cuenta, complete el formulario de registro con su información personal requerida.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img  class="cent-img" src="{{ asset('imagenes/icon/Linea_pasos.svg') }}">
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img class="img_pasos" src="{{ asset('imagenes/pasos/paso1.svg') }}" alt="Cuenta del usuario">
                    </div>
                </div>

                <div class="row margin_phone">
                    <div class="col-lg-4 d-flex-column text-center">
                        <div class="paso">
                            <img src="{{ asset('imagenes/icon/Icon-num2.svg') }}">
                            <h3>Publicar una carga.</h3>
                            <p>
                                Busque la opción "Publicar nueva carga", y complete los detalles especificos de su carga, entre más especifica sea su descripcion más ofertas puede recibir. 
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img  class="cent-img" src="{{ asset('imagenes/icon/Linea_pasos.svg') }}">
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img class="img_pasos" src="{{ asset('imagenes/pasos/paso3.svg') }}" alt="Publicación de una carga">
                    </div>
                </div>

                <div class="row margin_phone">
                    <div class="col-lg-4 d-flex-column text-center">
                        <div class="paso">
                            <img src="{{ asset('imagenes/icon/Icon-num3.svg') }}">
                            <h3>Precio y opciones de oferta.</h3>
                            <p>
                                 Decide si desea ofrecer un precio propio o solicitar ofertas competitivas.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img  class="cent-img" src="{{ asset('imagenes/icon/Linea_pasos.svg') }}">
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img class="img_pasos" src="{{ asset('imagenes/pasos/paso2.svg') }}" alt="Solicitud de ofertas o precio propio">
                    </div>
                </div>

                <div class="row margin_phone">
                    <div class="col-lg-4 d-flex-column text-center">
                        <div class="paso">
                            <img src="{{ asset('imagenes/icon/Icon-num4.svg') }}">
                            <h3> Confirmación y publicación.</h3>
                                <p>
                                     Antes de publicar la carga, revisa cuidadosamente todos los detalles proporcionados. Una vez confirmada, la carga estará disponible para que los transportistas interesados la vean y ofrezcan sus servicios.
                                </p>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                        <img  class="cent-img" src="{{ asset('imagenes/icon/Linea_pasos.svg') }}">
                    </div>

                    <div class="col-lg-4 d-flex-column text-center">
                         <img class="img_pasos" src="{{ asset('imagenes/pasos/paso4.svg') }}" alt="Confirmación de su publicación">
                    </div>
                </div>


            </div>
            
        </div>
    </section>

<!-- Beneficios-->
    <section class="justify-content-center align-items-center separador_seccion">
        <div class="container">
        <h2 class="text-center margen_card text_h1">Beneficios</h2>
      
                <div class="row justify-content-center marg_bottom">
                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben1.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Comunicación eficiente en un solo lugar.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben2.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Mayor red de transportistas.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben3.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Cliente final informado.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben4.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Notificaciones automáticas.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben5.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Envía mercancías con unos cuantos clics.</h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben6.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Transparencia de la información.</h3>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben7.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Servicio rápido, dinámico y fácil.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben8.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Rastreo 24/7 en tiempo real.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 d-flex-column text-center">
                        <div class="card">
                            <img src="{{ asset('imagenes/icon/beneficios/ben9.svg') }}" class="card-img-top img_ben">
                            <div class="card-body">
                                <h3 class="card-title">Menos contaminación.</h3>
                            </div>
                        </div>
                    </div>


                </div>
        </div>
    </section>
<!-- Banners-->
    <section class=" fondo_emint justify-content-center align-items-center separador_seccion" id="Banners_carrusel">
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('imagenes/banners/carrusel1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('imagenes/banners/carrusel2.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </section>
<!-- Contacto-->
    <section class="justify-content-center align-items-center separador_seccion fondo_mapa" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex-column">
                    <div class="conten">
                        <h2 class="text_contac">Contactanos</h2>
                      
                        <script data-b24-form="inline/10/f6zo64" data-skip-moving="true">
                            (function(w,d,u){
                            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                            })(window,document,'https://cdn.bitrix24.mx/b25851517/crm/form/loader_10.js');
                        </script>
                    </div>
                </div> 

                <div class="col-lg-6 d-flex-column">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.4389515473963!2d-96.124550624921!3d19.1760209820493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3413966b7c705%3A0x92452f3538f71cf7!2sTrapape%20S.A.P.I%20de%20C.V.!5e0!3m2!1ses!2smx!4v1686685605586!5m2!1ses!2smx" width="100%" height="755" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapa"></iframe>
                </div> 
                
            </div>
        </div>
    </section>

    

    </main>

@endsection