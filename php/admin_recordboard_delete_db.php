<!--자기녹음  게시판  글을 삭제처리해주는 코드-->

<?php
	$rb_no=$_GET['rb_no'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
	
	$sql='delete from tbl_recordboard where rb_no='.$rb_no;
	$result=mysqli_query($conn, $sql);

	$sql1='delete from tbl_recordboard_reply where rb_rply_no='.$rb_no;
	$result1=mysqli_query($conn, $sql1);

	
	echo "<script> alert('[삭제성공] 게시글 삭제가 완료되었습니다.');
	location.replace('../php/admin_recordboard.php'); </script>";
?>