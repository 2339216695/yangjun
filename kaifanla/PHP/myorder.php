<?php
//*********************查询订单信息的数据库内容**************
		 //链接操作数据库的文件
		require('./conn.php');

		//根据did联合两张表查询订单记录
    	$res = mysql_query("SELECT oid,user_name,order_time,addr,phone,img_sm,kf_order.did FROM kf_order,kf_dish WHERE kf_order.did=kf_dish.did order by oid desc");
    	//创建空数组，存放数据
    	$output = array();
    	while($row=mysql_fetch_assoc($res)){
    		array_push($output,$row);
    	}
    	//向客服端响应输出数据
    	$send_data = json_encode($output);
        echo $send_data;
?>