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

<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>International Services</h2>
            <ul>
                <li><a href="{{url('/home')}}">home</a></li>
                <li> International Services </li>
            </ul>
        </div>
    </div>
</div>

<div class="best-product-area mt-100 pb-15">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="section-title-3 text-center mb-40">
                <h2>Submit An Order</h2>
                <p>Feel Free To fill that form and our team will contact you as soon as possible</p>
            </div>

            <form action="#">
                <div class="checkbox-form">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Full Name <span class="required">*</span></label>
                                <input type="text" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Company Name</label>
                                <input type="text" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="country-select">
                                <label>Country <span class="required">*</span></label>
                                <select name="country" id="Country">
                                    <option value="Germany" selected>Germany</option>
                                    <option value="Germany">England</option>
                                    <option value="Germany">France</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="country-select">
                                <label>City <span class="required">*</span></label>
                                <select name="country" id="Country">
                                    <option value="Germany" selected>Dossuldurf</option>
                                    <option value="Germany">Agadir</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Post Code</label>
                                <input type="text" placeholder="Post Code" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" placeholder="Street address" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Email Address <span class="required">*</span></label>
                                <input type="email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Phone  <span class="required">*</span></label>
                                <input type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="different-address">
                        <div class="ship-different-title">
                            <h3>
                                <label>Ship to a different address?</label>
                                <input id="ship-box" type="checkbox" />
                            </h3>
                        </div>
                        <div id="ship-box-info" class="row">
                            <div class="col-md-12">
                                <div class="country-select">
                                    <label>Country <span class="required">*</span></label>
                                    <select>
                                      <option value="volvo">bangladesh</option>
                                      <option value="saab">Algeria</option>
                                      <option value="mercedes">Afghanistan</option>
                                      <option value="audi">Ghana</option>
                                      <option value="audi2">Albania</option>
                                      <option value="audi3">Bahrain</option>
                                      <option value="audi4">Colombia</option>
                                      <option value="audi5">Dominican Republic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" placeholder="Town / City" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip" />
                                </div>
                            </div>
                        </div>
                        <div class="order-notes">
                            <div class="checkout-form-list mrg-nn">
                                <label>Order Notes</label>
                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
@section('js')
@endsection
