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
    .category a>div {
        margin-top: 5px;
    }
    @foreach($categories as $category)
        .div{{ $category->id }} {
            background: url({{ empty($category->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$category->{'image:zh-TW'} }}) center;
        }
    @endforeach
    .category>a>div {
        width: 300px;
        height: 300px;
        background-size: 300px 300px;
    }
    .category>a>div>div {
        width: 100%;
        height: 100%;
        background: rgba(0, 167, 193, 0.44);
    }
    .category>a:hover>div {
        background-size: 330px 330px;
    }
    .category>a:hover>div>div {
        background: transparent;
    }
@endsection

@if (Auth::check())
    @section('js')
        <script src="/js/app.js"></script>
        <script>
            $('#categoryModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var action = button.data('action')
                var id = button.data('id')
                var col = button.data('col')
                var modal = $(this)
                modal.find('.modal-title').text(action + '類別')
                if (action == '新增') {
                    modal.find('.modal-body input[type=checkbox]').prop('checked', false)
                    modal.find('.modal-body input[type=text]').val('')
                } else {
                    modal.find('.modal-body input[name=categoryname]').val(button.data('zhtwname'))
                    if(button.data('zhcnname') != '') {
                        modal.find('.modal-body input[name=addzhcn]').prop('checked', true)
                        modal.find('.modal-body input[name=zhcncategoryname]').val(button.data('zhcnname'))
                    } else {
                        modal.find('.modal-body input[name=addzhcn]').prop('checked', false)
                        modal.find('.modal-body input[name=zhcncategoryname]').val('')
                    }
                    if(button.data('janame') != '') {
                        modal.find('.modal-body input[name=addja]').prop('checked', true)
                        modal.find('.modal-body input[name=jacategoryname]').val(button.data('janame'))
                    } else {
                        modal.find('.modal-body input[name=addja]').prop('checked', false)
                        modal.find('.modal-body input[name=jacategoryname]').val('')
                    }
                    if(button.data('enname') != '') {
                        modal.find('.modal-body input[name=adden]').prop('checked', true)
                        modal.find('.modal-body input[name=encategoryname]').val(button.data('enname'))
                    } else {
                        modal.find('.modal-body input[name=adden]').prop('checked', false)
                        modal.find('.modal-body input[name=encategoryname]').val('')
                    }
                }
                modal.find('.modal-body input[type=hidden]').val(id)
                modal.find('.modal-body input[value=' + col + ']').prop('checked', true)
                if (col != 0) {
                    modal.find('.modal-body input[type=radio]').prop('disabled', true)
                } else {
                    modal.find('.modal-body input[type=radio]').prop('disabled', false)
                }

            })
            $('.deletecate').on('click', function () {
                if (confirm('確認刪除' + $(this).data('name') + '？'))
                    window.location = '/rmcategory/' + $(this).data('id')
            })
        </script>
    @endsection

    @section('modal')
        <div class="modal fade" id="categoryModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title" id="categoryModalLabel">類別</h4>
                    </div>
                    <form method="POST" action="/addcategory" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="categoryname" class="control-label">類別名稱：</label>
                                <div class="input-group">
                                    <span class="input-group-addon">繁中</span>
                                    <input type="text" class="form-control" id="categoryname" name="categoryname" Required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addzhcn"> 簡中
                                    </span>
                                    <input type="text" class="form-control" name="zhcncategoryname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addja"> 日文
                                    </span>
                                    <input type="text" class="form-control" name="jacategoryname">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="adden"> 英文
                                    </span>
                                    <input type="text" class="form-control" name="encategoryname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="uploadimage" class="control-label">上傳圖片：</label>
                                <input type="file" class="form-control" id="uploadimage" name="uploadimage">
                            </div>
                            <div class="form-group">
                                <label class="control-label">於首頁顯示：</label>
                                <label class="radio-inline">
                                    <input type="radio" name="homecol" id="homecol1" value="0" checked> 無
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="homecol" id="homecol2" value="1"> 左
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="homecol" id="homecol3" value="2"> 中
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="homecol" id="homecol4" value="3"> 右
                                </label>
                            </div>
                            <input type="hidden" name="id">
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
            {{ __('static.product') }}
            @if (Auth::check())
                <button type="button" class="id-button-p" data-toggle="modal" data-target="#categoryModal" data-action="新增" data-col="0" data-id="0">新增</button>
            @endif
        </h3>
        <div class="categories">
            @foreach($categories as $category)
                <div class="category text-center">
                    @if (Auth::check())
                        <button type="button" class="id-button-p" data-toggle="modal" data-target="#categoryModal" data-action="修改" data-id="{{ $category->id }}" data-col="{{ $category->home_col }}" data-zhtwname="{{ $category->{'name:zh-TW'} }}" data-zhcnname="{{ $category->hasTranslation('zh-CN') ? $category->{'name:zh-CN'} : '' }}" data-janame="{{ $category->hasTranslation('ja') ? $category->{'name:ja'} : '' }}" data-enname="{{ $category->hasTranslation('en') ? $category->{'name:en'} : '' }}">修改</button>
                        @if ($category->home_col == 0)
                            <button type="button" class="id-button-d deletecate"  data-id="{{ $category->id }}" data-name="{{ $category->{'name:zh-TW'} }}">刪除</button>
                        @endif
                    @endif
                    <a href="/product/{{ $category->id }}">
                        <div class="div{{ $category->id }}">
                            <div>

                            </div>
                        </div>
                        <h4>{{ $category->{'name:'.App::getLocale()} }}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
