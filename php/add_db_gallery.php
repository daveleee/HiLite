<!-- 관리자가 사진을 추가할 때 디비에 저장되는 코드-->
<?php
	$fartists=$_POST['fartists'];
	$fimgpath=$_POST['fimgpath'];


	require_once($_SERVER["DOCUMENT_ROOT"] . '/hilite/config.php');

	if($fimgpath=="")
	{
		echo "<script> alert('*필수 입력사항은 반드시 입력해야 합니다.'); history.back(); </script>";
		die;
	}

	$sql="insert into tbl_gallery (gal_name, gal_imgpath, gal_date) ";
	$sql.="values ('$fartists', '$fimgpath', now())";
	$result=mysqli_query($conn, $sql);
	//tot_row=mysql_affected_rows();
	mysqli_close($conn);

	echo "<script> alert('[등록성공] 사진등록이 완료되었습니다.');
	location.replace('../php/admin_gallery.php'); </script>";
?>