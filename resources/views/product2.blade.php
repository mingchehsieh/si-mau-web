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
@endsection

@section('content')
    <div class="fixed-width-1100">
        <h3 class="product-header">
            {{ __('static.product') }}＞{{ $category->{'name:'.App::getLocale()} }}
            @if (Auth::check())
                <button type="button" class="id-button-p" data-toggle="modal" data-target="#categoryModal" data-action="新增" data-col="0" data-id="0">新增</button>
            @endif
        </h3>
        <div class="products">
            <div class="product text-center">
                <a href="aa">
                    <img src="aa" height="236px" width="236px">
                    <p>稀土金屬</p>
                </a>
            </div>
            <div class="product text-center">
                <a href="aa">
                    <img src="aa" height="236px" width="236px">
                    <p>稀土金屬</p>
                </a>
            </div>
            <div class="product text-center">
                <a href="aa">
                    <img src="aa" height="236px" width="236px">
                    <p>稀土金屬</p>
                </a>
            </div>
            <div class="product text-center">
                <a href="aa">
                    <img src="aa" height="236px" width="236px">
                    <p>稀土金屬</p>
                </a>
            </div>
            <div class="product text-center">
                <a href="aa">
                    <img src="aa" height="236px" width="236px">
                    <p>稀土金屬</p>
                </a>
            </div>
            <div class="product text-center">
                <a href="aa">
                    <img src="aa" height="236px" width="236px">
                    <p>稀土金屬</p>
                </a>
            </div>

        </div>
    </div>
@endsection
