@extends('layouts.front')

@section('title', __('static.product'))

@section('style')
    @parent
    .product-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .products {
        padding: 15px 28px;
        overflow: auto;
    }
    .product {
        width: 236px;
        margin: 0 12px 20px 12px;
        float: left;
    }
    .product h4 {
        margin: 30px auto;
    }
    .product a>div {
        margin-top: 5px;
    }
    @foreach ($products as $product)
        .div{{ $product->id }} {
            background: url({{ empty($product->{'image:zh-TW'}) ? (empty($category->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$category->{'image:zh-TW'}) : '/storage/'.$product->{'image:zh-TW'} }}) center no-repeat;
        }
    @endforeach
    .product>a>div {
        width: 236px;
        height: 236px;
        background-size: 100%;
    }
    .product>a>div>div {
        width: 100%;
        height: 100%;
        background: rgba(0, 167, 193, 0.44);
    }
    .product>a:hover>div {
        background-size: 110%;
    }
    .product>a:hover>div>div {
        background: transparent;
    }
    @media screen and (max-width: 1199px) {
        .product-header {
            margin: 20px 30px 0 30px;
        }
        .products {
            padding: 22px 2.0833vw;
        }
        .product {
            width: 43.75vw;
            margin: 0 2.0833vw 5px 2.0833vw;
        }
        .product>a>div {
            width: 43.75vw;
            height: 43.75vw;
        }
        .product h4 {
            margin: 15px auto;
        }
    }
@endsection

@if (Auth::check())
    @section('js')
        <script src="/js/app.js"></script>
        <script>
            $('.deletecate').on('click', function () {
                if (confirm('確認刪除' + $(this).data('name') + '？'))
                    window.location = '/rmproduct/' + $(this).data('id')
            })
        </script>
    @endsection
@endif

@section('content')
    <div class="fixed-width-1100">
        <h3 class="product-header">
            {{ __('static.product').' ＞ '.__('static.search').'：'.$key }}
        </h3>
        <div class="products">
            @foreach($products as $product)
                <div class="product text-center">
                    @if (Auth::check())
                        <button type="button" class="id-button-d deletecate"  data-id="{{ $product->id }}" data-name="{{ $product->{'name:zh-TW'} }}">刪除</button>
                    @endif
                    <a href="/product/{{ $product->category_id }}/{{ $product->id }}">
                            <div class="div{{ $product->id }}">
                                <div>

                                </div>
                            </div>
                            <h4>{{ $product->{'name:'.App::getLocale()} }}</h4>
                        </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
