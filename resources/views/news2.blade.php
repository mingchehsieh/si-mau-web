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

@section('content')
    <div class="fixed-width-1100">
        <h3 class="news-header">{{ __('static.news') }}＞主題</h3>
        <div class="news-content">
            <h2>最新消息主題</h2>
            <time>November 29, 2015</time>
            <p>
                世茂科技（XIMOS）從電子零件（Schotkky Barrier Diode）開始做起，歷經了六七年的市場開發經驗，不斷的修正。直到今日朝著物流通路開發的路線前進，銷售地區以台灣、日本、韓國、中國大陸及越南為主。我們抱持著熱誠去經營著我們的商品與市場。
                我希望 XIMOS 對外所有的客戶及合作廠商皆是可以信任的對象。我們永遠都抱持著能長久合作的心態去對待每一個機會。即使當下沒有合作機會，多一個朋友便多一份力。我們遍佈全球的合作對象說不定也有是您尋找的廠商也不一定？
                對員工來說，我不希望 XIMOS 只是一間公司，更希望它像一個家。希望員工們能把彼
            </p>
            <img src="/images/pdf-icon.png">
        </div>
    </div>


@endsection
