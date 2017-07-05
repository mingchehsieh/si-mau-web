@extends('layouts.front')

@section('title', __('static.home'))

@section('style')
    @parent
    .banner {
        height: 580px;
        background: url('/images/slide2.jpg') no-repeat top;
        padding-top: 309px;
    }
    .product-category {
        width: 744px;
        margin: 0 auto;
    }
    .product-category li {
        width:226px;
        height:226px;
        margin:0 11px;
        background-size: 100%;
    }
    @for($i = 1; $i <= 3; $i++)
        .category{{ $i }} {
            background: #FFF url('{{ empty($categories->where('home_col', $i)->first()->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$categories->where('home_col', $i)->first()->{'image:zh-TW'} }}') no-repeat center;
        }
    @endfor
    .product-category a {
        color: #FFF;
    }
    .product-category li div {
        width:100%;
        height:100%;
        background: rgba(0, 167, 193, 0.44);
        text-align:center;
        padding-top: 116px
    }
    .product-category li:hover {
        background-size: 110%;
    }
    .product-category li:hover div{
        background: transparent;
    }
    .product-category li:hover span{
        display: none;
    }
    .top-line {
        border-top: 1px solid #FFF;
        padding:10px 6px 0 6px;
    }
    .related-companies h4{
        margin: 0 auto 37px auto;
    }
    .related-companies-ul li {
        width:145px;
        height:153px;
        margin-right: 18px;
        background-size: 100%;
        font-weight: bold;
        -webkit-transition: 0.5s;
        overflow: hidden;
    }
    .related-companies-ul li:hover{
        -webkit-transform: scale(1.1);
    }
    .related-companies1>div {
        background: #FFF url('/images/logo-best.jpg') no-repeat center;
    }
    .related-companies2>div {
        background: #FFF url('/images/logo-khl.jpg') no-repeat center;
    }
    .related-companies3>div {
        background: #FFF url('/images/logo-woojin.jpg') no-repeat center;
    }
    .related-companies4>div {
        background: #FFF url('/images/logo-benq.jpg') no-repeat center;
    }
    .related-companies-ul a {
        color: transparent;
    }
    .related-companies-ul li:hover div{
        background: rgba(255, 255, 255, 0.8);
    }
    .related-companies-ul li:hover a {
        color: #000;
        text-decoration: none;
    }
    .related-companies-ul li div {
        width:100%;
        height:100%;
        text-align:center;
        line-height: 153px
    }

    @media screen and (max-width: 1199px) {
        body {
            padding-top: 0;
        }
        .banner {
            height: 100vh;
            background: url('/images/slide1.jpg') no-repeat center 120px;
            background-size: auto 100%;
        }
        .product-category {
            position: absolute;
            bottom: 8px;
            width: 100%;
            padding: 0 1.25vw;
        }
        .product-category li {
            width:31.6666vw;
            height:31.6666vw;
            margin:0 0.4166vw;
        }
        .product-category li div {
            padding-top: 47.6821%;
        }
        .top-line {
            border-top: 1px solid #FFF;
            padding-top: 4.6357%;
        }

        .related-companies h4{
            margin:30px auto 37px auto;
        }
        .related-companies-ul li {
            width: 17.5vw;
            height: 18.3333vw;
            margin:0 0.4166vw;
        }
        .related-companies-ul li div {
            width:100%;
            height:100%;
            text-align:center;
            line-height: 18.3333vw;
        }
        .map {
            clear: both;
            width: 100%;
            margin: 40px auto;
            text-align: center;
        }
        .map img {
            width: 68.3333%;
            height: auto;
        }

    }
    @media screen and (max-width: 1199px) and (min-height: 790px) {
        body {
            padding-top: 120px;
        }
        .banner {
            padding-top: 450px;
            height: 670px;
            background: url('/images/slide1.jpg') no-repeat center top;
            background-size: auto 100%;
        }
        .product-category {
            position: static;
            max-width: 654px;
            margin: 0 auto;
            padding: 0;
        }
        .product-category li {
            max-width: 210px;
            max-height: 210px;
            margin:0 4px;
        }
        .top-line {
            font-size: 19px;
        }
    }

@endsection

@section('content')
    <div class="banner">
        <ul class="product-category">
            <li class="category1"><a href="/product/{{ $categories->where('home_col', 1)->first()->id }}"><div><span class="top-line">{{ $categories->where('home_col', 1)->first()->{'name:'.App::getLocale()} or '' }}</span></div></a></li>
            <li class="category2"><a href="/product/{{ $categories->where('home_col', 2)->first()->id }}"><div><span class="top-line">{{ $categories->where('home_col', 2)->first()->{'name:'.App::getLocale()} or '' }}</span></div></a></li>
            <li class="category3"><a href="/product/{{ $categories->where('home_col', 3)->first()->id }}"><div><span class="top-line">{{ $categories->where('home_col', 3)->first()->{'name:'.App::getLocale()} or '' }}</span></div></a></li>
        </ul>
    </div>
    <div class="child-fixed-width-1100">
        <div>
            <span class="float-left related-companies">
                <h4>{{ __('static.related_companies') }}</h4>
                <ul class="related-companies-ul">
                    <li class="related-companies1"><div><a href="http://www.bst.tw/"><div><span class="company-name">貝斯特</span></div></a></div></li>
                    <li class="related-companies2"><div><a href="http://kimhoanglongco.com/"><div><span class="company-name">金皇龍</span></div></a></div></li>
                    <li class="related-companies3"><div><a href="http://www.woojincopolymer.co.kr/"><div><span class="company-name">WOOJIN</span></div></a></div></li>
                    <li class="related-companies4"><div><a href="http://benqabdentcare.com/"><div><span class="company-name">BenQ 牙材</span></div></a></div></li>
                </ul>
            </span>
            <span class="float-right map">
                <a href="https://www.google.com.tw/maps/place/110%E5%8F%B0%E5%8C%97%E5%B8%82%E4%BF%A1%E7%BE%A9%E5%8D%80%E6%B0%B8%E5%90%89%E8%B7%AF168%E8%99%9F/@25.0455053,121.5688248,17z/data=!3m1!4b1!4m5!3m4!1s0x3442abbd524cf0a7:0xea7dc23efc68ebfc!8m2!3d25.0455053!4d121.5710135"><img src="/images/home-map.png" height="228px" width="272" alt="Map"></a>
            </span>
        </div>
    </div>
@endsection
