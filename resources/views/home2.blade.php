@extends('layouts.front')

@section('title', __('static.home'))

@section('style')
    @parent
    .banner {
        height: 580px;
        background: url('images/slide2.jpg') no-repeat top;
        padding-top: 309px;
    }
    .product-category {
        width: 744px;
        margin: 0 auto;
    }
    .product-category li {
        background: #FFF url(images/product-default.jpg) center;
        width:226px;
        height:226px;
        margin:0 11px;
    }
    .product-category a {
        color: #FFF;
    }
    .product-category li div {
        width:100%;
        height:100%;
        background: rgba(0,167,193,0.44);
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
    .content {
        padding-bottom: 20px;
    }
    .related-companies h4{
        margin:0 auto 37px auto;
    }
    .related-companies li{
        margin-right: 18px;
    }
@endsection

@section('content')
    <div class="banner">
        <ul class="product-category">
            <li><a href="a.htm"><div><span class="top-line">中文測試</span></div></a></li>
            <li><a href="a.htm"><div><span class="top-line">中文測試</span></div></a></li>
            <li><a href="a.htm"><div><span class="top-line">中文測試</span></div></a></li>
        </ul>
    </div>
    <div class="child-fixed-width-1100">
        <div>
            <span class="float-left related-companies">
                <h4>{{ __('static.related_companies') }}</h4>
                <ul>
                    <li><img src="a.gif" style="width:147px; height:154px"></li>
                    <li><img src="a.gif" style="width:147px; height:154px"></li>
                    <li><img src="a.gif" style="width:147px; height:154px"></li>
                    <li><img src="a.gif" style="width:147px; height:154px"></li>
                    <li><img src="a.gif" style="width:147px; height:154px"></li>
                </ul>
            </span>
            <span class="float-right">
                <img src="/images/home-map.png" height="228px" width="272" alt="Map">
            </span>
        </div>
    </div>
@endsection
