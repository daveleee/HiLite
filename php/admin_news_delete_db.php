<!-- 뉴스 게시판  글을 삭제처리해주는 코드-->

<?php
	$news_no=$_GET['news_no'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
	$sql='delete from tbl_news where news_no='.$news_no;
	$result=mysqli_query($conn, $sql);

	$sql1='delete from tbl_gallery where gal_news_no='.$news_no;
	$result1=mysqli_query($conn, $sql1);

	mysqli_close($conn);

	echo "<script> alert('[삭제성공] 게시글 삭제가 완료되었습니다.');
	location.replace('../php/admin_news.php'); </script>";
?>