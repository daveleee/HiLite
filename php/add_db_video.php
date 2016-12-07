<!--관리자에서 비디오 경로를 추가하여 디비에 인서트 하는 코드-->

<?php
	$fartists=$_POST['fartists'];
	$fvidpath=$_POST['fvidpath'];


	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($fvidpath=="")
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="insert into tbl_video (vid_name, vid_vidpath, vid_date) ";
	$sql.="values ('$fartists', '$fvidpath', now())";
	$result=mysqli_query($conn, $sql);
	//tot_row=mysql_affected_rows();
	mysqli_close($conn);

	echo "<script> alert('[등록성공] 동영상 등록이 완료되었습니다.');
	location.replace('../php/admin_video.php'); </script>";
?>