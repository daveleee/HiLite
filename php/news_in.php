<?php
	session_start();
	$s=$_SESSION['user_id'];
	echo $s." 님 환영합니다.";

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	$news_no=$_GET['news_no'];

	$sql1='update tbl_news set news_views=news_views+1 where news_no='.$news_no;
	$result1=mysqli_query($conn, $sql1) or die("result error");
	//업데이트를 해주는거에는 뿌려주는게 없으니까 fetch_assoc을 할 필요없는듯....

	
	//이부분이 디비에서 필요한 정보만 뽑아내서 뿌려주는 부분.
	// $sql2="select news_views, news_title, news_id, news_date, news_text, news_views, gal_imgpath from tbl_news, tbl_gallery where news_no=gal_news_no and news_no=".$news_no;
	// $result2=mysqli_query($conn, $sql2);
	// $row=mysqli_fetch_assoc($result2);


	
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
	    
	    <script type="text/javascript">
	    	function go_back() {
	    		location.href="./news.php";
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
    		<h1 class="page-header-title wpex-clr" itemprop="headline">NEWS</h1>
    	</div>
    </header>
    
<!--뉴스인 데이터 푸싱 시작-->
<?php
	$sql2="select count(*) from tbl_news, tbl_gallery where news_no=gal_news_no and news_no=".$news_no;
	$result2=mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);
	if($row2['count(*)']==0)
	{
		$sql3="select news_views, news_title, news_id, news_date, news_text, news_views, gal_imgpath from tbl_news, tbl_gallery where news_no=".$news_no;
		$result3=mysqli_query($conn, $sql3);
		$row3=mysqli_fetch_assoc($result3)
	
?>
			<div class="notice-wrap">
	    	<div class="single-title">
	    		<h1><?php echo $row3['news_title']; ?></h1>
	    		<div class="clear"></div>
	    			<div class="single-info">
	    				<div class="single-data">	
	    					<?php echo $row3['news_date']; ?>
						</div>
	    				<div class="single-tag">
	    					작성자:
	    					
	    						<?php echo $row3['news_id']; ?>
	    					
	    					
	    					<span>조회수:<?php echo $row3['news_views']; ?></span>
	    				</div>
	    			</div>
	    		
	    		<div class="clear"></div><br>
	    		<div class="single-content">
	    			<p>
	    				<br style="color: #444444;">
	    				<span style="color: #444444;">
<?php
	    						echo $row3['news_text'];
?>
	    				</span>
	    			</p>
	    			<button type="button" onclick="go_back()" class="btn btn-default" style="float:right;">
			    		이전
			    	</button>
	    		</div>
	    	</div>
	    </div>
<?php
		
	}
		

	else
	{
		$sql3="select news_views, news_title, news_id, news_date, news_text, news_views, gal_imgpath from tbl_news, tbl_gallery where news_no=gal_news_no and news_no=".$news_no;
		$result3=mysqli_query($conn, $sql3);
		while($row3=mysqli_fetch_assoc($result3))
		{
?>
			 <div class="notice-wrap">
		    	<div class="single-title">
		    		<h1><?php echo $row3['news_title']; ?></h1>
		    		<div class="clear"></div>
		    			<div class="single-info">
		    				<div class="single-data">	
		    					<?php echo $row3['news_date']; ?>
							</div>
		    				<div class="single-tag">
		    					작성자:
		    					
		    						<?php echo $row3['news_id']; ?>
		    					
		    					
		    					<span>조회수:<?php echo $row3['news_views']; ?></span>
		    				</div>
		    			</div>
		    		
		    		<div class="clear"></div><br>
		    		<div class="single-content">
		    			<p>
<?php

?>
		    				<span class="no_photo" style="color: #444444;">
		    					<img id="img1" src="<?php echo $row3['gal_imgpath']; ?>">
		    				</span>
		    				<br style="color: #444444;">
		    				<span style="color: #444444;">
<?php
		    						echo $row3['news_text'];
?>
		    				</span>
		    			</p>
		    		</div>
		    	</div>
		    </div>
<?php
			}
	}
?>			

	
		

   
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