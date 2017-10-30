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
		$name=$_GET["userName"];
	   	$pwd=$_GET["pwd"];
        $tel=$_GET["phone"];
   // mysql_query("insert into user(user,host,password) values('$user','$host','$password')");
    mysql_query("insert into jd_user(user,password,tel) values('$name','$pwd','$tel');"); 
?>