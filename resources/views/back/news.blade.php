@extends('layouts.back')

@section('title', '最新消息')

@section('style')
    @parent

@endsection
    <div class="container">
        <div class="row">
            <div class="col-md-11"><h4>管理＞最新消息</h4></div>
            <div class="col-md-1"><a href="/config/news/add" class="btn btn-primary">＋</a></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@section('content')
