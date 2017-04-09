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
    .contact {

        overflow: auto;
        zoom: 1;
        padding: 85px 175px;
    }
    .contact h4 {
        margin-top: 5px;
    }
    .about {
        overflow: auto;
        zoom: 1;
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
    .about p {
        padding-top:10px;
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
