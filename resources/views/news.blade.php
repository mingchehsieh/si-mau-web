@extends('layouts.front')

@section('title', __('static.news'))

@section('style')
    @parent
    a {
        color: #00A7C1;
    }
    a:hover {
        color: #008299;
    }
    .news-header {
        font-size: 20px;
        margin: 28px auto;
    }
    .content {
        padding: 0 30px 36px 30px;
    }
    .news-content {
        margin-bottom: 22px;
        padding: 1px 82px;
    }
    .news-content img {
        float: left;
        margin-right: 42px;
    }
    .news-content h4 {
        padding-top: 5px;
        margin-bottom: 0;
    }
    .news-content p {
        margin-top: 10px;
        height: 85px;
        overflow: hidden;
    }
@endsection

@if (Auth::check())
    @section('js')
        <script src="/js/app.js"></script>
        <script>
            $('#newsModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var action = button.data('action')
                var id = button.data('id')
                var modal = $(this)
                modal.find('.modal-title').text(action + '類別')
                modal.find('.modal-body input[type=hidden]').val(id)
            })
            $('.deletecate').on('click', function () {
                if (confirm('確認刪除' + $(this).data('name') + '？'))
                    window.location = '/rmnews/' + $(this).data('id')
            })
        </script>
    @endsection

    @section('modal')
        <div class="modal fade" id="newsModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title" id="newsModalLabel">最新消息</h4>
                    </div>
                    <form method="POST" action="/addnews" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="newstitle" class="control-label">標題：</label>
                                <div class="input-group">
                                    <span class="input-group-addon">繁中</span>
                                    <input type="text" class="form-control" id="newstitle" name="newstitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="newstext" class="control-label">內容：</label>
                                <textarea class="form-control" rows="3" id="newstext" name="newstext"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addzhcn"> 簡中
                                    </span>
                                    <input type="text" class="form-control" name="zhcnnewstitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="zhcnnewstext"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addja"> 日文
                                    </span>
                                    <input type="text" class="form-control" name="janewstitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="janewstext"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="adden"> 英文
                                    </span>
                                    <input type="text" class="form-control" name="ennewstitle">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="ennewstext"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="uploadimage" class="control-label">上傳圖片：</label>
                                <input type="file" class="form-control" id="uploadimage" name="uploadimage">
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
        <h3 class="news-header">
            {{ __('static.news') }}
            @if (Auth::check())
                <button type="button" class="id-button-p" data-toggle="modal" data-target="#newsModal" data-action="新增" data-col="0" data-id="0">新增</button>
            @endif
        </h3>
        @foreach($newsall as $news)
            <div class="news-content">
                <a href="/news/{{ $news->id }}">
                    <img src="{{ empty($news->{'image:zh-TW'})? '/images/news-default.png' : '/storage/'.$news->{'image:zh-TW'} }}" height="197px">

                    <h4>{{ $news->{'title:'.App::getLocale()} }}</h4>
                    <time>{{ $news->updated_at->format('F j, Y') }}</time>
                </a>
                <p>
                    {!! nl2br($news->{'text:'.App::getLocale()}) !!}
                </p>
                <div class="text-right">
                    @if (Auth::check())
                        <button type="button" class="id-button-d deletecate"  data-id="{{ $news->id }}" data-name="{{ $news->{'title:zh-TW'} }}">刪除</button>
                    @endif
                    <a href="/news/{{ $news->id }}" class="id-button-p text-center">{{ __('static.more') }}</a>
                </div>
            </div>
        @endforeach
    </div>


@endsection
