@extends('layout.master')

@section('banner')
    <h2>新增公告</h2>
@endsection


@section('content')

    <form method="post" action="/notices">
        @csrf

        <div class="form-group">
        <label for="author">Author:</label>  
            <div class="editrow">
                <input id="futhor" name="author" type="text" placeholder="">   
            </div>
        </div>

        <div class="form-group">
            <label for="title">Title:</label>  
            <div class="editrow">
                <input id="title" name="title" type="text" placeholder="">   
            </div>
        </div>
        
        <div class="form-group">
            <label for="content">Content:</label>  
            <div class="editrow">
                <textarea id="content" name="content" type="text"></textarea>   
            </div>
        </div>

        <div class="btn-bottom">
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-black">OK</button>
            <a href="/" class="btn btn-black">Cancel</a>
        </div>

    </form>

@endsection