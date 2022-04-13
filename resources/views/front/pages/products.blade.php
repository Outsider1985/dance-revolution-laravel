@extends('front.layout.master')

@section("content")
            <div class="products-container">
                <div class="products-aside">
                    <div class="products-categories">
                        <ul>
                            <li><p id="categories-title">CURSOS:</p></li>
                            <li><a href=""><p id="categories-selected">MALLORCA</p></a></li>
                            <li><a href=""><p>MENORCA</p></a></li>
                            <li><a href=""><p>IBIZA</p></a></li>
                            <li><a href=""><p>FORMENTERA</p></a></li>
                        </ul>
                    </div>
                </div>
                <div class="products-gallery">
                    <div class="gallery-header">
                        <div class="page"><p>Página 1 de 100</p></div>
                        <select class="selection">
                            <option value="select">(SELECCIONA)</option>
                            <option value="discount">OPORTUNIDADES</option>
                            <option value="most-demanded">MAS DEMANDADOS</option>
                            <option value="-+price">DE MENOS A MAS PRECIO</option>
                            <option value="+-price">DE MAS A MENOS PRECIO</option>
                        </select>
                    </div>
                    <div class="gallery-main">
                        <div class="desktop-col-3 mobile-col-3">
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('bachata.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO BACHATA</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('ballet.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO BALLET</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('flamenco.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO FLAMENCO</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-col-3 mobile-col-3">
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('kizomba.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO KIZOMBA</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('merengue.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO MERENGUE</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('salsa.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO SALSA</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-col-3 mobile-col-3">
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('sevillana.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO SEVILLANA</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('tango.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO TANGO</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>
                            <div class="products-course">
                                <div class="products-course-image"><img src="{{Storage::url('urban.png')}}"></div>
                                <div class="products-course-title"><p>CURSO INICIO URBAN</p></div>
                                <div class="products-course-price"><p>PRECIO: 9€/HORA</p></div>
                                <div class="products-course-button">
                                    <button class="slider-form-button"><a href="product.html">RESERVAR</a></button>
                                </div>
                            </div>            
                        </div>
                    </div>                   
                </div>
            </div>
@endsection