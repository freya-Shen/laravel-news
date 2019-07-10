@extends('layout.master')

@section('banner')
    <h2>詳細公告</h2>
@endsection

@section('content')
    
    <div class="news-content">
        <h3>
            {{$notice->title}}
            <span>{{$notice->updated_at}}</span>
        </h3>

        <div class="showtxt">
            {{$notice->content}}
        </div>

        <p>
            By {{$notice->author}}
        </p>
        <div class="btn-bottom">
            <a href="/notices" class="btn btn-black">回首頁</a>
            <a href="/notices/{{ $notice->id }}/edit" class="btn btn-black">修改</a>
        </div>

    </div>

@endsection