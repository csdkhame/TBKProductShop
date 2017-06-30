<?php 

require_once("../../includes/class.mysql.php");
require_once("../../includes/config.in.php");

/*$array = $_FILES["file1"];

while(list($key, $value) = each($array)){
	echo $value." , ";
}*/

	if($_GET[action]=='update_item'){
		
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 

		$res[product] = $db->select_query('SELECT s_name,i_price_unit,s_detail,i_item_type	 FROM '.TB_Item.' WHERE  i_id = "'.$_GET[id_item].'" '); 
		$arr[product] = $db->fetch($res[product]);
		$insertLog[s_name] = $arr[product][s_name];
		$insertLog[s_detail] = $arr[product][s_detail];
		$insertLog[i_price_unit] = $arr[product][i_price_unit];
		$insertLog[i_item_type] = $arr[product][i_item_type];
		$insertLog[i_id_item] = $_GET[id_item];
		$insertLog[d_last_update] = $current_date;
		$save_log = $db->add_db(TB_Item_Log,$insertLog);
		$save_log =1;
		if($save_log==1){
			$update[s_name] = $_POST[product_name];
			$update[s_detail] = $_POST[detail];
			$update[i_price_unit] = $_POST[price];
			$update[i_item_type] = $_POST[typeitem];
			$update[d_last_update] = $current_date;
			$resultUpdate = $db->update_db(TB_Item,$update,"i_id='".$_GET[id_item]."'  "); 
		}

		echo $resultUpdate;
	
	}	
	
	if($_GET[action]=='remove_row'){
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$remove[i_deleted] = 1;
		$remove[d_last_update] = $current_date;
		//$result = $db->update_db(TB_Imag,$remove,"i_id='".$_POST[id]."' "); 
		$result=1;
		echo $result;
	}

?>