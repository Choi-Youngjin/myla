@extends('master')

@section('content')
<div class="container">
	<h2 style="text-align:center">SIGNUP FORM</h2>
 	<form class="myform" method="POST">
 		<p class="p_texttype">
     	   		<span>이메일</span><input id="email" type="text" class="text1 form-control" name="email" placeholder="email" value="<?php echo Input::old('email')?>"/><br>
     	   		<span>닉네임</span><input id="nickname" type="text" class="text1 form-control" name="nickname" placeholder="nickname" value="<?php echo Input::old('nickname')?>"/><br>
     			<span>비밀번호</span><input id="password" type="password" class="text1 form-control" name="password" placeholder="password"	/>
    	 	</p>
    	 	<div class="div_btn">
    	 	   	<button class="btn btn-primary" type="submit">가입신청</button>
     	   		<button class="btn btn-default" type="button" id="rt">로그인</button>
 		</div>
	 </form>
</div>
 <script>
 	var returnbutton = document.getElementById('rt');
 	returnbutton.onclick = function() {
 		location.href="./login";
	}
</script>
@stop