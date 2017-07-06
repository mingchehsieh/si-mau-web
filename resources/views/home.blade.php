@extends('layouts.front')

@section('title', __('static.home'))

@section('style')
    @parent
    .banner {
        background: url('/images/slide2.jpg') no-repeat top;
        padding-top: 309px;
        padding-bottom: 30px;
    }
    .product-category {
        width: 1170px;
        margin: 0 auto;
    }
    .product-category ul {
        margin-right: -5px;
        margin-left: -5px;
    }
    .product-category li {
        height: 226px;
        padding-right: 5px;
        padding-left: 5px;
    }
	.product-category a {
		display: inline-block;
		position: relative;
        width: 226px;
        height: 226px;
        overflow: hidden;
        border-radius: 3px;
        background-color: #00A7C1;
        color: #FFF;
        font-weight: bold;
        -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.25);
        -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.25);
        box-shadow: 0 1px 5px rgba(0,0,0,0.25);
	}
	.product-category img {
        opacity: 0.56;
		-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
		-moz-transition: opacity 0.3s, -moz-transform 0.3s;
		-o-transition: opacity 0.3s, -o-transform 0.3s;
		transition: opacity 0.3s, transform 0.3s;
	}
	.product-category span {
		display: block;
		opacity: 1;
		height: 40px;
		width: 100%;
		left: 0;
		position: absolute;
		top: 50%;
		margin-top: -10px;
		text-align: center;
		line-height: 40px;
		-webkit-transition: opacity 0.3s;
		-moz-transition: opacity 0.3s;
		-o-transition: opacity 0.3s;
		transition: opacity 0.3s;
	}
    .product-category u {
        text-decoration: none;
        border-top: 1px solid #FFF;
        padding-top: 6px;
    }
	.product-category a:hover img {
		opacity: 1;
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform:scale(1.1);
	}
	.product-category a:hover span {
		opacity: 0;
	}


    {{-- 相關企業 --}}
    .related-companies {
        width: 634px;
    }
    .related-companies h4{
        margin: 0 auto 37px auto;
    }
    .related-companies ul {
        margin-right: -9px;
        margin-left: -9px;
    }
    .related-companies li {
        height: 153px;
        padding-right: 9px;
        padding-left: 9px;
    }
	.related-companies a {
		display: inline-block;
		position: relative;
        width: 145px;
        height: 153px;
        border-radius: 3px;
        overflow: hidden;
        background-color: #FFF;
        color: #000;
        font-weight: bold;
        -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.25);
        -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.25);
        box-shadow: 0 1px 5px rgba(0,0,0,0.25);
	}
	.related-companies img {
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
    .map iframe {
        border: 1px solid #CCC;
        width: 445px;
        height: 228px;
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .banner {
            padding-top: 450px;
            padding-bottom: 20px;
            background: url('/images/slide1.jpg') no-repeat center top;
            background-size: auto 100%;
        }
        .product-category {
            width: 698px;
        }
        .product-category li {
            margin-bottom: 10px;
        }
        .product-category li:nth-child(4) {
            margin-left: 118px;
        }
        .product-category li:nth-child(5) {
            margin-right: 118px;
        }
        .related-companies {
            
            float: none;
            margin: 0 auto;
        }
        .related-companies h4{
            margin: 30px auto 20px auto;
        }
        .map {
            float: none;
            width: 634px;
            margin: 40px auto;
        }
        .map iframe {
            width: 634px;
            height: 634px;
        }
    }
    @media (max-width: 767px) {
        .banner {
            padding-top: 280px;
            padding-bottom: 20px;
            padding-left: 10px;
            padding-right: 10px;
            background: url('/images/slide1.jpg') no-repeat center top;
            background-size: auto 100%;
        }
        .product-category {
            width: 100%;
        }
        .product-category li {
            width: 33.33333333%;
            height: auto;
            margin-bottom: 10px;
            padding-right: 2px;
            padding-left: 2px;
        }
        .product-category ul {
            margin-right: -2px;
            margin-left: -2px;
        }
        .product-category a {
            width: 100%;
            height: auto;
        }
        .product-category img {
            width: 100%;
            height: auto;
        }
        .product-category li:nth-child(4) {
            margin-left: 16.66666666%;
        }
        .product-category li:nth-child(5) {
            margin-right: 16.66666666%;
        }
        .related-companies h4{
            margin:30px auto 25px auto;
        }
        .related-companies {
            width: 100%;
            margin-bottom: 30px;
        }
        .related-companies li {
            width: 25%;
            height: auto;
            padding-right: 2px;
            padding-left: 2px;
        }
        .related-companies a {
            width: 100%;
            height: auto;
        }
        .related-companies img {
            width: 100%;
            height: auto;
        }
        .map {
            width: 100%;
            height: auto;
        }
        .map iframe {
            width: 100%;
            height: 320px;
        }
    }
@endsection

@section('content')
    <div class="banner">
        <div class="product-category">
            <ul>
                @for($i = 1; $i <= 5; $i++)
                    <li><a href="/product/{{ $categories->where('home_col', $i)->first()->id }}"><img src="{{ empty($categories->where('home_col', $i)->first()->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$categories->where('home_col', $i)->first()->{'image:zh-TW'} }}" alt="產品類別圖片"><span><u>{{ $categories->where('home_col', $i)->first()->{'name:'.App::getLocale()} or '' }}</u></span></a></li>
                @endfor
            </ul>
        </div>
    </div>
    <div class="child-fixed-width-1100">
        <div>
            <div class="float-left related-companies">
                <h4>{{ __('static.related_companies') }}</h4>
                <ul>
                    <li><a href="http://www.bst.tw/"><img src="/images/logo-best.jpg" alt="貝斯特 Logo"><span>貝斯特</span></a></li>
                    <li><a href="http://kimhoanglongco.com/"><img src="/images/logo-khl.jpg" alt="金皇龍 Logo"><span>金皇龍</span></a></li>
                    <li><a href="http://www.woojincopolymer.co.kr/"><img src="/images/logo-woojin.jpg" alt="WOOJIN Logo"><span>WOOJIN</span></a></li>
                    <li><a href="http://benqabdentcare.com/"><img src="/images/logo-benq.jpg" alt="BenQ 牙材 Logo"><span>BenQ 牙材</span></a></li>
                </ul>
            </div>
            <div class="float-right map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.662944009627!2d121.56881945092343!3d25.045510143904377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abbd524cf0a7%3A0xea7dc23efc68ebfc!2zMTEw5Y-w5YyX5biC5L-h576p5Y2A5rC45ZCJ6LevMTY46Jmf!5e0!3m2!1szh-TW!2stw!4v1499315258911" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
