@extends('layouts.front')

@section('title', __('static.about'))

@section('style')
    @parent
    .about-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .about-img {
        margin-right: 30px;
    }
    .about {
        overflow: auto;
    }
    .about p {
        padding-top:10px;
    }
    .contact {
        padding: 85px 175px;
        overflow: auto;
    }
    .contact h4 {
        margin-top: 5px;
    }
    .contact-button {
        display: block;
        color: #FFF;
        font-size: 18px;
        background: #00A7C1;
        padding: 18px 60px;
    }
    .contact-button:hover {
        background: #008299;
        text-decoration: none;
        color: #FFF;
    }
    @media screen and (max-width: 1199px) {
        .child-fixed-width-1100 {
            padding: 0;
        }
        .about-header {
            margin: 20px auto 0 30px;
        }
        .about-img {
            margin: 28px 0;
            width: 100%;
        }
        .about p {
            padding: 0 30px;
        }
        .contact {
            padding: 20px 0;
            text-align: center;
        }
        .contact div {
            float:none;
        }
        .contact-button {
            margin: 30px auto;
            width: 200px;
            height: 60px;
        }
    }
@endsection

@section('content')
    <div class="child-fixed-width-1100">
        <div>
            <h3 class="about-header">{{ __('static.about') }}</h3>
            <div class="about">
                <img src="/images/about.jpg" alt="Office" class="float-left about-img">
                <p>{!! __('static.about_text') !!}</p>
            </div>
            <div class="contact">
                <div class="float-left">
                    <h4>您有更多想法嗎？請聯絡我們</h4>
                    如果您有更多問題，歡迎聯繫我們。
                </div>
                <div class="float-right">
                <a class="contact-button" href="/contact">{{ __('static.contact_us') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection
