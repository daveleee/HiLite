<?php
	$user_no=$_GET['user_no'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	$sql1="select user_leave from tbl_user where user_no='".$user_no."'";
	$result1=mysqli_query($conn, $sql1);
	$row1=mysqli_fetch_assoc($result1);

	if($row1['user_leave']=='1')
	{
		echo "<script> alert('이미 탈퇴처리 된 회원입니다.'); history.back(); </script>";
		die;
	}
	else
	{
		$sql2="update tbl_user set user_leave='1' where user_no='".$user_no."'";
		$result2=mysqli_query($conn, $sql2);

		$sql3="update tbl_user set user_leave_date=now() where user_no='".$user_no."'";
		$result3=mysqli_query($conn, $sql3);

		mysqli_close($conn);

		echo "<script> alert('[탈퇴성공] 탈퇴처리가 완료되었습니다.');
		location.replace('../php/admin_member.php'); </script>";
	}
?>