<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>世茂科技股份有限公司管理後台 - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
        <style>
            @section('style')
                body {
                    padding-top: 70px;
                    background: #E5E5E5;
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
                .child-fixed-width-1100>div,
                .fixed-width-1100 {
                    max-width: 1100px;
                    margin: 0 auto;
                }
                nav {
                    height: 70px;
                    background: #FFF;
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
                    z-index: 9999;
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
                .copyright {
                    padding-top: 60px;
                    text-align: right;
                }
            @show
        </style>

</head>
<body>
    <div class="header-fixed">
        <nav class="child-fixed-width-1100">
            <div>
                <span class="float-left">
                    <a href="/"><img src="/images/logo.gif" alt="Ximos Logo"></a>
                </span>
                <span class="float-right">
                    <ul class="menu">
                        <li><a href="/news">最新消息</a></li>
                        <li><a href="/product">產品類別</a></li>
                        <li><a href="/product">產品</a></li>
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
        <div class="copyright">© 2017 世茂科技股份有限公司 All Rights Reserved.</div>
    </footer>
</body>
</html>
