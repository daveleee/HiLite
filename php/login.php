<?php
	$conn=mysqli_connect('127.0.0.1:8080', 'test', 'gowlq305') or die("DB connect error!");
	mysqli_select_db($conn, 'testdb') or die("DB select error!");
	$result=mysqli_query($conn, 'select * from tbl_user')or die("SQL error!");
	$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>HI-LITE RECORDS</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <script type="text/javascript">
		function go_url(url) {
			window.location.href = url;
		}
		function go_join()
		{
			location.href="./join.php";
		}
    </script>
	</head>
		
	<body>
		<div id="header">
			<h2>HI-LITE RECORDS</h2>
		</div>
		<div class="explain">
			<h3>LOGIN</h3>
			<label>가입하신 아이디와 비밀번호를 입력해주세요.</label>
		</div>
		<div class="container">

			<form action='login_ok.php' method='post'>
			  <div class="form-group">
			    <label for="exampleInputEmail1">아이디</label>
			    <input type="text" class="form-control" name="exampleInputId1" id="exampleInputId1" placeholder="아이디를 입력해주세요.">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">비밀번호</label>
			    <input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="비밀번호를 입력해주세요.">
			  </div>
			  <button type="submit" class="btn btn-primary btn-block" id="login">로그인</button>
			  </form>

			<form>
			  
			  <div class="label_form_b">
				<label>HI-LITE RECORDS 회원이 아니신가요?</label>
			  	<button type="button" onClick="go_join()" class="btn btn-link" id="join" target="self">회원가입 ></button>
			  	
			  </div>
			</form>
		</div>
		<script src="../js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
