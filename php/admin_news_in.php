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
	// $sql2="select notice_views, notice_title, notice_id, notice_date, notice_text, notice_views, gal_imgpath from tbl_notice, tbl_gallery where notice_no=gal_notice_no and notice_no=".$notice_no;
	// $results2=mysqli_query($conn, $sql2);
	// $row2=mysqli_fetch_assoc($result2);


	
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
	    	function go_back() {
	    		location.href="./php/admin_news.php";
			}
			function del_news() {
	    		location.href="./admin_news_delete_db.php?news_no=<?php echo $news_no?>";
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
           <a class="navbar-brand" href="./admin_member.php">HI-LITE RECORDS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="./admin_member.php">회원관리</a></li>
			  <li><a href="./admin_notice.php">NOTICE</a></li>
			  <li><a href="./admin_news.php">NEWS</a></li>
			  <li class="dropdown">
		          <a href="./admin_artists.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ARTISTS <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
				      <li><a href="./admin_artists.php">Paloalto</a></li>
				      <li><a href="./admin_artists.php">B-free</a></li>
				      <li><a href="./admin_artists.php">Huckleberry P</a></li>
				      <li><a href="./admin_artists.php">Reddy</a></li>
				      <li><a href="./admin_artists.php">Okasian</a></li>
				      <li><a href="./admin_artists.php">Keith Ape</a></li>
				      <li><a href="./admin_artists.php">G2</a></li>
		          </ul>
              </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MULTIMEDIA <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					  <li><a href="./admin_gallery.php">Gallery</a></li>
					  <li><a href="./admin_video.php">Video</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">BOARD <span class="caret"></span></a>
			  	<ul class="dropdown-menu" role="menu">
			  		<li><a href="./admin_recordboard.php">자기녹음게시판</a></li>
			  		<li><a href="./admin_freeboard.php">자유게시판</a></li>
			  	</ul>
			  </li>
	          <li><a href="./admin_contact.php">Contact</a></li>
          	  
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
    
    <div class="member-wrap">
    	<div class="mypage join">
    		<section class="body member">
<?php
	$sql2='select * from tbl_news, tbl_gallery where news_no=gal_news_no and news_no='.$news_no;
	$result2=mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);

	if(empty($row2['gal_imgpath']))		//이미지 경로 없으면 
	{
		$sql3='select * from tbl_news where news_no='.$news_no;
		$result3=mysqli_query($conn, $sql3);
		$row3=mysqli_fetch_assoc($result3);
?>
    			<form name="member-form" action="admin_news_update_db.php?news_no=<?php echo $row3['news_no']; ?>" method="post" class="admin-member-form">
    				<ul>
    					<li>
    						<label for="subject">제목</label>
    						<input type="text" class="form-control" name="ftitle" id="news_subject" value="<?php echo $row3['news_title']; ?>" />
    					</li>
    					<li>
    						<label for="content">내용</label>
    						<textarea class="form-control" name="ftext" rows="30"><?php echo $row3['news_text']; ?></textarea>
    					</li>
    					<li>
    						<label for="image">이미지 경로</label>
    						<input type="text" class="form-control" name="fimgpath" id="news_img" />
    					</li>
    					
    				</ul> 
    				
    				<nav class="btngroup">
    					<button type="submit" name="smt" class="btn btn-default">수정</button>
    					<button type="button" class="btn btn-default" onclick="del_news()">삭제처리</button>
    					<button type="button" class="btn btn-default" onclick="go_back()">이전</button>
    				</nav>
    			</form>
<?php
	}
	else 	// 이미지 경로 있으면
	{
		$sql3='select * from tbl_news where news_no='.$news_no;
		$result3=mysqli_query($conn, $sql3);
		$row3=mysqli_fetch_assoc($result3);

		$sql4='select * from tbl_gallery where gal_news_no='.$news_no;
		$result4=mysqli_query($conn, $sql4);
		$row4=mysqli_fetch_assoc($result4);
?>
    			<form name="member-form" action="admin_news_update_db2.php?news_no=<?php echo $row3['news_no']; ?>" method="post" class="admin-member-form">
    				<ul>
    					<li>
    						<label for="subject">제목</label>
    						<input type="text" class="form-control" name="ftitle" id="news_subject" value="<?php echo $row3['news_title']; ?>" />
    					</li>
    					<li>
    						<label for="content">내용</label>
    						<textarea class="form-control" name="ftext" rows="30"><?php echo $row3['news_text']; ?></textarea>
    					</li>
    					<li>
    						<label for="image">이미지 경로</label>
    						<input type="text" name="fimgpath" class="form-control" id="news_img" value="<?php echo $row4['gal_imgpath']; ?>"/>
    					</li>
    					
    				</ul> 
    				
    				<nav class="btngroup">
    					<button type="submit" name="smt" class="btn btn-default">수정</button>
    					<button type="button" class="btn btn-default" onclick="del_news()">삭제처리</button>
    					<button type="button" class="btn btn-default" onclick="go_back()">이전</button>
    				</nav>
    			</form>
<?php
	}
?>
    		</section>
    	</div>
    </div>
    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    <footer class="footer">
    	<div class="container">
    		<p class="text-muted">HI-LITE RECORDS</p>
    		<span class="text-muted">관리자 정보는</span> 
    		<a href="./admin_contact.php" class="text-muted">CONTACT</a> 
    		<span class="text-muted">페이지를 확인하세요.</span>
    	</div>
    </footer>

		
	</body>
</html>