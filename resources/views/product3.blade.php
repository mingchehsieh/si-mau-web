@extends('layouts.front')

@section('title', __('static.product'))

@section('style')
    @parent

    .product-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .product {
        padding: 15px 18px 40px 18px;
        overflow: auto;
        zoom: 1;
    }
    .product-img {
        margin:0 50px;
        float: left;
    }
    .product-content {
        float: left;
        overflow: auto;
        zoom: 1;
    }
    .product-content p {
        max-width: 470px;
    }
    .product-content h4 {
        margin-bottom: 32px;
    }
    .active {
        padding-top: 43px;
    }
    .active img {
        margin-bottom: 5px;
    }
    .product-contact {
        display: block;
        width: 43px;
        margin-top: 15px;
        padding: 10px 0;
        line-height: 19px;
        background: #00A7C1;
        color: #FFF;
        border-radius: 10px;
    }
    .product-contact:hover {
        color: #FFF;
        text-decoration: none;
        background: #008299;
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

    @section('modal')
        <div class="modal fade" id="productModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title" id="productModalLabel">修改產品內容：{{ $product->{'name:zh-TW'} }}</h4>
                    </div>
                    <form method="POST" action="/addproduct" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="productname" class="control-label">標題：</label>
                                <div class="input-group">
                                    <span class="input-group-addon">繁中</span>
                                    <input type="text" class="form-control" id="productname" name="productname" Required value="{{ $product->{'name:zh-TW'} }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="producttext" class="control-label">內容：</label>
                                <textarea class="form-control" rows="3" id="producttext" name="producttext" Required>{{ $product->{'text:zh-TW'} }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addzhcn"{{ $product->hasTranslation('zh-CN') ? ' checked' : '' }}> 簡中
                                    </span>
                                    <input type="text" class="form-control" name="zhcnproductname" value="{{ $product->hasTranslation('zh-CN') ? $product->{'name:zh-CN'} : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="zhcnproducttext">{{ $product->hasTranslation('zh-CN') ? $product->{'text:zh-CN'} : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addja"{{ $product->hasTranslation('ja') ? ' checked' : '' }}> 日文
                                    </span>
                                    <input type="text" class="form-control" name="japroductname" value="{{ $product->hasTranslation('ja') ? $product->{'name:ja'} : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="japroducttext">{{ $product->hasTranslation('ja') ? $product->{'text:ja'} : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="adden"{{ $product->hasTranslation('en') ? ' checked' : '' }}> 英文
                                    </span>
                                    <input type="text" class="form-control" name="enproductname" value="{{ $product->hasTranslation('en') ? $product->{'name:en'} : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="enproducttext">{{ $product->hasTranslation('en') ? $product->{'text:en'} : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">聯絡信箱：</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $product->{'email:zh-TW'} or '' }}">
                            </div>
                            <div class="form-group">
                                <label for="uploadpdf" class="control-label">上傳 PDF：</label>
                                <input type="file" class="form-control" id="uploadpdf" name="uploadpdf">
                            </div>
                            <div class="form-group">
                                <label for="uploadimage" class="control-label">上傳圖片：</label>
                                <input type="file" class="form-control" id="uploadimage" name="uploadimage">
                            </div>
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="cid" value="{{ $category->id }}">
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="取消">
                            <input type="submit" class="btn btn-primary" value="送出">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
@endif

@section('content')
    <div class="fixed-width-1100">
        <h3 class="product-header">
            {{ __('static.product') }} ＞ {{ $category->{'name:'.App::getLocale()} }} > {{ $product->{'name:'.App::getLocale()} }}
            @if (Auth::check())
                <button type="button" class="id-button-p" data-toggle="modal" data-target="#productModal">修改</button>
                <button type="button" class="id-button-d deletecate"  data-id="{{ $product->id }}" data-name="{{ $product->{'name:zh-TW'} }}">刪除</button>
            @endif
        </h3>
        <div class="product">
            <img src="{{ '/storage/'.$product->{'image:zh-TW'} }}" height="300px" width="300px" class="product-img">
            <div class="product-content">
                <h4>{{ $product->{'name:'.App::getLocale()} }}</h4>
                <p>
                    {!! nl2br($product->{'text:'.App::getLocale()}) !!}
                </p>
            </div>
            <div class="active float-right text-center">
                @unless(empty($product->{'pdf:zh_TW'}))
                    <a href="{{ '/storage/'.$product->{'pdf:zh-TW'} }}"><img src="/images/pdf-icon.png"></a>
                @endunless
                <a href="/contact/{{ $product->id.'/'.$product->{'email:zh-TW'} }}" class="product-contact"><img src="/images/product-contact.png">立<br>即<br>詢<br>價</a>
            </div>
        </div>
    </div>
@endsection
