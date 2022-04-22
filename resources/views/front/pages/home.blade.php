@extends('front.layout.master')

@section("content")
    <div class="slider">
        <div class="slider-image">
            <img src="{{Storage::url('background-dancers.jpg')}}" alt="tango">
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
                    <img src="{{Storage::url('salsa.jpg')}}" alt="salsa">
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
                    <img src="{{Storage::url('bachata.jpg')}}" alt="bachata">
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
                    <img src="{{Storage::url('kizomba.jpg')}}" alt="kizomba">
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
                    <img src="{{Storage::url('tango.jpg')}}" alt="tango">
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
            <img src="{{Storage::url('new-dancers.jpg')}}" alt="new-dancers">
        </div>
    </div>
@endsection