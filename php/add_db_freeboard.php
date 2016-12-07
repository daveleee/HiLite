<!--유저 관점에서 자유게시판을 이용하여 글작성을 할 경우 디비에 등록해주는 코드-->

<?php
	session_start();
	$s=$_SESSION['user_id'];
	
	$ftitle=$_POST['ftitle'];
	$ftext=$_POST['ftext'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($ftitle=="" || $ftext=="")
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="insert into tbl_freeboard (fb_id, fb_title, fb_date, fb_text, fb_views) ";
	$sql.="values ('$s', '$ftitle', now(), '$ftext', '0')";
	$result=mysqli_query($conn, $sql);
	//tot_row=mysql_affected_rows();
	mysqli_close($conn);

	echo "<script> alert('[등록성공] 게시물이 등록되었습니다.');
	location.replace('../php/freeboard.php'); </script>";
?>