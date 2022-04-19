@extends('front.layout.master')

@section("content")
            <div class="cart-container">
                <div class="cart-title">
                    <h2>Cursos en tu carrito:</h2>
                </div>    
                <div class="cart-course">
                    <div class="cart-course-image"><img src="{{Storage::url('bachata.png')}}"></div>
                    <div class="cart-course-description">
                        <div class="cart-price-container">
                            <p>CURSO INICIO BACHATA</p>
                            <div class="cart-course-price">
                                <div class="cart-unitary-price">€36.00/mes</div>
                                <div class="product-order-reservation">
                                    <p>Plazas:</p>
                                    <div id="reservation-button">
                                        <button id="plus">+</button>
                                        <input id="reservation-quantity" type="text" value="1" readonly="readonly"></input>
                                        <button id="minus">-</button>
                                    </div>
                                </div>
                                <div class="subtotal">Subtotal: €36.00</div>
                            </div>
                        </div>
                        <div class="cart-remove"><button>Remove</button></div>
                    </div>
                </div>
                <button class="slider-form-button"><a href="/checkout">CHECK-OUT</a></button>
            </div>
@endsection