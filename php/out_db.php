<?php
	session_start();
	$user_id=$_SESSION['user_id'];
	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	$user_pw=trim($_POST['fpassword']);
	$user_reason=$_POST['freason'];

	$sql="select user_pw as '아이디' from tbl_user where user_id='".$user_id."' and user_pw='".$user_pw."' ";
	$result=mysqli_query($conn, $sql);
	$row_id_pw=mysqli_fetch_assoc($result);

	//패스워드가 일치하지 않을 경우
	if(empty($row_id_pw['아이디']))
	{
		echo "<script>alert('패스워드가 일치하지 않습니다.'); history.back(); </script>";
	}

	//패스워드가 일치할 경우 회원탈퇴처리
	else
	{
		$sql="update tbl_user set user_reason='".$user_reason."' where user_id='".$user_id."' ";
		$result=mysqli_query($conn, $sql);

		$sql="update tbl_user set user_leave='1' where user_id='".$user_id."' ";
		$result=mysqli_query($conn, $sql);

		$sql="update tbl_user set user_leave_date=now() where user_id='".$user_id."' ";
		$result=mysqli_query($conn, $sql);

		mysqli_close($conn);

		echo "<script> alert('[탈퇴성공] 탈퇴가 완료되었습니다.');
		location.replace('../php/main.php'); </script>";
	}
?>