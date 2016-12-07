<!-- 관리자가 공지글을 작성하면 디비에 저장하는 코드-->
<?php
	session_start();
	$s=$_SESSION['user_id'];
	
	$ftitle=$_POST['ftitle'];
	$ftext=$_POST['ftext'];
	$fimgpath=$_POST['fimgpath'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($ftitle=="" || $ftext=="")
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="insert into tbl_notice (notice_id, notice_title, notice_date, notice_text, notice_views) ";
	$sql.="values ('admin', '$ftitle', now(), '$ftext', '0')";
	$result=mysqli_query($conn, $sql);

	$sql2='select * from tbl_notice order by notice_no desc';
	$result2=mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);
	echo $row2['notice_no'];

	$sql1="insert into tbl_gallery (gal_name, gal_imgpath, gal_date, gal_notice_no) ";
	$sql1.="values ('notice', '$fimgpath', now(), '".$row2['notice_no']."')";
	$result1=mysqli_query($conn, $sql1);


	//tot_row=mysql_affected_rows();
	mysqli_close($conn);

	echo "<script> alert('[등록성공] 공지 게시물이 등록되었습니다.');
	location.replace('../php/admin_notice.php'); </script>";
?>