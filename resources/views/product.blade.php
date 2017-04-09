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
    .categories {
        padding: 22px 52px;
        overflow: auto;
        zoom: 1;
    }
    .category {
        width: 300px;
        margin: 0 15px 20px 15px;
        float: left;
    }
    .category h4 {
        margin: 30px auto;
    }
@endsection

@section('content')
    <div class="fixed-width-1100">
        <h3 class="product-header">{{ __('static.product') }}</h3>
        <div class="categories">
            <div class="category text-center">
                <a href="aa">
                    <img src="aa" height="300px" width="300px">
                    <h4>稀土金屬</h4>
                </a>
            </div>
            <div class="category text-center">
                <img src="aa" height="300px" width="300px">
                <h4>稀土金屬</h4>
            </div>
            <div class="category text-center">
                <img src="aa" height="300px" width="300px">
                <h4>稀土金屬</h4>
            </div>
            <div class="category text-center">
                <img src="aa" height="300px" width="300px">
                <h4>稀土金屬</h4>
            </div>
            <div class="category text-center">
                <img src="aa" height="300px" width="300px">
                <h4>稀土金屬</h4>
            </div>
            <div class="category text-center">
                <img src="aa" height="300px" width="300px">
                <h4>稀土金屬</h4>
            </div>
        </div>
    </div>
@endsection
