<?php 
	require'..\helper\functions.php';
	$id = $_GET['Id'];

	if (hapus($id)>0) {
		echo "<script>
				alert('data Berhasil dihapus');
				document.location.href ='index.php';
			 </script>";
	}else{
		echo  "<script>
				alert('data gagal dihapus');
				document.location.href ='index.php';
			 </script>";;
	}
 ?>