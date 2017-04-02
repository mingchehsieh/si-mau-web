@extends('layouts.front')

@section('title', __('static.home'))

@section('content')
<style>
    .test {
        background: #FFF url(images/product-default2.jpg) center;
        width:226px;
        height:226px;
        margin:0 11px;
    }
    .test>div {
        width:100%;
        height:100%;
        background: rgba(0,167,193,0.44);
    }
    .test:hover {
        background-size: 110%;
    }
    .test>div:hover {
        background: transparent;
    }
</style>
    <div style="height: 580px; background: url('images/slide1.jpg') no-repeat top; padding-top: 309px">
        <ul style="width: 744px;margin:0 auto">
            <li><div class="test"><div></div></div></li>
            <li><div class="test"><div></div></div></li>
            <li><div class="test"><div></div></div></li>
        </ul>
    </div>
    <div class="child-fixed-width-1100">
        <div>
            <h4>{{ __('static.related_companies') }}</h4>
            <ul>
                <li><img src="a.gif" style="width:149px; height:155px"></li>
                <li><img src="a.gif" style="width:149px; height:155px"></li>
                <li><img src="a.gif" style="width:149px; height:155px"></li>
                <li><img src="a.gif" style="width:149px; height:155px"></li>
                <li><img src="a.gif" style="width:149px; height:155px"></li>
            </ul>
        </div>
    </div>
@endsection
