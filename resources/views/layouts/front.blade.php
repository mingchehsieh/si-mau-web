<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>世茂科技股份有限公司 - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
        <style>
            @section('style')
                body {
                    padding-top: 120px;
                    background: #FFF;
                    font-size: 14px;
                    letter-spacing: 1px;
                }
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                }
                li {
                    float: left;
                }

                .child-fixed-width-1100 {
                    padding: 0 30px;
                }
                .child-fixed-width-1100>div, .fixed-width-1100 {
                    max-width: 1100px;
                    margin: 0 auto;
                }
                header {
                    height: 50px;
                    /* background: #434343; */
                    background: rgba(20, 20, 20, 0.8);
                    line-height: 50px;
                }
                header>div {
                    font-size: 13px;
                    color: #FFF;
                    overflow: auto;
                    zoom: 1;
                }
                .lang li {
                    padding-left: 24px;
                }
                .lang li a {
                    display: block;
                    color: white;
                    text-decoration: none;
                }
                nav {
                    height: 70px;
                    /* background: #FFF; */
                    background: rgba(255, 255, 255, 0.8);
                    line-height: 70px;
                }
                nav>div {
                    overflow: auto;
                    zoom: 1;
                }
                .menu li a {
                    display: block;
                    color: black;
                    text-align: center;
                    padding: 0 26px;
                    text-decoration: none;
                }
                .search-input {
                    height: 20px;
                    width: 125px;
                    margin: auto 7px auto 26px;
                    padding: 0 7px;
                    border: 1px solid gray;
                    border-radius: 10px;
                    line-height: 20px;
                }
                .header-fixed {
                    width: 100%;
                    position: fixed;
                    top: 0;
                    z-index: 5;
                }
                .float-left {
                    float:left;
                }
                .float-right {
                    float:right;
                }
                footer {
                    margin-top: 18px;
                    padding: 30px;
                }
                footer>div {
                    padding-left: 40px;
                    font-size: 13px;
                    color: #666;
                    overflow: auto;
                    zoom: 1;
                }
                footer>div div {
                    padding-left: 84px;
                }
                .content {
                    background-color: #E5E5E5;
                    overflow: auto;
                    zoom: 1;
                }
                .copyright {
                    padding-top: 60px;
                    text-align: right;
                }
                .id-button-p,
                .id-button-d,
                .id-button-w {
                    display: inline-block;
                    border: 0;
                    padding: 0 50px;
                    width: auto;
                    height: 40px;
                    line-height: 40px;
                    font-size: 17px;
                    margin-left: 0;
                    margin-right: 0;
                }
                .id-button-p:hover,
                .id-button-p:hover,
                .id-button-p:hover {
                    text-decoration: none;
                }
                .id-button-p {
                    background: #00A7C1;
                    color: #FFF;
                }
                .id-button-p:hover {
                    background: #008299;
                    color: #FFF;
                }
                .id-button-w {
                    border: 1px solid #ADADAD;
                    background: #FFF;
                    color: #000;
                }
                .id-button-w:hover {
                    border: 1px solid #ADADAD;
                    background: #E6E6E6;
                    color: #000;
                }
                .id-button-d {
                    background: #D9534F;
                    color: #FFF;
                }
                .id-button-d:hover {
                    background: #C9302C;
                    color: #FFF;
                }
            @show
        </style>
</head>
<body>
    @yield('modal')
    <div class="header-fixed">
        <header class="child-fixed-width-1100">
            <div>
                <span class="float-left">
                    {{ __('static.header_tel') }}
                </span>
                <span class="float-right">
                    <ul class="lang">
                        <li><a href="{{ url('/lang/set/zh-TW') }}">繁</a></li>
                        <li><a href="{{ url('/lang/set/zh-CN') }}">簡</a></li>
                        <li><a href="{{ url('/lang/set/ja') }}">日文</a></li>
                        <li><a href="{{ url('/lang/set/en') }}">English</a></li>
                    </ul>
                </span>
            </div>
        </header>
        <nav class="child-fixed-width-1100">
            <div>
                <span class="float-left">
                    <a href="/"><img src="/images/logo.png" alt="Ximos Logo"></a>
                </span>
                <span class="float-right">
                    <ul class="menu">
                        <li><a href="/news">{{ __('static.news') }}</a></li>
                        <li><a href="/product">{{ __('static.product') }}</a></li>
                        <li><a href="/about">{{ __('static.about') }}</a></li>
                        <li><a href="/contact">{{ __('static.contact_us') }}</a></li>
                        <li>
                            <input class="search-input" type="text" placeholder="{{ __('static.search') }}">
                            <img alt="" src="/images/search.png">
                        </li>
                    </ul>
                </span>
            </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <footer class="child-fixed-width-1100">
        <div>
            <div class="float-left">
                <h4>{{ __('static.address_header') }}</h4>
                {{ __('static.address') }}<br>
                {{ __('static.station') }}<br>
                {{ __('static.parking_space') }}
            </div>
            <div class="float-left">
                <h4>{{ __('static.contact_us') }}</h4>
                {{ __('static.tel') }}<br>
                {{ __('static.fax') }}<br>
                {{ __('static.open') }}<br>
                {{ __('static.closed') }}
            </div>
        </div>
        <div class="copyright">© 2017 世茂科技股份有限公司 All Rights Reserved.</div>
    </footer>
    @yield('js')
</body>
</html>
