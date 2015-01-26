@extends('master')
<title>LOGIN</title>
<style type="text/css">
.find {
    margin-top: 20px;
}
</style>
@section('content')
<div class="container">
		<h2 class="login">LOGIN FORM</h2>
	 	<form class="myform" method="POST">
	 		<p class="p_texttype">
         			<span>이메일</span><input id="email" type="text" class="text1 form-control" name="email" placeholder="email" value="<?php echo Input::old('email')?>" /><br>
         		   	<span>비밀번호</span><input id="password" type="password" class="text1 form-control" name="password" placeholder="password"/>
         		</p>
         		<div class="div_btn">
         			<button class="btn btn-primary" type="submit">Login</button>
         			<button class="btn btn-default" type="button" onclick="location.href='./signup'">Sign Up</button>
                    <p class="find"><a href="findpassword">비밀번호를 잊으셨나요?</a></p>
     			</div>
     		</form>
 	</div>
</div>
@stop