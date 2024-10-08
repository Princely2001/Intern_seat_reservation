@extends('layouts.app')

@section('content')
<section>
    <div class='container'>
        <div class="card mx-auto col-md-5 col-8 mt-3 p-0">
            <img class='mx-auto pic'
            src="{{ asset('Image11.jpg') }}"/>
            <div class="card-title d-flex px-4">
                <p class="item text-muted">Book your<label class="register">&reg;</label> seat</p>
                <p>$200</p>
            </div>
            <div class="card-body">
                <p class="text-muted">Your payment details</p>
                <div class="numbr mb-3">
                    <i class=" col-1 fas fa-credit-card text-muted p-0"></i>
                    <input class="col-10 p-0" type="text" placeholder="Card Number">
                </div>
                <div class="line2 col-lg-12 col-12 mb-4">
                    <i class="col-1 far fa-calendar-minus text-muted p-0"></i>
                    <input class="cal col-5 p-0" type="text" placeholder="MM/YY">
                    <i class="col-1 fas fa-lock text-muted"></i>
                    <input class="cvc col-5 p-0" type="text" placeholder="CVC">
                </div>
            </div>
            <div class="footer text-center p-0">
                <div class="col-lg-12 col-12 p-0">
                    <p class="order">Pay Now</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@push('css')
<style>
head,
        body {
            background-color:#333;
        }

        .container{
            margin-top:40px;
            margin-bottom:40px;
        }

        img {
            width: 100%;
        }

        .card-title {
            justify-content: space-between;
            margin-top: 25px;
        }

        .register {
            font-size: 10px;
            position: relative;
            bottom: 5px;
        }

        .cvc {
            width: 2.5em;
            position: absolute;
        }

        input {
            border: none;
            padding-left: 4px;
            background-color: #f7f1f1;
            font-size: 15px;
        }

        .card-body {
            background-color: #f7f1f1;
        }

        .footer {
            background-color: #00BCD4;
            color: white;
        }

        .footer:hover {
            cursor: pointer;
            background-color: #0097A7;
        }

        .numbr {
            border-bottom: 1px solid #c1bcbc;
            padding-bottom: 8px;
        }

        .line2 {
            border-bottom: 1px solid #c1bcbc;
            padding-bottom: 8px;
            padding-left: 0px;
        }

        input.focus,
        input:focus {
            outline: 0;
            box-shadow: none !important;
        }

        .numbr.numbr.hover,
        .numbr:hover {
            border-bottom: 1px solid aqua;
        }

        .line2.hover,
        .line2:hover {
            border-bottom: 1px solid aqua;
        }

        .fa-lock {
            margin-right: 10px;
        }

        .order {
            margin-top: 10px;
        }
</style>
@endpush
