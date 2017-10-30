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
		//$name=$_GET["name"];
        $s=mysql_query("select * from jd_products,jd_orders,jd_order_product_detail where jd_products.product_id=jd_order_product_detail.product_id and jd_orders.order_id=jd_order_product_detail.order_id and user_name='yangjun';");
    	$arr=array();
    	while($resLine=mysql_fetch_assoc($s)){
        	array_push($arr,$resLine);
   		 };
    	$json=json_encode($arr);
    	echo $json;
       // var_dump($res);    
?>