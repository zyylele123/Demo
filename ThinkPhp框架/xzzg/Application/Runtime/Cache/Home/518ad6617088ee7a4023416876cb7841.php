<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>information add</title>
</head>
<body>
	<h1>资讯添加</h1></br><hr>
	<form action="add" method="post">
		<input type="hidden" name="id"/></br></br>
		标题:<input type="text" name="title" /></br></br>
		简介:<input type="text" name="summary" /></br></br>
		详情:<input type="textarea" name="content" /></br></br>
		标签:<input type="text" name="tag"/></br></br>
		<input type="submit" name="submit" value="添加"/>
	</form>
</body>
</html>