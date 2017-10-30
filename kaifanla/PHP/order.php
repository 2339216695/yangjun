<?php
   //*********************向数据库中插入客户下单信息，查询当前下单的最新的一单**************
		 //链接操作数据库的文件
          require('./conn.php');

    	//接收前台数据
    	$user_name=$_REQUEST["user_name"];//接收客户姓名
    	$user_sex=$_REQUEST["sex"];//接收性别
    	$user_tel=$_REQUEST["tel"];//接收电话号码
    	$user_addr=$_REQUEST["addr"];//接收收货地址
    	$user_did=$_REQUEST["did"];//接收菜品编号
    	$user_time=time()*1000;//接收以毫秒为单位接收当前系统下单时间

		//向数据库中插入订单信息
    	$res = mysql_query("INSERT INTO kf_order(oid,user_name,sex,phone,addr,did,order_time) VALUES(NULL,'$user_name','$user_sex','$user_tel','$user_addr','$user_did','$user_time')");

		//根据下单时间和客户姓名，查询当前最新的下单编号，返回给客服端
    	$row = mysql_query("SELECT oid FROM kf_order WHERE order_time='$user_time' and user_name='$user_name'");
    	while($s=mysql_fetch_row($row)){
            		echo $s[0];
            	}
?>