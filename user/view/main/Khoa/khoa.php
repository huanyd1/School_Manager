<?php
	require_once "../../../../config/config.php";
	session_start();
    if ($_SESSION["user"] ==""){
        header("location:../login/login.php");
        echo "<script>alert(\"Bạn cần đăng nhập trước\");</script>";
    }
?>
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>

	<body>
		<?php
			if(isset($_GET['page_layout'])){
				switch ($_GET['page_layout']){
					case 'danhsach':
						require_once 'manage/list.php';
						break;

					case 'them':
						require_once 'manage/add.php';
						break;

					case 'sua':
						require_once 'manage/edit.php';
						break;

					case 'xoa':
						require_once 'manage/delete.php';
						break;

					default:
						require_once 'manage/list.php';
						break;	
				}
			}else{
				require_once 'manage/list.php';
			}
		?>
	</body>

</html>