<!--자유 게시판  글을 삭제처리해주는 코드-->

<?php
	$fb_no=$_GET['fb_no'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
	$sql='delete from tbl_freeboard where fb_no='.$fb_no;
	$result=mysqli_query($conn, $sql);

	$sql1='delete from tbl_freeboard_reply where fb_rply_no='.$fb_no;
	$result1=mysqli_query($conn, $sql1);

	mysqli_close($conn);

	echo "<script> alert('[삭제성공] 게시글 삭제가 완료되었습니다.');
	location.replace('../php/admin_freeboard.php'); </script>";
?>