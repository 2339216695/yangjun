<?php
//*********************��ѯ������Ϣ�����ݿ�����**************
		 //���Ӳ������ݿ���ļ�
		require('./conn.php');

		//����did�������ű��ѯ������¼
    	$res = mysql_query("SELECT oid,user_name,order_time,addr,phone,img_sm,kf_order.did FROM kf_order,kf_dish WHERE kf_order.did=kf_dish.did order by oid desc");
    	//���������飬�������
    	$output = array();
    	while($row=mysql_fetch_assoc($res)){
    		array_push($output,$row);
    	}
    	//��ͷ�����Ӧ�������
    	$send_data = json_encode($output);
        echo $send_data;
?>