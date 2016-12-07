<?php
session_start();
$s=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<?php
echo $s." 님 환영합니다.";

    require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	    <link href="../css/carouel.css" rel="stylesheet">
	    
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="../js/ie-emulation-modes-warning.js"></script>
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/holder.js"></script>
	    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	    
	    <title>HI-LITE RECORDS</title>
	    
	    <script>
	    	function chk_input() 
	    	{
	    		if(user_form.fpassword.value=="")
	    		{
	    			alert("패스워드를 입력해주세요.");
	    			user_form.password.focus();
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
		<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./login_main.php">HI-LITE RECORDS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="./login_main.php">HOME</a></li>
			  <li><a href="./notice.php">NOTICE</a></li>
			  <li><a href="./news.php">NEWS</a></li>
			  <li class="dropdown">
			  	<a href="./artists.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ARTISTS <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				  <li><a href="./artists.php">Paloalto</a></li>
				  <li><a href="./artists.php">B-free</a></li>
				  <li><a href="./artists.php">Huckleberry P</a></li>
				  <li><a href="./artists.php">Reddy</a></li>
				  <li><a href="./artists.php">Okasian</a></li>
				  <li><a href="./artists.php">Keith Ape</a></li>
				  <li><a href="./artists.php">G2</a></li>
	            </ul>
	            </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MULTIMEDIA <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					  <li><a href="./gallery.php">Gallery</a></li>
					  <li><a href="./video.php">Video</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">BOARD <span class="caret"></span></a>
			  	<ul class="dropdown-menu" role="menu">
			  		<li><a href="./recordboard.php">자기녹음게시판</a></li>
			  		<li><a href="./freeboard.php">자유게시판</a></li>
			  	</ul>
			  </li>
	          <li><a href="./contact.php">Contact</a></li>
          	  
          	  <div id="top-bar-social" class="clr top-bar-right social-style-none">
          	  	
	          	  	<a href="https://www.facebook.com/hiliterecords" title="Facebook" class="wpex-facebook wpex-social-btn wpex-social-btn-style-none" target="_blank">
	          	  		<span class="fa fa-facebook"></span>
	          	  	</a>
	          	  	<a href="https://twitter.com/hiliterecords" title="Twitter" class="wpex-twitter wpex-social-btn wpex-social-btn-style-none" target="_blank">
	          	  		<span class="fa fa-twitter"></span>
	          	  	</a>
	          	  	<a href="https://www.youtube.com/c/hiliterecords" title="Youtube" class="wpex-youtube wpex-social-btn wpex-social-btn-style-none" target="_blank">
	          	  		<span class="fa fa-youtube"></span>
	          	  	</a>
          	  	
          	  		
	          	  	<a href="../php/mypage.php" title="User" class="wpex-user wpex-social-btn wpex-social-btn-style-none" target="_self">
		          	  		<span class="fa fa-user" style="text-align: center;"><p style="display:block;">마이페이지</p></span>
		          	  		
		          	</a>   <!--  로그인, 로그아웃, 회원가입 아이콘   -->
		          	<a href="./main.php" title="Logout" class="wpex-logout wpex-xocial-btn wpex-social-btn-style-none" target="_self">
		          		<span class="fa fa-sign-out" style="text-align: center;"><p style="display:block;">로그아웃</p></span>
		          		
		          	</a>
	          	
          	  </div>
          	 </ul> 
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    
    <img src="../img/background.png" class="img-responsive" alt="Responsive image">
    
    <header class="page-header">
    	<div class="container clr page-header-inner">
    		<h1 class="page-header-title wpex-clr" itemprop="headline">MY PAGE</h1>
    	</div>
    </header>
    
    <div class="my-wrap">
    	<div class="mypage join">
    		<section class="body member">
    			<nav class="tab-nav">
    				<ul>
    					<li>
    						<a href="../php/mypage.php">회원정보수정</a>
    					</li>
    					
    					<li class="on">
    						<strong> 회원탈퇴 </strong>
    					</li>
    				</ul>
    			</nav>
    			<div class="terms">
    				<strong>회원탈퇴 신청을 앞서 앞서 아래의 사항을 반드시 확인하시기 바랍니다.</strong>
    				<br>
    				<br>
    				"회원탈퇴를 신청하시면 아이디는 즉시 탈퇴처리되며 이후 해당 아이디는 사용이 중지되므로 해당 아이디로 재가입이 불가능합니다. 회원탈퇴 후, 다른 아이디로 회원가입이 가능합니다."
    				<br>
    				<br>
    				"탈퇴와 재가입을 통해 아이디를 교체하면서 다른 이용자분들께 피해를 끼치는 행위를 방지하기 위한 조치이니 넓은 아량 바랍니다."
    				
    			</div>
    			<form name="user_form" action="out_db.php" method="post" onsubmit="return chk_input()" class="member-form">
    				<legend>회원탈퇴 작성</legend>
    				
    				<table class="form-table">
    					<tbody>
    						<tr>
    							<th>아이디</th>
    							<td>
    								<?php
    									echo $s;
    								?>
    							</td>
    						</tr>
    						<tr>
    							<th>이름</th>
    							<td>
    							  <?php
				                    $sql="select user_name as '이름' from tbl_user where user_id='".$s."'";
				                    $result=mysqli_query($conn, $sql);
				                    $row_name=mysqli_fetch_assoc($result);
				                    echo $row_name['이름'];
				                  ?>
    							</td>
    						</tr>
    						<tr>
    							<th>
    								<label for="password">패스워드</label>
    							</th>
    							<td>
    								<input type="password" name="fpassword" id="fpassword">
    							</td>
    						</tr>
    						<tr>
    							<th>
    								<label for="out-content">탈퇴사유</label>
    							</th>
    							<td>
    								<div class="form-inline">
    									<label class="radio-inline">
    										<input type="radio" name="freason" id="freason" value="개인정보 변경으로 인한 재가입" checked>
    										개인정보 변경으로 인한 재가입
    									</label>
    									<label class="radio-inline">
    										<input type="radio" name="freason" id="freason" value="타 사이트의 유사 서비스 이용" >
    										타 사이트의 유사 서비스 이용
    									</label>
    									<label class="radio-inline">
    										<input type="radio" name="freason" id="freason" value="자주 이용하지 않음" >
    										자주 이용하지 않음
    									</label>
    									<label class="radio-inline">
    										<input type="radio" name="freason" id="freason" value="기타 사유" >
    										기타 사유
    									</label>
    									
    								</div>
    							</td>
    						</tr>
    					</tbody>
    				</table>
    				<nav class="btngroup">
    					<button type="submit" name="smt" class="ui-sbutton btn-highlight">회원탈퇴</button>
    					<button type="button" onclick="history.back()" class="ui-sbutton">이전으로</button>
    				</nav>
    			</form>
    		</section>
    	</div>
    </div>
    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    <footer class="footer">
    	<div class="container">
    		<p class="text-muted">HI-LITE RECORDS</p>
    		<span class="text-muted">관리자 정보는</span> 
    		<a href="./contact.php" class="text-muted">CONTACT</a> 
    		<span class="text-muted">페이지를 확인하세요.</span>
    	</div>
    </footer>

		
	</body>
</html>