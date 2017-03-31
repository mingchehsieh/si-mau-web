<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>世茂科技股份有限公司 - @yield('title')</title>
        <link rel="stylesheet" href="css/app.css">
        <style>
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

            header {
                height: 50px;
                background: #434343;
                line-height: 50px;
                padding: 0 30px;
            }
            header>div {
                max-width: 1100px;
                margin: 0 auto;
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
                background: #FFF;
                line-height: 70px;
                padding: 0 30px;
            }
            nav>div {
                max-width: 1100px;
                margin: 0 auto;
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
                z-index: 9999;
            }
            .float-left {
                float:left;
            }
            .float-right {
                float:right;
            }
            footer {
                padding: 30px;
            }
            footer>div {
                max-width: 1100px;
                margin: 0 auto;
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
            }
            .copyright {
                padding-top: 60px;
                text-align: right;
            }
        </style>

</head>
<body>
    <div class="header-fixed">
        <header>
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
        <nav>
            <div>
                <span class="float-left">
                    <img src="images/logo.gif">
                </span>
                <span class="float-right">
                    <ul class="menu">
                        <li><a>{{ __('static.news') }}</a></li>
                        <li><a>{{ __('static.product') }}</a></li>
                        <li><a>{{ __('static.about') }}</a></li>
                        <li><a>{{ __('static.contact_us') }}</a></li>
                        <li>
                            <input class="search-input" type="text" placeholder="{{ __('static.search') }}">
                            <img alt="" src="images/search.png">
                        </li>
                    </ul>
                </span>
            </div>

        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <footer>
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
</body>
</html>
