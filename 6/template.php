<?php

session_start();
require_once ("db.php");
require_once ("config.php");
?>

<html>
	<head>
		<meta  charset="utf8" />
		<title>My blog</title>
	</head>
	<body>
		<?= $body; ?>
	</body>
</html>

