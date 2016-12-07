<?php

    require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
    
    $rb_no=$_GET['rb_no'];


		$sql='update tbl_recordboard set rb_hits=rb_hits+1 where rb_no='.$rb_no;
		$result=mysqli_query($conn, $sql) or die("좋아요 수 에러");

		$sql1='update tbl_recordboard set rb_views=rb_views-1 where rb_no='.$rb_no;
		$result1=mysqli_query($conn, $sql1) or die("sql1 error");

	
?>
	<script>
		alert('좋아요가 반영되었습니다.');
		location.replace("./recordboard_in.php?rb_no=<?php echo $rb_no; ?>");
	</script>