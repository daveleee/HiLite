<!--회원 가입 폼-->

<?php
	echo $_SERVER["DOCUMENT_ROOT"];
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
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
   
    <script>
    	function chk_input()
    	{
    		if(user_form.fuserid.value=="")
    		{
    			alert("아이디를 입력해주세요.");
    			user_form.fuserid.focus();
    			return false;
    		}
    		else if(user_form.fpasswd.value=="")
    		{
    			alert("패스워드를 입력해주세요.");
    			user_form.fpasswd.focus();
    			return false
    		}
    		else if(user_form.fpasswd_re.value=="")
    		{
    			alert("패스워드를 한번더 입력해주세요.");
    			user_form.fpasswd_re.focus();
    			return false;
    		}
    		else if(user_form.fpasswd.value != user_form.fpasswd_re.value)
    		{
    			alert("두 패스워드가 일치하지 않습니다. 다시 입력해주세요.");
    			user_form.fpasswd.value="";
    			user_form.fpasswd_re.value="";
    			user_form.fpasswd.focus();
    			return false;
    		}
    		else if(user_form.fname.value=="")
    		{
    			alert("이름을 입력해 주세요.");
    			user_form.fname.focus();
    			return false;
    		}
    		else if(user_form.fhp.value=="")
    		{
    			alert("핸드폰 번호를 입력해주세요.");
    			user_form.fhp.focus();
    			return false;
    		}
    		else
    		{
    			return true;
    		}
    	}
    </script>
	</head>
		
	<body>
		<div id="header">
			<h2>HI-LITE RECORDS</h2>
		</div>
		<div class="explain">
			<h3>JOIN</h3>
			<label>HI-LITE RECORDS에 오신것을 환영합니다.</label>
		</div>
		<div class="container">
			
			  <form name="user_form" action="add_db.php" method="post" onsubmit="return chk_input()" class="form-inline">
			    	<label for="exampleInputId1">아이디 </label>
				    <input type="text" name="fuserid" class="form-control" id="fuserid" size="12" maxlength="12" onblur="if(fuserid.value!='') chk_id();" placeholder="아이디를 입력해주세요.">
				  	<input type="button" name="button" value="중복확인" onclick="chk_id();" class="btn btn-default"></button>
				  	<div class="label-size">
				  		<label> 영문/숫자 포함(최대 12자리) </label>
				  	</div>

				  	<script>
				  		function chk_id()
				  		{
				  			if(user_form.fuserid.value=='')
				  			{
				  				alert('아이디를 입력해주세요');
				  				user_form.fuserid.focus();
				  			}
				  			else
				  			{
				  				window.open('id_chk.php?fuserid='+user_form.fuserid.value, 'IDwin', 'width=400, height=200');
				  			}
				  		}
				  	</script>

				  	<br />
				  	<br />
			 
			 	
			  <div class="form-group">
			    <label for="exampleInputPassword1">비밀번호 </label>
			    <input type="password" name="fpasswd" class="form-control" id="fpasswd" size="17" maxlength="15" placeholder="비밀번호를 입력해주세요.">

			    <br />
			    <br />

			    <label for="exampleInputPassword2">비밀번호확인 </label>
			    <input type="password" name="fpasswd_re" class="form-control" id="fpasswd_re" size="17" maxlength="15" placeholder="비밀번호를 한번더 입력해주세요.">
			  	<div class="label-size">
			  		<label>영문 대소문/ 숫자/ 특수문자 포함(6~15자리)</label>
			  	</div>
			  </div>
			  	<br />
			  	<br />

			  <div class="form-group">
			  	<label for="exampleInputName1">이름 </label>
			  	<input type="text" name="fname" class="form-control" id="fname" size="4" maxlength="5" placeholder="이름을 입력해주세요.">
			  </div>
			  	<br />
			  	<br />

			  <div class="form-inline">
			  	<label for="exampleInputHp1">핸드폰 번호 </label>
			  	<input type="text" class="form-control" name="fhp" size="17" maxlength="11" id="fhp" placeholder="ex) 01093979696">
			  </div>
			  	<br />

			  <div class="form-inline">
			  	<label for="exampleInputGender">성별 </label>
			  	<label class="radio-inline">
			  		<input type="radio" name="fsex" id="fsex" value="여" checked>여자
			  	</label>
			  	<label class="radio-inline">
			  		<input type="radio" name="fsex" id="fsex" value="남">남자
			  	</label>
			  </div>
			  	<br />

			  <div class="form-group">
			  	<label for="exampleInputEmail1">이메일 </label>
			    <input type="text" name="femail" size="45" maxlength="45" class="form-control" id="exampleInputEmail1" placeholder="이메일을 입력해주세요.">
			  </div>
			  	<br />
			  	<br />
			  	
			  <button type="submit" name="smt" class="btn btn-primary" id="join">회원가입</button>
			
		</div>
		
	</body>
</html>