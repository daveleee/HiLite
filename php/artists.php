<?php
session_start();
$s=$_SESSION['user_id'];

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
      
      <script type="text/javascript">
        function go_url(url) {
          window.location.href = url;
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
        <h1 class="page-header-title wpex-clr" itemprop="headline">ARTISTS</h1>
      </div>
    </header>
    
    <select class="form-control" onchange="go_url(this.options[this.selectedIndex].value)">
    <option>가수를 선택하세요.</option>
<?php
  $sql1='select mus_ename from tbl_musician';
  $result1=mysqli_query($conn, $sql1);
  
  // while($row0=mysqli_fetch_assoc($result1))
  // {
  //   echo $row0['mus_ename'];
  // }


  // //artists_in.php에 앨범명을 넘겨주기 위한 쿼리문. 앨범명을 artists_in에서 받아 앨범에 대한 곡을 검색한다.
  // $sql2='select distinct song_aname from tbl_song where song_ename='.$mus_ename;
  // $result2=mysqli_query($conn, $sql2);
  // $row2=mysqli_fetch_assoc($result2);

  while($row1=mysqli_fetch_assoc($result1))
  {
     $mus_ename=$row1['mus_ename'];
?>
    <option value="./artists_in.php?mus_ename=<?php echo $mus_ename; ?>">
      <?php
        echo $row1['mus_ename'];
      ?>
    </option>
<?php
  }
?>
  </select>
    <br />
    <br>
    <hr>
    
    <div class="family">
      <div class="art-inner">
        <div class="fam-1st" style="text-align:left;">
          <div class="teacher-wrap clearfix">
            <div class="page">
              <div class="tc-spot clearfix">
                <div class="f-photo">
                  <img src="../img/artists/B-free/B-free.png">
                </div>
                <div class="f-total">
                  <span class="name">아티스트</span>
                  <span class="rname">B-free</span>
                
                  <ul class="brisum clearfix">
                    <li>
                      <span>데뷔앨범</span>
                    </li>
                    <li>
                      <span>2009년 [자유의 뮤직]</span>
                    </li>
                    <li>
                      <span>소속</span>
                    </li>
                    <li>
                      <span>하이라이트레코즈</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br>
          <hr style="color:#ffffff;">
          
          
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  아티스트 소개
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <ul class="brisum clearfix">
                    <li>
                      <span>실명</span>
                    </li>
                    <li>
                      <span>최성호</span>
                    </li>
                    <li>
                      <span>영문 활동명</span>
                    </li>
                    <li>
                      <span>B-free</span>
                    </li>
                    <li>
                      <span>나이</span>
                    </li>
                    <li>
                      <span>31세 (만 30세)</span>
                    </li>
                    <li>
                      <span>별자리</span>
                    </li>
                    <li>
                      <span>사자자리</span>
                    </li>
                    <li>
                      <span>띠</span>
                    </li>
                    <li>
                      <span>소띠</span>
                    </li>
                    <li>
                      <span>생년월일</span>
                    </li>
                    <li>
                      <span>1985년 8월 19일</span>
                    </li>
                  </ul>
               </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    앨범
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
              
              
              
              
              
              
                <div class="media">
              <div class="media-left">
                <img class="media-object" src="../img/artists/B-free/만나면.png" alt="...">
              </div>
              <div class="media-body">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          만나면
                        </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        <ul class="brisum2 clearfix" style="padding-left: 0px;">
                        <li style="width: 5%">
                          <span>1</span>
                        </li>
                        <li style="width: 65%">
                          <span>만나면</span>
                        </li>
                        <li style="width: 30%">
                          <span>만나면</span>
                        </li>
                      </ul>
                      </div>
                  </div>
                </div>
                <span>B-free</span>
              </div>
            </div>
            
            
            
            
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="../img/artists/B-free/Kawasaki.png" alt="...">
              </div>
              <div class="media-body">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          Kawasaki
                        </a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">
                        <ul class="brisum2 clearfix" style="padding-left: 0px;">
                        <li style="width: 5%">
                          <span>1</span>
                        </li>
                        <li style="width: 65%">
                          <span>Kawasaki</span>
                        </li>
                        <li style="width: 30%">
                          <span>Kawasaki</span>
                        </li>
                        <li style="width: 5%">
                          <span>2</span>
                        </li>
                        <li style="width: 65%">
                          <span>Yoga Flame</span>
                        </li>
                        <li style="width: 30%">
                          <span>Kawasaki</span>
                        </li>
                      </ul>
                      </div>
                  </div>
                </div>
                <span>B-free</span>
              </div>
            </div>
            
            
            
            
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="../img/artists/B-free/love.png" alt="...">
              </div>
              <div class="media-body">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                          Love Last Forever
                        </a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body">
                        <ul class="brisum2 clearfix" style="padding-left: 0px;">
                        <li style="width: 5%">
                          <span>1</span>
                        </li>
                        <li style="width: 65%">
                          <span>Love Last Forever(Feat. Coke Jazz)</span>
                        </li>
                        <li style="width: 30%">
                          <span>Love Last Forever</span>
                        </li>
                        <li style="width: 5%">
                          <span>2</span>
                        </li>
                        <li style="width: 65%">
                          <span>Love Last Forever(Radio Edit)</span>
                        </li>
                        <li style="width: 30%">
                          <span>Love Last Forever</span>
                        </li>
                        <li style="width: 5%">
                          <span>3</span>
                        </li>
                        <li style="width: 65%">
                          <span>Love Last Forever(Inst.)</span>
                        </li>
                        <li style="width: 30%">
                          <span>Love Last Forever</span>
                        </li>
                      </ul>
                      </div>
                  </div>
                </div>
                <span>B-free</span>
              </div>
            </div>
            
            
            
            
              </div>
            </div>
          </div>
        </div>
        </div>
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