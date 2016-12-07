<!-- 공지사항 내용 수정하는 페이지-->
<?php
	session_start();
	$s=$_SESSION['user_id'];

	$notice_no=$_GET['notice_no'];
	$ftitle=$_POST['ftitle'];
	$ftext=$_POST['ftext'];
	$fimgpath=$_POST['fimgpath'];

	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');
	if($ftitle=="" || $ftext=="")
	{
		echo "<script> alert('제목 혹은 내용을 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	else if($fimgpath)
	{
		$sql='update tbl_notice set notice_title="'.$ftitle.'" where notice_no="'.$notice_no.'"';
		$result=mysqli_query($conn, $sql);

		$sql1='update tbl_notice set notice_text="'.$ftext.'" where notice_no="'.$notice_no.'"';
		$result1=mysqli_query($conn, $sql1);

		$sql3='select gal_imgpath from tbl_gallery where notice_no='.$notice_no;
		$result3=mysqli_query($conn, $sql3);
		$row3=mysqli_fetch_assoc($result3);

		$sql2="INSERT INTO `testdb`.`tbl_gallery` (`gal_name`, `gal_imgpath`, `gal_date`, `gal_notice_no`) VALUES ('notice', '".$fimgpath."', now(), '".$notice_no."')";
		$result2=mysqli_query($conn, $sql2);

		mysqli_close($conn);

		echo "<script> alert('[수정성공] 게시글 수정이 완료되었습니다.');
	location.replace('../php/admin_notice.php'); </script>";
	}
	else if(!$fimgpath)
	{
		$sql='update tbl_notice set notice_title="'.$ftitle.'" where notice_no="'.$notice_no.'"';
		$result=mysqli_query($conn, $sql);

		$sql1='update tbl_notice set notice_text="'.$ftext.'" where notice_no="'.$notice_no.'"';
		$result1=mysqli_query($conn, $sql1);

		mysqli_close($conn);

		echo "<script> alert('[수정성공] 게시글 수정이 완료되었습니다.');
	location.replace('../php/admin_notice.php'); </script>";
	}
?>	