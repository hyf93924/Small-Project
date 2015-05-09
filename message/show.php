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

			<h3>查看留言</h3>
			<table border="1" width="800">
				<tr>
					<th>留言标题</th>
					<th>留言用户</th>
					<th>留言内容</th>
					<th>IP地址</th>
					<th>留言时间</th>
					<th>其他操作</th>
				</tr>
				<?php
					//1、从liuyan.txt文件中获取
					$info = file_get_contents("liuyan.txt");

					//2、取出留言最后的@@@
					$info = rtrim($info,"@");

					//3、将留言以@@@拆分
					$lylist = explode("@@@", $info);

					//4、遍历输出
					foreach ($lylist as $k=>$v) {
						//echo $v."<br>";
						//继续以##拆分，去掉##
						$ly = explode("##", $v);

						echo "<tr>";
						echo "<td>{$ly[0]}</td>";
						echo "<td>{$ly[1]}</td>";
						echo "<td>{$ly[2]}</td>";
						echo "<td>{$ly[3]}</td>";
						echo "<td>".date("Y-m-d H:i:s", $ly[4]+8*3600)."</td>";
						echo "<td><a href='del.php?id={$k}'>删除</a></td>";
						echo "</tr>";
					}
				?>
			</table>
			
		</center>
	</body>
</html>