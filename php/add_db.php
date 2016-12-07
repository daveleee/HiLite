<!--회원 가입을 시도하게 될 경우 정보를 디비에 저장하는 코드-->
<!--업데이트 정보: 2015-12-11 04:09 -->
<?php
	$fuserid=trim($_POST['fuserid']);
	$fpasswd=trim($_POST['fpasswd']);
	$fpasswd_re=trim($_POST['fpasswd_re']);
	$fname=trim($_POST['fname']);
	$fhp=trim($_POST['fhp']);
	$fsex=$_POST['fsex'];
	$femail=trim($_POST['femail']);

	$userip=$_SERVER['DOCUMENT_ROOT'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($fuserid=="" || $fname=="" || $fpasswd=="" || $fpasswd_re=="" || $fpasswd!=$fpasswd_re)
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="select count(*) from tbl_user where user_id='.$fuserid.'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$reg_num=$row['count(*)'];

	if($reg_num>0)
	{
		echo "<script> alert('[중복된 아이디] 다른 아이디를 선택하세요.'); history.back(); </script>";
		die;
	}

	$sql="insert into tbl_user (user_id, user_pw, user_name, user_hp, user_gender, user_email, user_date, user_leave) ";
	$sql.="values ('$fuserid', '$fpasswd', '$fname', '$fhp', '$fsex', '$femail', now(), '0')";
	$result=mysqli_query($conn, $sql);
	//tot_row=mysql_affected_rows();
	mysqli_close($conn);

	echo "<script> alert('[등록성공] 가입을 축하드립니다.');
	location.replace('../php/login.php'); </script>";

?>