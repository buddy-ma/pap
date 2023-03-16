
<style>
    h1{
        color: #383838;
        margin: 0px;
        font-size: 46px;
    }
    h3{
        margin: 0;
        font-size: 28px;
        font-family: 'Poppins', sans-serif;
        color: #383838;
        font-style: normal;
        font-weight: 400;
        line-height: 1.2;
    }
    p{
        margin: 0px;
        font-weight: normal;
        line-height: 24px;
        color: #3e3e3e;
        font-family: 'Poppins', sans-serif;
    }
    hr{
        padding: 0px;
        border-bottom: 1px solid #eceff8;
        border-top: 0px;
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }
    button{
        outline: none !important;
        border: none;
        color: #686868;
        border-radius: 0;
        text-transform: none;
    }
    a{
        outline: medium none;
        margin: 0px;
        touch-action: manipulation;
        padding: 0px;
        box-sizing: border-box;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: buttontext;
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        text-align: center;
        cursor: default;
        font: 400 13.3333px Arial;
    }
</style>

<div class="col-md-12 col-12 col-lg-12" style="margin-top: 100px; text-align: center">
    <img src="{{ asset('assets/images/logo/logo.png') }}" style="margin-bottom: 20px"><br>
    <div style="border: 3px solid #000; padding: 10px 30px; display: inline-block">
        <h3> {{ $details['title'] }} </h3>
    </div>
    <hr style="background: #aaa; margin: 40px 0 30px">
    <h1 style="font-family: quicksand; letter-spacing: 1px; font-weight: 600; margin-top: 0">{{ $details['title'] }}</h1>
    <p style="font-size: 16px; padding: 10px 100px">{{ $details['body'] }}</p>
</div>

