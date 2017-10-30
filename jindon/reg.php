<?php
	$conn=@mysql_connect("localhost","yangjun","123456789");
	if(!$conn){
		echo "数据库连接失败";
		exit();
	}
	if(!mysql_select_db("jd")){
		echo "切换数据库失败";
		exit();
	}
	mysql_query("set names utf8");
		$name=$_POST["name"];
        $s=mysql_query("select user from jd_user where user='$name';");
       // var_dump($res);    
     if(mysql_num_rows($s)==0){
     	echo "输入正确";
     	exit();
     }else{
     	echo "用户名已存在";
     	exit();
     }
?>