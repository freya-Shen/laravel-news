@extends('layout.master')

@section('banner')
    <div class="btn-wrap"><a href="/notices/create" class="btn btn-white">新增公告</a></div>
@endsection

@section('content')

    <div class="title"><span>News</span></div>
    <table class="newslist">
        @foreach ($noticeList as $notice)
            <form method="post" action="/notices/{{ $notice->id }}">
                @csrf 
                <tr class="row">
                    <td class="news-tit"><a href="/notices/{{ $notice->id }}">{{ $notice->title }}</a></td>
                    <td>{{ $notice->author }}</td>
                    <td><?php echo date("Y-m-d", strtotime($notice->updated_at) );?></td>
                    
                    @method('DELETE')
                    <td class="btn-delete"><button type="submit" class="btn-s btn-black">刪除</button></td>
                    <!-- {{ $notice->content }} -->
                </tr>
            </form>
        @endforeach
    </table>

@endsection
