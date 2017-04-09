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
    .more-button {
        display: inline-block;
        width: 140px;
        height: 40px;
        line-height: 40px;
        background: #00A7C1;
        color: #FFF;
        font-size: 17px;
    }
    .more-button:hover {
        background: #008299;
        text-decoration: none;
        color: #FFF;
    }
@endsection

@section('content')
    <div class="fixed-width-1100">
        <h3 class="news-header">{{ __('static.news') }}</h3>
        <div class="news-content">
            <a href="/contact">
                <img src="a" width="296px" height="197px">
                <h4>最新消息主題</h4>
                <time>November 29, 2015</time>
            </a>
            <p>
                世茂科技（XIMOS）從電子零件（Schotkky Barrier Diode）開始做起，歷經了六七年的市場開發經驗，不斷的修正。直到今日朝著物流通路開發的路線前進，銷售地區以台灣、日本、韓國、中國大陸及越南為主。我們抱持著熱誠去經營著我們的商品與市場。
                我希望 XIMOS 對外所有的客戶及合作廠商皆是可以信任的對象。我們永遠都抱持著能長久合作的心態去對待每一個機會。即使當下沒有合作機會，多一個朋友便多一份力。我們遍佈全球的合作對象說不定也有是您尋找的廠商也不一定？
                對員工來說，我不希望 XIMOS 只是一間公司，更希望它像一個家。希望員工們能把彼
            </p>
            <div class="text-right"><a href="aa.htm" class="more-button text-center">{{ __('static.more') }}</a></div>
        </div>
        <div class="news-content">
            <a href="/contact">
                <img src="a" width="296px" height="197px">
                <h4>最新消息主題</h4>
                <time>November 29, 2015</time>
            </a>
            <p>
                世茂科技（XIMOS）從電子零件（Schotkky Barrier Diode）開始做起，歷經了六七年的市場開發經驗，不斷的修正。直到今日朝著物流通路開發的路線前進，銷售地區以台灣、日本、韓國、中國大陸及越南為主。我們抱持著熱誠去經營著我們的商品與市場。
                我希望 XIMOS 對外所有的客戶及合作廠商皆是可以信任的對象。我們永遠都抱持著能長久合作的心態去對待每一個機會。即使當下沒有合作機會，多一個朋友便多一份力。我們遍佈全球的合作對象說不定也有是您尋找的廠商也不一定？
                對員工來說，我不希望 XIMOS 只是一間公司，更希望它像一個家。希望員工們能把彼
            </p>
            <div class="text-right"><a href="aa.htm" class="more-button text-center">{{ __('static.more') }}</a></div>
        </div>
    </div>


@endsection
