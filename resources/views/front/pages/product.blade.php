@extends('front.layout.master')

@section("content")
            <div class="product-container">
                <div class="product-course-container">
                    <div class="product-course">
                        <div class="product-course-image"><img src="{{Storage::url('bachata.png')}}" alt="bachata" data-tabtrigger="bachata" class="tab"></div>
                        <div class="product-course-gallery">
                            <img src="{{Storage::url('bachata8.jpg')}}" alt="el8" data-tabtrigger="eight" class="tab">
                            <img src="{{Storage::url('bachata-cambre.jpg')}}" alt="cambré" data-tabtrigger="cambre" class="tab">
                            <img src="{{Storage::url('bachata-slide.jpg')}}" alt="slide" data-tabtrigger="slide" class="tab">
                            <img src="{{Storage::url('bachata-star.jpg')}}" alt="estrella" data-tabtrigger="star" class="tab">
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
                    <button class="slider-form-button"><a href="/carrito">RESERVAR</a></button>
                </div>
            </div>
@endsection