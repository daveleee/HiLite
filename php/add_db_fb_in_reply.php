
<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	$fb_no=$_GET['fb_no'];
	echo $fb_no;
	$rply_id=$_POST['rply_id'];
	$rply_text=$_POST['rply_text'];

	$sql="insert into testdb.tbl_freeboard_reply (fb_rply_id, fb_rply_date, fb_rply_text, fb_rply_no)";

	$sql.="values ('$rply_id', now(), '$rply_text', '$fb_no')";

	$result=mysqli_query($conn, $sql) or die("리졸트 에러!!");

	// $rply_no=mysql_insert_id();	//방금 인서트한 댓글의 번호를 받아옵니다.

	if($result)
	{ 
		if($rply_id=='admin')
		{
?>
		<script>
			alert('댓글이 정상적으로 작성되었습니다.');
			location.replace("./admin_freeboard_in.php?fb_no=<?php echo $fb_no; ?>");
		</script>
<?php
		}
		else
		{
?>
		<script>
			alert('댓글이 정상적으로 작성되었습니다.');
			location.replace("./freeboard_in.php?fb_no=<?php echo $fb_no; ?>");
		</script>
<?php
		}
	}
	else
	{
		echo '댓글등록 실패!';
	}
?>
