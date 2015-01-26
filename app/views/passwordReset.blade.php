@extends('master')

@section('content')
<style type="text/css">
	.input {
		text-align: center;
		color: blue;
		margin-bottom: 40px;
	}
</style>
<div class="container">
	<h2 class="login">Password RESET</h2>
	<form class="myform" method="POST">
		<p class="input">새로운 비밀번호를 입력해주세요.</p>
		<p class="p_texttype">
			<input type="hidden" name="token" value="{{ $token }}">
	     		<span style="width:100px">새로운 비밀번호</span><input id="password" type="password" class="text1 form-control" name="password" placeholder="password"/><br>
	     		<span style="width:100px">비밀번호 확인</span><input id="password_confirmation" type="password" class="text1 form-control" name="password_confirmation" placeholder="password confirm"/>
		</p>
		<div class="div_btn">
			<button class="btn btn-primary" type="submit">Submit</button>
			<button class="btn btn-primary" type="button" id="rt">Login</button>
		</div>
	</form>
</div>
<script>
	var returnbutton = document.getElementById('rt');
	returnbutton.onclick = function() {
		location.href="../../login";
	}
</script>
@stop