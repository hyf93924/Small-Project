<html>
	<head>
		<title>留言板</title>
		<meta charset="utf-8">
	</head>
	<body>
		<center>
			<h2>留言板</h2>
			<a href="index.php">添加留言</a>
			<a href="show.php">查看留言</a>
			<hr width="90%" />

			<h3>添加留言</h3>
			<?php

				//获取留言信息
				$title=$_POST["title"];
				$author=$_POST["author"];
				$content=$_POST["content"];
				$ip=$_SERVER["REMOTE_ADDR"];
				$addtime=time();

				//拼装信息
				$ly="{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";

				//将留言放入liuyan.txt中
				$info=file_get_contents("liuyan.txt");
				file_put_contents("liuyan.txt", $info.$ly);

				echo "留言成功";

			?>
		</center>
	</body>
</html>