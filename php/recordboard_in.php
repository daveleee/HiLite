<!-- 2015-12-12 오후 5:50 -->
<?php
	session_start();
	$s=$_SESSION['user_id'];
	echo $s." 님 환영합니다.";

    require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
    
    $rb_no=$_GET['rb_no'];

    $sql='update tbl_recordboard set rb_views=rb_views+1 where rb_no='.$rb_no;
    $result=mysqli_query($conn, $sql) or die("조회수 올리기 에러");

// SELECT * FROM tbl_recordboard, tbl_recordboard_reply where rb_no=rb_rply_no and rb_no= 게시글에 대한 댓글 없으면 아무것도 안뽑아내고 댓글 있으면 *다뽑아냄 


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

            $(function(){
            $( "#list" ).click(function( event ) {
                location.href='../php/recordboard.php';
            });

            
        	});
			
            function chk_input()
            {
                if(user_form.rply_text.value=="")
                {
                    alert("댓글 입력이 되지 않았습니다.");
                    user_form.rply_text.focus();
                    return false;
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
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ARTISTS <span class="caret"></span></a>
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
    		<h1 class="page-header-title wpex-clr" itemprop="headline">자기녹음게시판</h1>
    	</div>
    </header>
    
    <div class="scbd fbd-in">
    	<div id="lay-hd" class="lay-hd">
    		<div class="hgroup">
    			<h1>자기녹음게시판</h1>
    		</div>
    	</div>
    	
<!--게시글 내용 푸싱 --> 	
<?php
	$sql1='select * from tbl_recordboard where rb_no='.$rb_no;
	$result1=mysqli_query($conn, $sql1) or die("게시글 내용 푸싱 에러");
	while($row1=mysqli_fetch_assoc($result1))
	{
?>
	    	<div class="det">
	    		<div class="hgroup">
	    			<div class="title">
	    				<strong><?php echo $row1['rb_title']; ?></strong>
	    			</div>
	    			<dl>
	    				<dt>
	    					<span>작성자:<?php echo $row1['rb_id']; ?></span>
	    					<span>조회수:<?php echo $row1['rb_views']; ?></span>
	    				</dt>
	    				<dd>
	    					<span><?php echo $row1['rb_date']; ?></span>
	    				</dd>
	    			</dl>
	    		</div>
	    		<div id="conbody" class="conbody">
	    			<?php echo $row1['rb_text']; ?>
	    		</div>
	    		
	    		<br><br>
	    		
	    		<audio controls>
	    			<source src="../sound/<?php echo $row1['rb_path']; ?>" type="audio/wav"></source>
	    		</audio>

		<p><h5><?php echo $row1['rb_hits']; ?>명이 이 음원을 좋아합니다.</h5></p>

		<form action="./rb_hits.php?rb_no=<?php echo $rb_no; ?>" method="POST">
		<button type = "submit" value = "좋아요버튼" name="rb_hits">좋아요</button>
		</form>


		</div>
		
<?php
	}
?>
</div>
<!-- //게시글 내용 푸싱 끝 -->

<!--댓글 시작-->    		

    		<div class="btngroup"></div>
    		<br>
    		<div class="ui-toggle">
    			<div class="hd">
    				<h1>댓글</h1>
    			</div>

<!--댓글 내용 푸싱-->
<?php
	$sql2='SELECT * FROM tbl_recordboard, tbl_recordboard_reply WHERE rb_no=rb_rply_no and rb_no='.$rb_no;
	$result2=mysqli_query($conn, $sql2);
	while($row2=mysqli_fetch_assoc($result2))
	{
?>
                    <div class="com_align">
                        <span style="color:#000000; text-align: left;">작성자: 
                            <?php echo $row2['rb_rply_id']?>
                        </span>
                        <span style="color:#000000; text-align: left;">작성일: 
                            <?php echo $row2['rb_rply_date']?>
                        </span>
                        <p style="color:#000000; text-align: left;">
                            <?php echo $row2['rb_rply_text']?></p>
                    </div>
<!-- 댓글 내용 푸싱 끝-->
 <?php
 	}
 ?>   
<!-- 댓글 내용 작성 폼-->
               <form name="user_form" action="./add_db_rb_in_reply.php?rb_no=<?php echo $rb_no; ?>" method="post" onsubmit="return chk_input()">
                <table class="table table-condensed">
                        <tr>
                            <td>
                                <span class="form-inline" role="form">
                                    <p>
                                        <div class="form-group">
                                            <input name="rply_id" id="rply_id" class="form-control" type="text" value="<?php echo $s; ?>" readonly>
                                        </div>
                                    </p>
                                    <textarea id="rply_text" name="rply_text" class="form-control col-lg-12" style="width:100%" rows="4"></textarea>
                                    
                                </span>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td>
                                    <span style='float:right'>
                                        <button type="button" id="list" class="btn btn-default">목록</button>
                                        <button type="submit" id="submit" name="submit" class="btn btn-default">확인</button>
                                    
                                    </span>        
                                </td>
                            </tr>
                        </thead>
                    </table>

                </form>

               </div>
<!-- 댓글 끝-->

 
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