<!-- 개인정보 수정하는 페이지-->
<?php
	session_start();
	$s=$_SESSION['user_id'];

	$fpasswd=trim($_POST['fpasswd']);
	$fnewpasswd=trim($_POST['fnewpasswd']);
	$fnewpasswd_re=trim($_POST['fnewpasswd_re']);
	$fhp=trim($_POST['fhp']);
	$fsex=$_POST['fsex'];
	$femail=trim($_POST['femail']);

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($fpasswd=="" || $fnewpasswd=="" || $fnewpasswd!=$fnewpasswd_re)
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="select count(*) from testdb.tbl_user where user_id='".$s."' and user_pw='".$fpasswd."' ";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$reg_num=$row['count(*)'];

	if($reg_num<=0)
	{
		echo "<script> alert('기존의 패스워드가 일치하지 않습니다.'); history.back(); </script>";
		die;
	}


	$sql="update testdb.tbl_user set user_pw='".$fnewpasswd."' where user_id='".$s."' ";
	$result=mysqli_query($conn, $sql);

	$sql="update testdb.tbl_user set user_hp='".$fhp."' where user_id='".$s."'";
	$result=mysqli_query($conn, $sql);
	
	$sql="update testdb.tbl_user set user_gender='".$fsex."' where user_id='".$s."' ";
	$result=mysqli_query($conn, $sql);
	
	$sql="update testdb.tbl_user set user_email='".$femail."' where user_id='".$s."' ";
	$result=mysqli_query($conn, $sql);
	
	mysqli_close($conn);

	echo "<script> alert('[수정성공] 수정이 완료되었습니다.');
	location.replace('../php/mypage.php'); </script>";
?>