<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>zhengce add</title>
</head>
<body>
	<h1>百科添加</h1></br><hr>
	<form action="zadd" method="post">
		<input type="hidden" name="id"/></br></br>
		分类:<input type="text" name="fenlei" /></br></br>
		标题:<input type="text" name="title" /></br></br>
		详情:<input type="textarea" name="content" /></br></br>
		标签:<input type="text" name="tag"/></br></br>
		用户:<input type="text" name="user" /></br></br>
		<input type="submit" name="submit" value="添加"/>
	</form>
</body>
</html>