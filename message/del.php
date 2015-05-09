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

			<h3>删除留言</h3>
			<?php

				//获取传递进来的id
				$id = $_GET['id'];

				//从liuyan.txt中获取信息
				$info = file_get_contents("liuyan.txt");

				//以@@@拆分留言
				$lylist = explode("@@@", $info);

				//用unset删除留言
				unset($lylist[$id]);

				//还原留言为字串，并返回
				$ninfo = implode("@@@", $lylist);
				file_put_contents("liuyan.txt",$ninfo);

				echo "删除成功";

			?>
		</center>
	</body>
</html>