<?php
   //*********************查询菜品的详细信息**************
	 //链接操作数据库的文件
     require('./conn.php');

	$did=$_GET["did"];//当前菜品的编号
	//根据当前菜品编号，查询当前菜品的详细信息
	$res = mysql_query("select did,name,img_lg,material,detail,price from kf_dish where did=$did;");
	//创建一个空数组，存放数据
	$output = array();
	while($row=mysql_fetch_assoc($res)){
		array_push($output,$row);
	}
	//向客户端输出响应消息主体
	$send_data = json_encode($output);
    echo $send_data;
?>