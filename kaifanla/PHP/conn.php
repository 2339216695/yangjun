<?php
//************������ִ�в���*********************
      //���ñ����ַ���
        header('Content-Type: application/json');
        //�������ݿ�
        $conn=@mysql_connect("localhost","root","");
        if(!$conn){
            echo "connect defail";
            exit();
        }
        //�л����ݿ�
        if(!mysql_select_db("kaifanla")){
            echo "select_defail";
            exit();
        }
        //�����ַ���
        mysql_query("set names utf8;");

?>