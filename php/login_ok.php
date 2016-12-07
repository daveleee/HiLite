<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
	


	$user_id=trim($_POST['exampleInputId1']);		//trim은 공백없애주느는 코드
	$user_pw=trim($_POST['exampleInputPassword1']);

	
	// 아이디 유효성 체크
	
	// echo $row['아이디']; //테스팅...

	if(empty($user_id) || empty($user_pw))
	{
		echo "<script>alert('아이디 혹은 패스워드가 입력되지 않았습니다.');</script>";
		echo "<script>location.href('../php/login.php');</script>";
	}

	//아이디 존재여부 및 로그인 체크
	$sql="select user_id as '아이디', user_leave from tbl_user where user_id='".$user_id."' and user_pw='".$user_pw."' ";
	$result=mysqli_query($conn, $sql);	//true or false만 알수있음
	
	$row_id_pw=mysqli_fetch_assoc($result);	

	if(empty($row_id_pw['아이디']))
	{
		echo "<script>alert('아이디 혹은 패스워드가 일치하지 않습니다.');history.back();</script>";
	}

	else if($row_id_pw['user_leave']=='1')
	{
		echo "<script>alert('탈퇴처리된 회원계정입니다.');history.back();</script>";
	}
	//로그인 성공
	else
	{
		session_start();
		$_SESSION['user_id']=$user_id;

		//관리자 계정 접속
		if($user_id=='admin')
		{
			echo "<script> document.location.href='../php/admin_member.php'; </script>"; 
		}


		//일반 접속
		echo "<script> document.location.href='../php/login_main.php'; </script>"; 
	}

	//DB연결 해제
mysqli_close($conn);
?>
