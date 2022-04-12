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
            <div class="slider">
                <div class="slider-image">
                    <img src="images/background-dancers.jpg" alt="tango">
                </div>
                <div class="slider-form">
                    <form class="crud__admin-form" id="crud__user-form" action="/users/create" autocomplete="off"> 
                        <div class="slider-form-element">
                            <div class="slider-form-label">
                                <label for="name">Inscríbete!</label>
                            </div>
                            <div class="slider-form-input">
                                <input type="text" name="name" placeholder="Escribe tu email">
                            </div>
                        </div>
                        <div class="slider-form-element">
                            <button class="slider-form-button">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="index-courses">
                <div class="index-courses-title">
                    <h2>ESTILOS POPULARES</h2>
                </div>
                <div class="desktop-col-4 mobile-col-4">    
                    <div class="index-course">
                        <div class="course-image">
                            <img src="images/salsa.jpg" alt="salsa">
                        </div>
                        <div class="course-title">
                            <h3>SALSA</h3>
                        </div>
                        <div class="course-description">
                            <p>La salsa es un género musical bailable resultante de la síntesis del son cubano y otros géneros de música caribeña y estadounidenses como el jazz y el blues.</p>
                        </div>
                    </div>

                    <div class="index-course">
                        <div class="course-image">
                            <img src="images/bachata.jpg" alt="bachata">
                        </div>
                        <div class="course-title">
                            <h3>BACHATA</h3>
                        </div>
                        <div class="course-description">
                            <p>La bachata es un género musical bailable originario de la República Dominicana, dentro de lo que se denomina folclore urbano. Está considerado como un derivado del bolero rítmico, con influencias de otros estilos como el son cubano y el merengue.</p>
                        </div>
                    </div>

                    <div class="index-course">
                        <div class="course-image">
                            <img src="images/kizomba.jpg" alt="kizomba">
                        </div>
                        <div class="course-title">
                            <h3>KIZOMBA</h3>
                        </div>
                        <div class="course-description">
                            <p>La kizomba es un género musical que tuvo su origen en Angola, excolonia portuguesa. A mediados de los años 70 - y con la presencia de militares cubanos en Angola, que llevaron el dulce zouk</p>
                        </div>
                    </div>

                    <div class="index-course">
                        <div class="course-image">
                            <img src="images/tango.jpg" alt="tango">
                        </div>
                        <div class="course-title">
                            <h3>TANGO</h3>
                        </div>
                        <div class="course-description">
                            <p>El tango es un género musical y una danza, característica de la región del Río de la Plata y su zona de influencia, pero principalmente de las ciudades de Buenos Aires (en Argentina) y Montevideo (en Uruguay).</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="index-news">
                <div class="index-news-info">
                    <p>Las definiciones que constituyen a la danza dependen de factores sociales, culturales, estéticos, artísticos y morales; así como también del rango de movimiento funcional hasta las técnicas virtuosas. Cada danza, independientemente del estilo, tiene algo en común: implica tener flexibilidad y movimiento del cuerpo, así como buena condición física. Existieron muchos tipos de bailes y géneros de danza, generalmente se clasifica a estos en tres grandes grupos:</p>
                    <p>- Las danzas populares o folclóricas. Son las que se basan en la transmisión de la cultura tradicional.</p>
                    <p>- Las danzas clásicas. Son producto heredado de tiempos antiguos, principalmente en el periodo clásico de la antigüedad medieval, pero que ha sufrido cambios a través del tiempo hasta llegar a nuestros días, como el ballet.</p>
                    <p>- Las danzas modernas. Son practicadas generalmente por jóvenes y conllevan todo un tipo de identidad social a través de la forma de entender la vida e incluso de vestir: como el Funky, break dance, el rock and roll.</p>
                </div>
                <div class="index-news-image">
                    <img src="images/new-dancers.jpg" alt="new-dancers">
                </div>
            </div>

        </main>

        <footer>
            <div class="footer-element copyright">
                <p>@2022</p>
            </div>
            <div class="footer-element author">
                <a href="">Ulises</a>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script><!--librería Google Webfont-->
        <script>
            WebFont.load({
                google: {
                    families: ['Ubuntu:700,700i', 'Ubuntu+Condensed:400']
                }
            });        
        </script><!--fuente tipográfica de Ubuntu-->
        
        <script src="{{mix('front/desktop/js/app.js') }}"></script>
        <script src="{{mix('front/desktop/js/app-mobile.js') }}"></script>

    </body>
</html>