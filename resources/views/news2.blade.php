@extends('layouts.front')

@section('title', __('static.news'))

@section('style')
    @parent
    h2, time {
        color: #00A7C1;
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
        padding: 1px 80px;
    }
    .news-content img {
        max-width: 930px
        float: left;
        margin-right: 42px;
    }
    .news-content h2 {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 22px
    }
    .news-content p {
        margin: 30px auto;

    }

@endsection

@if (Auth::check())
    @section('js')
        <script src="/js/app.js"></script>
        <script>
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
                        <h4 class="modal-title" id="newsModalLabel">修改最新消息</h4>
                    </div>
                    <form method="POST" action="/addnews" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="newstitle" class="control-label">標題：</label>
                                <div class="input-group">
                                    <span class="input-group-addon">繁中</span>
                                    <input type="text" class="form-control" id="newstitle" name="newstitle" value="{{ $news->{'title:zh-TW'} }}" Required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="newstext" class="control-label">內容：</label>
                                <textarea class="form-control" rows="3" id="newstext" name="newstext" Required>{{ $news->{'text:zh-TW'} }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addzhcn"{{ $news->hasTranslation('zh-CN') ? ' checked' : '' }}> 簡中
                                    </span>
                                    <input type="text" class="form-control" name="zhcnnewstitle" value="{{ $news->hasTranslation('zh-CN') ? $news->{'title:zh-CN'} : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="zhcnnewstext">{{ $news->hasTranslation('zh-CN') ? $news->{'text:zh-CN'} : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addja"{{ $news->hasTranslation('ja') ? ' checked' : '' }}> 日文
                                    </span>
                                    <input type="text" class="form-control" name="janewstitle" value="{{ $news->hasTranslation('ja') ? $news->{'title:ja'} : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="janewstext">{{ $news->hasTranslation('ja') ? $news->{'text:ja'} : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="adden"{{ $news->hasTranslation('en') ? ' checked' : '' }}> 英文
                                    </span>
                                    <input type="text" class="form-control" name="ennewstitle" value="{{ $news->hasTranslation('en') ? $news->{'title:en'} : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="ennewstext">{{ $news->hasTranslation('en') ? $news->{'text:en'} : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="uploadimage" class="control-label">上傳圖片：</label>
                                <input type="file" class="form-control" id="uploadimage" name="uploadimage">
                            </div>
                            <input type="hidden" name="id" value="{{ $news->id }}">
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
                <button type="button" class="id-button-p" data-toggle="modal" data-target="#newsModal">修改</button>
                <button type="button" class="id-button-d deletecate"  data-id="{{ $news->id }}" data-name="{{ $news->{'title:zh-TW'} }}">刪除</button>
            @endif
        </h3>
        <div class="news-content">
            <h2>{{ $news->{'title:'.App::getLocale()} }}</h2>
            <time>{{ $news->updated_at->format('F j, Y') }}</time>
            <p>
                {!! nl2br($news->{'text:'.App::getLocale()}) !!}
            </p>
            <img src="{{ empty($news->{'image:zh-TW'})? '/images/news-default.png' : '/storage/'.$news->{'image:zh-TW'} }}">
        </div>
    </div>


@endsection
