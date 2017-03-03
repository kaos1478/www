<?php
setcookie("color","blue",time()+3600);
//Apresentação
echo "Hello ".$_COOKIE['name'];
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="<?php echo $_COOKIE['color']; ?>">
</body>
</html>