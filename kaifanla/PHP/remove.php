<?php
//***********删除订单表的数据*********************
        //链接操作数据库的文件
        require('./conn.php');

        $oid=$_REQUEST["oid"];//获取当前要删除的编号码
        //删除当前oid编号的数据库内容
        $remove= mysql_query("delete from kf_order where oid=$oid");
        //查询数据库
        $res = mysql_query("SELECT oid,user_name,order_time,addr,phone,img_sm,kf_order.did FROM kf_order,kf_dish WHERE kf_order.did=kf_dish.did order by oid desc");

        $output = array();//创建一个空数组，保存数据
        while($row=mysql_fetch_assoc($res)){
            array_push($output,$row);
        }
        //向客户端输出响应消息主体
        $send_data = json_encode($output);
        echo $send_data;

?>