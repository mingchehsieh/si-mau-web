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
        background-size: 226px 226px;
    }
    .related-companies-ul li {
        width:146px;
        height:153px;
        margin-right: 18px;
        background-size: 146px 153px;
        background: #FFF url(/images/related_companies.jpg) center;
    }
    .category1 {
        background: #FFF url({{ empty($categories->where('home_col', 1)->first()->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$categories->where('home_col', 1)->first()->{'image:zh-TW'} }}) center;
    }
    .category2 {
        background: #FFF url({{ empty($categories->where('home_col', 2)->first()->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$categories->where('home_col', 2)->first()->{'image:zh-TW'} }}) center;
    }
    .category3 {
        background: #FFF url({{ empty($categories->where('home_col', 3)->first()->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$categories->where('home_col', 3)->first()->{'image:zh-TW'} }}) center;
    }

    .product-category a {
        color: #FFF;
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
    .product-category li div {
        width:100%;
        height:100%;
        background: rgba(0, 167, 193, 0.44);
        text-align:center;
        padding-top: 116px
    }
    .product-category li:hover {
        background-size: 249px 249px;
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
    .content {
        padding-bottom: 20px;
    }
    .related-companies h4{
        margin:0 auto 37px auto;
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
                    <li><a href="#"><div><span class="company-name">相關企業名稱</span></div></a></li>
                    <li><a href="#"><div><span class="company-name">相關企業名稱</span></div></a></li>
                    <li><a href="#"><div><span class="company-name">相關企業名稱</span></div></a></li>
                    <li><a href="#"><div><span class="company-name">相關企業名稱</span></div></a></li>
                    <li><a href="#"><div><span class="company-name">相關企業名稱</span></div></a></li>
                </ul>
            </span>
            <span class="float-right">
                <a href="https://www.google.com.tw/maps/place/110%E5%8F%B0%E5%8C%97%E5%B8%82%E4%BF%A1%E7%BE%A9%E5%8D%80%E6%B0%B8%E5%90%89%E8%B7%AF168%E8%99%9F/@25.0455053,121.5688248,17z/data=!3m1!4b1!4m5!3m4!1s0x3442abbd524cf0a7:0xea7dc23efc68ebfc!8m2!3d25.0455053!4d121.5710135"><img src="/images/home-map.png" height="228px" width="272" alt="Map"></a>
            </span>
        </div>
    </div>
@endsection