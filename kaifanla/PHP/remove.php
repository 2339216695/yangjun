<?php
//***********ɾ�������������*********************
        //���Ӳ������ݿ���ļ�
        require('./conn.php');

        $oid=$_REQUEST["oid"];//��ȡ��ǰҪɾ���ı����
        //ɾ����ǰoid��ŵ����ݿ�����
        $remove= mysql_query("delete from kf_order where oid=$oid");
        //��ѯ���ݿ�
        $res = mysql_query("SELECT oid,user_name,order_time,addr,phone,img_sm,kf_order.did FROM kf_order,kf_dish WHERE kf_order.did=kf_dish.did order by oid desc");

        $output = array();//����һ�������飬��������
        while($row=mysql_fetch_assoc($res)){
            array_push($output,$row);
        }
        //��ͻ��������Ӧ��Ϣ����
        $send_data = json_encode($output);
        echo $send_data;

?>