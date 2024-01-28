@extends('layouts.app')
@section('content')


<div class="main-banner">
    <div class="container">

        <div class=" text-center">
            <h1 style="font-size: 45px; font-weight: bolder; width: auto; border: solid 2px rgb(235, 213, 213);"
                class=" badge bg-info rounded-pill  text-light">CHECKOUT</h1>
        </div>

        <div class="section most-played">
            
            <div class="container">
                <h1 style="font-weight: bold;" class="text-center">Thanks for buying from us ;)</h1>
                <div class="row">

                    <div class="p-4">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-md-8 col-sm-6 col-xs-12">
                                    <div class="p-2">
                                        <div class="mt-5">
                                            <div>
                                                <label class="d-block" for="cardNumber"><strong>Card
                                                        Number</strong></label>
                                                <small class="text-secondary">Enter the 16 - digit number printed on the
                                                    card </small>
                                                <div class="position-relative">
                                                    <input type="text" id="cardNumber" class="form-control mt-3"><span
                                                        id="cardType"></span>
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <label class="d-block" for="cvv"><strong>CVV
                                                                Number</strong></label>
                                                        <small class="text-secondary">Enter the 3 or 4 digit number
                                                            printed at back of the
                                                            card </small>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <input type="text" id="cvv" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <label class="d-block" for="expiry_mm"><strong>Expiry
                                                                Date</strong></label>
                                                        <small class="text-secondary">Enter the expiration date of the
                                                            card </small>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="d-flex align-items-center">
                                                            <input type="text" id="expiry_mm" class="form-control">
                                                            <span class="fs-4 mx-3">/</span>
                                                            <input type="text" id="expiry_yy" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <label class="d-block" for="postal"><strong>Postal (Zip)
                                                                Code</strong></label>
                                                        <small class="text-secondary">Enter the postal / Zip code of
                                                            billing address
                                                        </small>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="d-flex align-items-center">
                                                            <input type="text" id="postal" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-5 w-100">Pay Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">

                                    <div style="background:#eff4f8;border-radius:16px;">
                                        <div class="p-4">
                                            <table class="w-100" id="cartTable">
                                            @foreach($cartItems as $cartItem)
                                                <tr>
                                                    <td><span class="text-secondary">Product</span></td>
                                                    <td><strong>{{ $cartItem->item->itemname }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="text-secondary">Tax (10%)</span></td>
                                                    <td><strong>12.00</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="text-secondary">Total</span></td>
                                                    <td><strong class="text-primary"> {{ $cartItem->item->price }}
                                                            SR</strong></td>
                                                </tr>
                                                @php
                                                $total += 12 + $cartItem->item->price;
                                                @endphp

                                            @endforeach
                                            </table>
                                            <hr>
                                        </div>
                                        <div id="ticket">
                                            <div class="d-flex p-4 align-items-center justify-content-between">
                                                <div>
                                                    <small class="text-secondary">You Have to Pay</small>
                                                    <div class="fs-2"><strong>{{$total}} SR</strong></div>
                                                </div>
                                                <div>
                                                    <img src="/static_files/svgs/shop.svg" width="48" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<footer>
    <div class="container ">
        <div class=" col-lg-12">
            <p>Copyright © 2048 Mohammed Alghumayti. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

@endsection