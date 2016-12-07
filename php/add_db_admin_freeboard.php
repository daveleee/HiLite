<?php
	session_start();
	$s=$_SESSION['user_id'];
	
	$ftitle=trim($_POST['ftitle']);
	$ftext=trim($_POST['ftext']);

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
	location.replace('../php/admin_freeboard.php'); </script>";
?>