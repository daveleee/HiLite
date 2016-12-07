<!-- 게시판 글을 삭제처리해주는 코드-->

<?php
	$notice_no=$_GET['notice_no'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
	$sql='delete from tbl_notice where notice_no='.$notice_no;
	$result=mysqli_query($conn, $sql);

	$sql1='delete from tbl_gallery where gal_notice_no='.$notice_no;
	$result1=mysqli_query($conn, $sql1);

	mysqli_close($conn);

	echo "<script> alert('[삭제성공] 게시글 삭제가 완료되었습니다.');
	location.replace('../php/admin_notice.php'); </script>";
?>