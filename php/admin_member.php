<?php
session_start();
$s=$_SESSION['user_id'];

echo $s." 님 환영합니다.";

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

 /* 페이징 시작 */
      //페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
      if(isset($_GET['page'])) 
      {
        $page = $_GET['page'];
      } 
      else 
      {
        $page = 1;
      }
      
      $sql1 = 'select count(*) as cnt from tbl_user order by user_no desc';
      $result1 = mysqli_query($conn, $sql1);
      $row1 = mysqli_fetch_assoc($result1);
      
      $allPost = $row1['cnt']; //전체 게시글의 수
      
      $onePage = 10; // 한 페이지에 보여줄 게시글의 수.
      $allPage = ceil($allPost / $onePage); //전체 페이지의 수
      
      if($page < 1 && $page > $allPage) 
      {
    ?>
        <script>
          alert("존재하지 않는 페이지입니다.");
          history.back();
        </script>
    <?php
        exit;
      }
      
      $oneSection = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
      $currentSection = ceil($page / $oneSection); //현재 섹션
      $allSection = ceil($allPage / $oneSection); //전체 섹션의 수
      
      $firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지
      
      if($currentSection == $allSection) 
      {
        $lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
      } 
      else 
      {
        $lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
      }
      
      $prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
      $nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.
      
      $paging = '<ul>'; // 페이징을 저장할 변수
      
      //첫 페이지가 아니라면 처음 버튼을 생성
      if($page != 1) 
      { 
        $paging .= '<li class="page_start"><a href="./freeboard.php?page=1">처음</a></li>';
      }
      //첫 섹션이 아니라면 이전 버튼을 생성
      if($currentSection != 1) 
      { 
        $paging .= '<li class="page_prev"><a href="./freeboard.php?page=' . $prevPage . '">이전</a></li>';
      }
      
      for($i = $firstPage; $i <= $lastPage; $i++) 
      {
        if($i == $page) 
        {
          $paging .= '<li class="page_current">' . $i . '</li>';
        } else 
        {
          $paging .= '<li class="page_page"><a href="./freeboard.php?page=' . $i . '">' . $i . '</a></li>';
        }
      }
      
      //마지막 섹션이 아니라면 다음 버튼을 생성
      if($currentSection != $allSection) 
      { 
        $paging .= '<li class="page_next"><a href="./freeboard.php?page=' . $nextPage . '">다음</a></li>';
      }
      
      //마지막 페이지가 아니라면 끝 버튼을 생성
      if($page != $allPage) 
      { 
        $paging .= '<li class="page_end"><a href="./freeboard.php?page=' . $allPage . '">끝</a></li>';
      }
      $paging .= '</ul>';
      
      /* 페이징 끝 */

      $currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
      $sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문
      
      $sql2 = 'select * from tbl_user order by user_no desc' . $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지
      $result2 = mysqli_query($conn, $sql2);
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
    		<h1 class="page-header-title wpex-clr" itemprop="headline">회원정보</h1>
    	</div>
    </header>
    
    
    
    <article class="free-contents">
    	<div id="scbd" class="scbd co-red mo">
    		<div id="lay-hd" class="lay-hd">
    			<div class="hgroup">
    				<h1>
    					<a>회원정보</a>
    				</h1>
    				
    			</div>
    			
    		</div>
    		<div id="list_board" class="list_board">
    			<ul class="lst-board lst-head">
    				<li>
    					<div class="td col_no">번호</div>
    					<div class="td col_subject">제목</div>
    					
    				</li>
    			</ul>
    			<ul class="lst-board lst-body lay-notice"></ul>
    			<ul class="lst-board lst-body">

<?php
	$sql3='select * from tbl_user order by user_no desc';
	$result3=mysqli_query($conn, $sql3);

	while ($row3=mysqli_fetch_assoc($result3)) 
	{
		
	
?>
    				<li class="clr">
    					
	    					<div class="td col_no">
<?php 
	echo $row3['user_no'];
?>
	    					</div>
	    					<div class="td col_subject">
	    						<div style="padding-left:0px;">
	    							<a href="./admin_member_in.php?user_no=<?php echo $row3['user_no'] ?>">
	    								<span>
<?php
	echo $row3['user_name'];
?>
	    								</span>
	    							</a>
	    						</div>
	    					</div>
	    					
    					</label>
    				</li>
<?php
	}
?>		
    			</ul>
    		</div>
    		
		<div class="paginate">
<!--페이징 처리 시작-->
    			<strong>
            <div class="paging">
              <?php echo $paging;?>
            </div> 
          </strong>

<!-- 페이징 처리 끝 -->
    		</div>

    	</div>
    </article>
    
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