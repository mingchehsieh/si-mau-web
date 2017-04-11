@extends('layouts.front')

@section('title', __('static.product'))

@section('style')
    @parent
    a {
        color: #00A7C1;
    }
    a:hover {
        color: #008299;
    }
    .product-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .products {
        padding: 15px 28px;
        overflow: auto;
        zoom: 1;
    }
    .product {
        width: 236px;
        margin: 0 12px 20px 12px;
        float: left;
    }
    .product p {
        margin: 18px auto;
    }
    .product a>div {
        margin-top: 5px;
    }
    @foreach ($products as $product)
        .div{{ $product->id }} {
            background: url({{ empty($product->{'image:zh-TW'}) ? '/storage/'.$category->{'image:zh-TW'} : '/storage/'.$product->{'image:zh-TW'} }}) center;
        }
    @endforeach
    .product>a>div {
        width: 236px;
        height: 236px;
        background-size: 236px 236px;
    }
    .product>a>div>div {
        width: 100%;
        height: 100%;
        background: rgba(0, 167, 193, 0.44);
    }
    .product>a:hover>div {
        background-size: 260px 260px;
    }
    .product>a:hover>div>div {
        background: transparent;
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
