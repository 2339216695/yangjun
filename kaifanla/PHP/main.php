<?php
//****************查询数据库中商品的内容，按照每次查询3条的记录查询**********
	 //链接操作数据库的文件
	require('./conn.php');

	$num=$_REQUEST["num"];//当前从第几行开始查找
	$max=3;//最多查询几行
	//查询数据库符合条件的商品内容
	$res = mysql_query("select did,name,img_sm,material,price from kf_dish LIMIT $num,$max;");
	$output = array();//创建一个空数组，存放数据
	while($row=mysql_fetch_assoc($res)){
		array_push($output,$row);
	}
	 //向客户端输出响应消息主体
	$send_data = json_encode($output);
    echo $send_data;
?>