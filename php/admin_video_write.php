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
	    		location.href="./admin_video.php"
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
    		<h1 class="page-header-title wpex-clr" itemprop="headline">VIDEO</h1>
    	</div>
    </header>
    
    <div class="member-wrap">
    	<div class="mypage join">
    		<section class="body member">



    			<form name="member-form" action="./add_db_video.php" method="post" class="admin-member-form">
    				<ul>
    					<li>
    						<label for="name">아티스트 선택</label>
    						
    						<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="all" checked>ALL
						  	</label>
						  	
						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="Paloalto">Paloalto
						  	</label>

						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="B-free">B-free
						  	</label>

						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="Huckleberry P">Huckleberry P
						  	</label>

						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="Reddy">Reddy
						  	</label>

						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="Okasian">Okasian
						  	</label>

						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="Keith Ape">Keith Ape
						  	</label>

						  	<label class="radio-inline">
						  		<input type="radio" name="fartists" id="fartists" value="G2">G2
						  	</label>
    					</li>
    					<li>
    						<label for="image">동영상 경로</label>
    						<input type="text" class="form-control" name="fvidpath" id="video_vid" />
    					</li>
    					
    				</ul> 
    				
    				<nav class="btngroup">
    					<button type="submit" class="btn btn-default">추가</button>
    					<button type="button" class="btn btn-default" onclick="go_back()">이전</button>
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
    		<a href="./admin_contact.php" class="text-muted">CONTACT</a> 
    		<span class="text-muted">페이지를 확인하세요.</span>
    	</div>
    </footer>

		
	</body>
</html>