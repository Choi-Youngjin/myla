@extends('master')

@section('content')
<?php
	if(Auth::check()){
		$nickname = Auth::user()->name;
	}
?>
<title>Login Success</title>
<style type="text/css">
	form {
		text-align: center;
	}
	.img_size {
		width: 125px;
		height: 125px;
	}
	.mybtn {
		width: 100px;
	}
	.mybtn_2 {
		padding: 6px;
	}
	.container {
		padding: 10px;
		max-width: 500px;
		margin:auto;
		text-align: center;
	}
	.btn_board {
		margin-top: 20px;
	}
</style>
<h2 class="login">Welcome!</h2>
<form class="myform">
	<div class="img_btn">
		<img class="img_size" src="../image/images.jpg"></img><br>
		<div class="btn-group">
			<button type="button" class="mybtn btn btn-danger">
			<?php echo $nickname?>
			</button>
			<button type="button" class="mybtn_2 btn btn-danger dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="javascript:myboardpopup();"><i class="glyphicon glyphicon-book"></i> 내 글 보기</a></li>
				<li><a href="logout"><i class="glyphicon glyphicon-off"></i> 로그아웃</a></li>
				<li><a href="./form_modifypwd.php"><i class="glyphicon glyphicon-edit"></i> 비밀번호 변경</a></li>
				<li class="divider"></li>
				<li><a href="./form_withdraw.php"><i class="glyphicon glyphicon-trash"></i> 회원탈퇴</a></li>
			</ul>
		</div>
	</div>
	<button type="button" class="btn btn-primary btn_board" id="toBoard">게시판으로</button>
</form>
</div>
<script>
function myboardpopup() {
	window.open("./board/myboard.php","myboard","width=1180, height=800, menubar=no, status=no");
}
	var returnbutton = document.getElementById('toBoard');
	returnbutton.onclick = function() {
		location.href="./board/board1.php";
	}
</script>
@stop