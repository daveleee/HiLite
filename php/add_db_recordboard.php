<!--유저 관점에서 자기녹음게시판을 이용하여 글작성을 할 경우 디비에 등록해주는 코드-->

<?php
	session_start();
	$s=$_SESSION['user_id'];
	
	$rtitle=$_POST['rtitle'];
	$rtext=$_POST['rtext'];
	$rpath=$_POST['rpath'];


	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($rtitle=="" || $rtext=="" || $rpath=="")
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="insert into tbl_recordboard (rb_id, rb_title, rb_date, rb_text, rb_views, rb_hits, rb_path) ";
	$sql.="values ('$s', '$rtitle', now(), '$rtext', '0', '0', '$rpath')";
	$result=mysqli_query($conn, $sql);
	//tot_row=mysql_affected_rows();
	mysqli_close($conn);

	echo "<script> alert('[등록성공] 음원이 등록되었습니다.');
	location.replace('../php/recordboard.php'); </script>";
?>