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
        if(user_form.fpasswd.value=="")
        {
          alert("기존의 패스워드를 입력해주세요.");
          user_form.fpasswd.focus();
          return false
        } 
        else if(user_form.fnewpasswd.value=="")
        {
          alert("새로운 패스워드를 입력해주세요.");
          user_form.fnewpasswd.focus();
          return false;
        }
        else if(user_form.fnewpasswd_re.value=="")
        {
          alert("새로운 패스워드를 한번더 입력해주세요.");
          user_form.fnewpasswd_re.focus();
          return false;
        }
        else if(user_form.fnewpasswd.value != user_form.fnewpasswd_re.value)
        {
          alert("새로운 두 패스워드가 일치하지 않습니다. 다시 입력해주세요.");
          user_form.fnewpasswd.value="";
          user_form.fnewpasswd_re.value="";
          user_form.fnewpasswd.focus();
          return false;
        }
        else if(user_form.fhp.value=="")
        {
          alert("핸드폰 번호를 입력해주세요.");
          user_form.fhp.focus();
          return false;
        }
        else if(user_form.femail.value=="")
        {
          alert("이메일 주소를 입력해주세요.");
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
                
                  
                  <a href="./mypage.php" title="User" class="wpex-user wpex-social-btn wpex-social-btn-style-none" target="_self">
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
    					<li class="on">
    						<strong> 회원정보수정 </strong>
    					</li>
    					
    					<li>
    						<a href="../php/out.php">회원탈퇴</a>
    					</li>
    				</ul>
    			</nav>
    			<form name="user_form" action="update_db.php" method="post" onsubmit="return chk_input()" class="member-form">
    				<h3> 정확하게 기재해 주세요. </h3>
    				<ul>
    					<li>
    						<label for="id">아이디</label>
    						<div>
                  <?php
                    echo $s;
                  ?>
                </div>
    					</li>
    					<li>
    						<label for="password">기존비밀번호</label>
    						<input type="password" name="fpasswd" id="pwd" >
    					</li>
    					<li>
    						<label for="password">새비밀번호</label>
    						<input type="password" name="fnewpasswd" id="new-pwd" >
    					</li>
    					<li>
    						<label for="password">새비밀번호확인</label>
    						<input type="password" name="fnewpasswd_re" id="new-pwd2" >
    					</li>
    					<li>
    						<label for="name">성명</label>
    						<div class="my-name">
                  <?php
                    $sql="select user_name as '이름' from tbl_user where user_id='".$s."'";
                    $result=mysqli_query($conn, $sql);
                    $row_name=mysqli_fetch_assoc($result);
                    echo $row_name['이름'];
                  ?>
                </div>
    					</li>
    					<li>
    						<label for="mp">핸드폰 번호</label>
    						<div class="my-phone">
                  <?php
                      $sql="select user_hp as '핸드폰번호' from tbl_user where user_id='".$s."'";
                    $result=mysqli_query($conn, $sql);
                    $row_hp=mysqli_fetch_assoc($result);
                    
                    ?>
    							<input type="text" name="fhp" id="fhp" value="<?php echo $row_hp['핸드폰번호'];?>">
    						</div>
    					</li>
    					<li>
    						<div class="form-inline">
						  		<label for="exampleInputGender">성별 </label>
                  <?php
                      $sql="select user_gender as '성별' from tbl_user where user_id='".$s."'";
                    $result=mysqli_query($conn, $sql);
                    $row_gender=mysqli_fetch_assoc($result);

                    if($row_gender['성별']=='남')
                    {
                    ?>
                      <label class="radio-inline">
                      <input type="radio" name="fsex" id="fsex" value="여" >여자
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="fsex" id="fsex" value="남" checked>남자
                      </label>
                    <?php
                    }
                    else
                    {?>
                      <label class="radio-inline">
                      <input type="radio" name="fsex" id="fsex" value="여" checked>여자
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="fsex" id="fsex" value="남">남자
                      </label>
                    <?php
                    }
                    ?>
							  	
						  	</div>
    					</li>
    					<li>
    						<label>이메일</label>
                <?php
                      $sql="select user_email as '이메일' from tbl_user where user_id='".$s."'";
                    $result=mysqli_query($conn, $sql);
                    $row_email=mysqli_fetch_assoc($result);
                    
                    ?>
    						<input type="text" name="femail" id="exampleInputEmail1" value="<?php echo $row_email['이메일'];?>"/>
    					</li>
    				</ul> 
    				
    				<nav class="btngroup">
    					<button type="submit" name="smt" class="ui-sbutton btn-highlight">회원정보 수정</button>
    					<button type="submit" class="ui-sbutton">취소</button>
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