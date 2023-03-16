@extends('layouts.app')
@section('css')
    <style>
        .slider-text h6{
            font-size: 30px;
            color: #bfa6f9;
        }
        .forma{
            padding: 0px 70px;
        }
        .forma h6{
            text-align: center;
            font-size: 27px;
            font-family: montserrat;
            color: #32185d;
            font-weight: 900;
            padding: 30px 0 0px;
        }
        .forma p{
            text-align: center;
            padding: 0 20px;
        }
        .forma .register-area{
            background: #fff;
            padding: 30px;
        }
        .first-form input{
            height: 50px;
            background: #f6f6f6;
            border: 1px solid #ddd;
            padding-left: 20px;
            margin-bottom: 20px;
            border-radius: 3px;
            box-shadow: none;
        }
        .first-form select{
            height: 50px;
            background: #f6f6f6;
            border: 1px solid #ddd;
            padding-left: 20px;
            margin-bottom: 20px;
            border-radius: 3px;
            box-shadow: none;
        }
        .button-box .default-btn {
            background: #8055c7 none repeat scroll 0 0;
            border: 1px solid #ddd;
            color: #ddd;
            height: 50px;
            width: 100%;
            font-size: 14px;
            line-height: 1;
            margin-top: 0;
            padding: 0;
            transition: all 0.3s ease 0s;
            border-radius: 3px;
        }
        .button-box .default-btn:hover{
            background: #32185d none repeat scroll 0 0;
        }
        .section-title-8 h2, .single-overview h4{
            color: #fff;
        }
        section-title-8 p, .single-overview p{
            color: #ddd;
        }
    </style>
@endsection
@section('content')

<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/bg.png)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Explore Offers</h2>
            <ul>
                <li><a href="{{ url('/') }}">home</a></li>
                <li> Explore Offers </li>
            </ul>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection