<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/favicon.png">
		<title>DANCE REVOLUTION</title>
		<meta name="description" content="Invierte en tu salud! Aprende a bailar y experimenta un cambio radical en tu vida, tanto físico, psicológico como espiritual. Encuentra tu estilo ahora!">
        <meta name="keywords" 	 content="baile, salón, danza, latina, sensualidad, clases, salsa, bachata, kizomba, tango, Palma, Mallorca">

        <link href="{{mix('front/desktop/css/app.css') }}" rel="stylesheet">
        <link href="{{mix('front/desktop/css/app-mobile.css') }}" rel="stylesheet">

    </head>

    <body>

        <header>
            <div class="header-container">
                <div class="header-2-col">
                    <div class="logo">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M13 11V7.5L15.2 5.29C16 4.5 16.15 3.24 15.59 2.26C15.14 1.47 14.32 1 13.45 1C13.24 1 13 1.03 12.81 1.09C11.73 1.38 11 2.38 11 3.5V6.74L7.86 9.91C6.2 11.6 5.7 14.13 6.61 16.34C7.38 18.24 9.06 19.55 11 19.89V20.5C11 20.76 10.77 21 10.5 21H9V23H10.5C11.85 23 13 21.89 13 20.5V20C15.03 20 17.16 18.08 17.16 15.25C17.16 12.95 15.24 11 13 11M13 3.5C13 3.27 13.11 3.09 13.32 3.03C13.54 2.97 13.77 3.06 13.88 3.26C14 3.46 13.96 3.71 13.8 3.87L13 4.73V3.5M11 11.5C10.03 12.14 9.3 13.24 9.04 14.26L11 14.78V17.83C9.87 17.53 8.9 16.71 8.43 15.57C7.84 14.11 8.16 12.45 9.26 11.33L11 9.5V11.5M13 18V12.94C14.17 12.94 15.18 14.04 15.18 15.25C15.18 17 13.91 18 13 18Z" />
                        </svg>
                    </div>  
                    <div class="title">
                        <h1>DANCE REVOLUTION</h1>
                    </div>
                </div>
                <div id="hamburguer">
                    <svg>
                        <path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M6,7H18V9H6V7M6,11H18V13H6V11M6,15H18V17H6V15Z" />
                    </svg>
                </div>
                <div class="menu" id="menubar">
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="contact.html">Contacto</a></li>
                        <li><a href="products.html">Cursos</a></li>
                        <li><a href="cart.html">Carrito</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main>
            <div class="product-container">
                <div class="product-course-container">
                    <div class="product-course">
                        <div class="product-course-image"><img src="images/bachata.png" alt="bachata" data-tabtrigger="bachata" class="tab"></div>
                        <div class="product-course-gallery">
                            <img src="/images/bachata8.jpg" alt="el8" data-tabtrigger="eight" class="tab">
                            <img src="/images/bachata-cambre.jpg" alt="cambré" data-tabtrigger="cambre" class="tab">
                            <img src="/images/bachata-slide.jpg" alt="slide" data-tabtrigger="slide" class="tab">
                            <img src="/images/bachata-star.jpg" alt="estrella" data-tabtrigger="star" class="tab">
                        </div>
                    </div>
                    <div class="product-course-description is_active" data-tabcontent="bachata">
                        <p>La bachata es un género musical bailable originario de la República Dominicana, dentro de lo que se denomina folclore urbano. Está considerado como un derivado del bolero rítmico, con influencias de otros estilos como el son cubano y el merengue.</p>
                    </div>
                    <div class="product-course-description" data-tabcontent="eight">
                        <p>"El 8": preciosa figura de tango que consiste en un ir y venir elegante de la dama en forma de zig-zag frente al caballero.</p>
                    </div>
                    <div class="product-course-description" data-tabcontent="cambre">
                        <p>Cambré es un término francés que se usa en danza para nombrar el movimiento en el que flexionamos el torso hacia atrás, arqueando la parte superior de la espalda.</p>
                    </div>
                    <div class="product-course-description" data-tabcontent="slide">
                        <p>Como su propio nombre indica, se trata de un deslizamiento. Se abre una pierna y la otra se junta arrastrándose ligeramente.</p>
                    </div>
                    <div class="product-course-description" data-tabcontent="star">
                        <p>Estrella consiste en un bamboleo diagonal con cambios de dirección abruptos dibujando puntas de estrella.</p>
                    </div>
                </div>
                <div class="product-order-container">
                    <div class="product-order-title"><p>CURSO INICIO BACHATA</p></div>
                    <div class="product-order-price"><p>PRECIO: 9€/HORA</p></div>
                    <div class="product-order-reservation">
                        <p>Plazas:</p>
                        <div id="reservation-button">
                            <button id="plus">+</button>
                            <input id="reservation-quantity" type="text" value="1" readonly="readonly"></input>
                            <button id="minus">-</button>
                        </div>
                    </div>
                    <button class="slider-form-button"><a href="cart.html">RESERVAR</a></button>
                </div>
            </div>
        </main>

        <footer><!--final de página-->
            <div class="footer-element copyright">
                <p>@2022</p><!--párrafos, texto-->
            </div>
            <div class="footer-element author">
                <a href=""><p>Ulises</p></a><!--enlace web con su texto hipervinculado-->
            </div>
        </footer>
            
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script><!--apuntamos a librería-->
        <script>
            WebFont.load({
                google: {
                    families: ['Ubuntu:700,700i', 'Ubuntu+Condensed:400']
                }
            });        
        </script><!--cargamos fuente tipográfica de Ubuntu-->

        <script src="{{mix('front/desktop/js/app.js') }}"></script>
        <script src="{{mix('front/desktop/js/app-mobile.js') }}"></script>


    </body>
</html>