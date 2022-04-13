@extends('front.layout.master')

@section("content")
            <div class="desktop-2-col mobile-2-col">
                <div class="checkout-billing-container">
                    <div class="checkout-billing-title"><p>DATOS DE FACTURA:</p></div>
                    <form class="checkout-form-container" id="crud__user-form" action="/users/create" autocomplete="off">
                        <div class="checkout-form-input">
                            <div class="checkout-form-item">
                                <input type="text" name="name" placeholder="Escribe tu nombre">
                            </div>
                            <div class="checkout-form-item">
                                <input type="text" name="name" placeholder="Escribe tu apellido">
                            </div>
                            <div class="checkout-form-item">
                                <input type="text" name="name" placeholder="Escribe tu dirección"> 
                            </div>
                            <div class="checkout-form-item">
                                <input type="number" name="name" placeholder="Escribe tu CP">
                            </div>
                            <div class="checkout-form-item">
                                <input type="text" name="name" placeholder="Escribe tu email"> 
                            </div>
                            <div class="checkout-form-item">
                                <input type="number" name="name" placeholder="Escribe tu teléfono">
                            </div>
                            <div class="checkout-form-item">
                                <input type="text" name="name" placeholder="Escribe número de tarjeta débito/crédito/cta bancaria" required>
                            </div>
                            <div class="checkout-form-pay">
                                <input type="radio" name="radAnswer"><p class="title">Débito</p>
                                <input type="radio" name="radAnswer"><p class="title">Crédito</p>
                                <input type="radio" name="radAnswer"><p class="title">Cta.Bancaria</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="checkout-order-container">
                    <div class="checkout-billing-title"><p>TU RESERVA:</p></div>
                    <div class="checkout-order">
                        <table class="checkout-order-table">
                            <tr>
                                <th>CLASE</th>
                                <th>SUBTOTAL</th>
                            </tr>
                            <tr>
                                <td>BACHATA INICIO x4 (MES)</td>
                                <td>€36.00</td>
                            </tr>
                            <tr>
                                <td>IVA (21%)</td>
                                <td>€7.56</td>
                            </tr>
                            <tr>
                                <td>TOTAL</td>
                                <td>€43.56</td>
                            </tr>
                        </table>
                        <div class="checkout-order-reservation">
                            <p>Plazas:</p>
                            <div id="reservation-button">
                                <button id="plus">+</button>
                                <input id="reservation-quantity" type="text" value="1" readonly="readonly"></input>
                                <button id="minus">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-total">
                        <p>TOTAL RESERVA:</p>
                        <div class="pay-button">
                            <input id="total-quantity" type="text" value="€43.56" readonly="readonly">
                        </div>
                    </div>
                    <button class="slider-form-button"><a href="">PAGAR</a></button>
                </div>
            </div>
@endsection