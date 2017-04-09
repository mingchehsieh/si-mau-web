@extends('layouts.back')

@section('title', '新增最新消息')

@section('style')
    @parent

@endsection
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h4>管理＞最新消息＞新增</h4></div>
        </div>
        <div class="row">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputTitleZhTw" class="col-sm-2 control-label">標題</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTitleZhTw">
                </div>
            </div>
            <div class="form-group">
                <label for="inputTextZhTw" class="col-sm-2 control-label">內文</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="inputTextZhTw"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputFileZhTw" class="col-sm-2 control-label">上傳圖片</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputFileZhTw">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 新增簡體中文
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 新增日文
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 新增英文
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">新增</button>
                </div>
            </div>
        </form>
        </div>
    </div>

@section('content')
