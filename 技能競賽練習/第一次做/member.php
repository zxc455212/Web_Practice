<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Cateogry</title>
</head>

	<?php
		session_start();
		if(isset($_SESSION['member']) == false){
			echo '<script>alert("沒有登入");location.href="index.php"</script>';
		}
	?>
<body>
	<div align="center">
    	<span>會員區域</span>
    </div>
</body>
</html>