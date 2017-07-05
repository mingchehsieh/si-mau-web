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
    .category1{
        -webkit-transition: 0.3s;
    }
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
    {{-- 相關企業 --}}
    .related-companies h4{
        margin: 0 auto 37px auto;
    }
    .related-companies li {
        margin-right: 18px;
        width: 145px;
        height: 153px;
        border-radius: 3px;
        overflow: hidden;
        background-color: #FFF;
    }
	.related-companies a {
		display: inline-block;
		position: relative;
        color: #000;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
	}
	.related-companies img {
        height: 100%;
		-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
		-moz-transition: opacity 0.3s, -moz-transform 0.3s;
		-o-transition: opacity 0.3s, -o-transform 0.3s;
		transition: opacity 0.3s, transform 0.3s;
	}
	.related-companies span {
		display: block;
		opacity: 0;
		height: 40px;
		width: 100%;
		left: 0;
		position: absolute;
		top: 50%;
		margin-top: -20px;
		text-align: center;
		line-height: 40px;
		font-weight: bold;
		-webkit-transition: opacity 0.3s;
		-moz-transition: opacity 0.3s;
		-o-transition: opacity 0.3s;
		transition: opacity 0.3s;
	}
	.related-companies a:hover img {
		opacity: 0.3;
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform:scale(1.1);
	}
	.related-companies a:hover span {
		opacity: 1;
	}

    @media (max-width: 1199px) {
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
            padding: 0;
        }
        .product-category li {
            width:31vw;
            height:31vw;
            margin:0 0.41vw;
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
        .related-companies li {
            max-width: 17.5vw;
            height: 18.3333vw;
            margin:0 0.4166vw;
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
    @media (min-height: 790px) and (max-width: 1199px) {
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
                <ul>
                    <li><a href="http://www.bst.tw/"><img src="/images/logo-best.jpg" alt="貝斯特 Logo"><span>貝斯特</span></a></li>
                    <li><a href="http://kimhoanglongco.com/"><img src="/images/logo-khl.jpg" alt="金皇龍 Logo"><span>金皇龍</span></a></li>
                    <li><a href="http://www.woojincopolymer.co.kr/"><img src="/images/logo-woojin.jpg" alt="WOOJIN Logo"><span>WOOJIN</span></a></li>
                    <li><a href="http://benqabdentcare.com/"><img src="/images/logo-benq.jpg" alt="BenQ 牙材 Logo"><span>BenQ 牙材</span></a></li>
                </ul>
            </span>
            <span class="float-right map">
                <a href="https://www.google.com.tw/maps/place/110%E5%8F%B0%E5%8C%97%E5%B8%82%E4%BF%A1%E7%BE%A9%E5%8D%80%E6%B0%B8%E5%90%89%E8%B7%AF168%E8%99%9F/@25.0455053,121.5688248,17z/data=!3m1!4b1!4m5!3m4!1s0x3442abbd524cf0a7:0xea7dc23efc68ebfc!8m2!3d25.0455053!4d121.5710135"><img src="/images/home-map.png" height="228px" width="445" alt="Map"></a>
            </span>
        </div>
    </div>
@endsection
