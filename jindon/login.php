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
		$name=$_GET["name"];
		$pwd=$_GET["pwd"];
        $s=mysql_query("select user,password from jd_user where user='$name'and password='$pwd';");
       // var_dump($res);    
     if(mysql_num_rows($s)==1){
     	echo "";
     	exit();
     }else{
     	echo "用户名不存在，请检查你的用户名和密码是否错误";
     	exit();
     }
?>