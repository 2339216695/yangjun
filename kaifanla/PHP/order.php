<?php
   //*********************�����ݿ��в���ͻ��µ���Ϣ����ѯ��ǰ�µ������µ�һ��**************
		 //���Ӳ������ݿ���ļ�
          require('./conn.php');

    	//����ǰ̨����
    	$user_name=$_REQUEST["user_name"];//���տͻ�����
    	$user_sex=$_REQUEST["sex"];//�����Ա�
    	$user_tel=$_REQUEST["tel"];//���յ绰����
    	$user_addr=$_REQUEST["addr"];//�����ջ���ַ
    	$user_did=$_REQUEST["did"];//���ղ�Ʒ���
    	$user_time=time()*1000;//�����Ժ���Ϊ��λ���յ�ǰϵͳ�µ�ʱ��

		//�����ݿ��в��붩����Ϣ
    	$res = mysql_query("INSERT INTO kf_order(oid,user_name,sex,phone,addr,did,order_time) VALUES(NULL,'$user_name','$user_sex','$user_tel','$user_addr','$user_did','$user_time')");

		//�����µ�ʱ��Ϳͻ���������ѯ��ǰ���µ��µ���ţ����ظ��ͷ���
    	$row = mysql_query("SELECT oid FROM kf_order WHERE order_time='$user_time' and user_name='$user_name'");
    	while($s=mysql_fetch_row($row)){
            		echo $s[0];
            	}
?>