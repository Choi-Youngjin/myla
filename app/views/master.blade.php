<!DOCTYPE html>
<html>
<style type="text/css">
	.myform {
		border: 2px solid silver;
		padding:1.2em;
		padding-top: 30px;
		border-radius: 8px;
		margin:auto;
		width: 350px;
		height: 350px;
	}
	span {
		display: inline-block;
		border: 1px solid black;
		width: 80px;
		text-align: center;
		margin: 1px;
	}
	.container {
		padding: 10px;
		max-width: 500px;
		margin:auto;
	}
	.login {
		text-align: center;
	}
	.text1 {
		margin:1px;
		margin-left: 10px;
		width: 60px;
		height: 25px;
		font-size: 16px;
	}
	.p_texttype {
		padding-left: 40px;
		display: inline-block;
		margin-bottom: 20px;
	}
	.div_btn {
		text-align: center;
		margin: auto;
	}
	.text1:hover {
		background-color: #DAA0DD;
		color: yellow;
	}
	.errmsg {
		text-align: center;
	}
</style>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="{{asset('../package/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
</head>
<body>
	@yield('content')
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{{asset('../package/bootstrap/js/bootstrap.min.js')}}"></script>
	<div class="errmsg">
 	<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
	<?php 
	foreach ($messages as $msg) 
	{
		echo $msg;
	}
	?>
	</div>
</body>
</html>