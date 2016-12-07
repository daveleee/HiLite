<!-- 동영상의  넘버와 아티스트 이름 받아와 레코드 삭제처리해주는 코드-->

<?php
	$mus_ename=$_GET['mus_ename'];
	$vid_no=$_GET['vid_no'];
	
	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	
	 $sql='delete from tbl_video where vid_no='.$vid_no;
	 $result=mysqli_query($conn, $sql);

	 mysqli_close($conn);
	echo "<script> alert('[삭제성공] 동영상의 삭제가 완료되었습니다.');
	 location.replace('../php/admin_video.php'); </script>";
?>