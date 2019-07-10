@extends('layout.master')

@section('banner')
    <h2>會員登入</h2>
@endsection

@section('content')
<form id="form1" name="form1" method="post" action="/member">
    @csrf

        <div class="form-group">
            <label>帳號:</label>  
            <div class="editrow">
                <input id="txtUserName" name="txtUserName" type="text" placeholder="">   
            </div>
        </div>
        <div class="form-group">
            <label>密碼:</label>  
            <div class="editrow">
                <input id="txtPassword" name="txtPassword" type="password" placeholder="">   
            </div>
        </div>

        <div class="btn-bottom">
            <input type="reset" name="btnReset" id="btnReset" value="重新輸入" class="btn btn-black" />
            <button type="submit" id="btnOK" name="btnOK" class="btn btn-black">登入</button>
        </div>
    
	</form>
@endsection