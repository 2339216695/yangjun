<?php
   //*********************��ѯ��Ʒ����ϸ��Ϣ**************
	 //���Ӳ������ݿ���ļ�
     require('./conn.php');

	$did=$_GET["did"];//��ǰ��Ʒ�ı��
	//���ݵ�ǰ��Ʒ��ţ���ѯ��ǰ��Ʒ����ϸ��Ϣ
	$res = mysql_query("select did,name,img_lg,material,detail,price from kf_dish where did=$did;");
	//����һ�������飬�������
	$output = array();
	while($row=mysql_fetch_assoc($res)){
		array_push($output,$row);
	}
	//��ͻ��������Ӧ��Ϣ����
	$send_data = json_encode($output);
    echo $send_data;
?>