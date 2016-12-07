
<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	$rb_no=$_GET['rb_no'];
	echo $rb_no;
	$rply_id=$_POST['rply_id'];
	$rply_text=$_POST['rply_text'];

	$sql="insert into testdb.tbl_recordboard_reply (rb_rply_id, rb_rply_date, rb_rply_text, rb_rply_no)";

	$sql.="values ('$rply_id', now(), '$rply_text', '$rb_no')";

	$result=mysqli_query($conn, $sql) or die("리졸트 에러!!");

	// $rply_no=mysql_insert_id();	//방금 인서트한 댓글의 번호를 받아옵니다.

	if($result)
	{ 
		if($rply_id=='admin')
		{
?>
		<script>
			alert('댓글이 정상적으로 작성되었습니다.');
			location.replace("./admin_recordboard_in.php?rb_no=<?php echo $rb_no; ?>");
		</script>
<?php
		}
		else
		{
?>
		<script>
			alert('댓글이 정상적으로 작성되었습니다.');
			location.replace("./recordboard_in.php?rb_no=<?php echo $rb_no; ?>");
		</script>
<?php
		}
	}
	else
	{
		echo '댓글등록 실패!';
	}
?>
