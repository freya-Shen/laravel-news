@extends('layout.master')

@section('banner')
    <h2>修改公告</h2>
@endsection

@section('content')
    <form method="post" action="/notices/{{ $notice->id }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="author">Author:</label>  
            <div class="editrow">
                <input id="futhor" name="author" type="text" value="{{ $notice->author }}" placeholder="">   
            </div>
        </div>

        <div class="form-group">
            <label for="title">Title:</label>  
            <div class="editrow">
                <input id="title" name="title" type="text" value="{{ $notice->title }}"placeholder="">   
            </div>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>  
            <div class="editrow">
                <textarea id="content" name="content" type="text">{{ $notice->content }}</textarea>   
            </div>
        </div>

        <div class="btn-bottom">
            <a href="/" class="btn btn-black">取消</a>
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-black">確認</button>
        </div>

    </form>
@endsection