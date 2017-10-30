<?php
//************对数据执行操作*********************
      //设置编码字符集
        header('Content-Type: application/json');
        //链接数据库
        $conn=@mysql_connect("localhost","root","");
        if(!$conn){
            echo "connect defail";
            exit();
        }
        //切换数据库
        if(!mysql_select_db("kaifanla")){
            echo "select_defail";
            exit();
        }
        //设置字符集
        mysql_query("set names utf8;");

?>