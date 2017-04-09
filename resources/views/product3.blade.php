@extends('layouts.front')

@section('title', __('static.product'))

@section('style')
    @parent

    .product-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .product {
        padding: 15px 18px 40px 18px;
        overflow: auto;
        zoom: 1;
    }
    .product-img {
        margin:0 50px;
        float: left;
    }
    .product-content {
        float: left;
        overflow: auto;
        zoom: 1;
    }
    .product-content p {
        max-width: 470px;
    }
    .product-content h4 {
        margin-bottom: 32px;
    }
    .active {
        padding-top: 43px;
    }
    .active img {
        margin-bottom: 5px;
    }
    .product-contact {
        display: block;
        width: 43px;
        margin-top: 15px;
        padding: 10px 0;
        line-height: 19px;
        background: #00A7C1;
        color: #FFF;
        border-radius: 10px;
    }
    .product-contact:hover {
        color: #FFF;
        text-decoration: none;
        background: #008299;
    }
@endsection

@section('content')
    <div class="fixed-width-1100">
        <h3 class="product-header">{{ __('static.product') }} ＞ 稀土金屬 > iPhone</h3>
        <div class="product">
            <img src="aa" height="300px" width="300px" class="product-img">
            <div class="product-content">
                <h4>稀土金屬</h4>
                <p>
                    介紹：<br>
                    的 style 為 word-wrap ，透過這個屬性可以指定換行的方式，並可以強制文字不換行。而 CSS 還有個空白長度的設定，透過 white-space 可以移除連續空白。
                </p>
                <p>
                    用途：<br>
                    XXXXXXXXXX
                </p>
            </div>
            <div class="active float-right text-center">
                <a href="aa"><img src="/images/pdf-icon.png"></a>
                <a href="aa" class="product-contact"><img src="/images/product-contact.png">立<br>即<br>詢<br>價</a>
            </div>
        </div>
    </div>
@endsection
