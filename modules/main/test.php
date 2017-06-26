  <?php header('Content-type: text/html; charset=utf-8'); ?>
<?php 

require_once("../../includes/class.mysql.php");
require_once("../../includes/config.in.php");

/*$array = $_FILES["file1"];

while(list($key, $value) = each($array)){
	echo $value." , ";
}*/


	if(isset($_POST)){
	$db = New DB();
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$current_date = $current = date('Y-m-d h:i:s');
	
	$item_list[s_name] = $_POST[product_name];
	$item_list[i_item_type] = $_POST[typeitem];
	$item_list[s_detail] = $_POST[detail];
	$item_list[i_price_unit] = $_POST[price];
	$item_list[d_last_update] = $current_date;
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET character_set_results=utf-8"); 
	$save_product = $db->add_db(TB_Item,$item_list); 

	if($save_product==1){
		$res = $db->select_query('SELECT i_id FROM '.TB_Item.' WHERE  d_last_update = "'.$current_date.'" '); 
		$arr = $db->fetch($res);
		//echo $arr[i_id];
		if(file_exists($_FILES['profile']['tmp_name']) || is_uploaded_file($_FILES['profile']['tmp_name'])) {
    	
	    	if (move_uploaded_file($_FILES["profile"]["tmp_name"],"../../images_upload/".$_FILES["profile"]["name"])) 			{ 	
		        //echo "The file ". basename( $_FILES["files"]["name"][$f]). " has been uploaded.";
		        $img_corver[i_img_cover] = 1;
		        $img_corver[i_id_item] = $arr[i_id];
		        $img_corver[s_name] = $_FILES["profile"]["name"];
		        $img_corver[d_last_update] = $current_date;
		        mysql_query("SET NAMES utf8"); 
				mysql_query("SET character_set_results=utf-8"); 
		        $save_img_corver = $db->add_db(TB_Imag,$img_corver);
		    }
    
		}
	
		if(count($_FILES['files']['name'])>0){
			foreach ($_FILES['files']['name'] as $f => $name) {     
			  $target_dir = "../../images_upload/";
			  $target_file = $target_dir . basename($_FILES["files"]["name"][$f]);
			    if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $target_file)) { 	
			        //echo "The file ". basename( $_FILES["files"]["name"][$f]). " has been uploaded.";
			        	//$img_array[$f] = $name;
			          	$img_array[i_img_cover] = 0;
				        $img_array[i_id_item] = $arr[i_id];
				        $img_array[s_name] = $_FILES["files"]["name"][$f];
				        $img_array[d_last_update] = $current_date;
				       	mysql_query("SET NAMES utf8"); 
						mysql_query("SET character_set_results=utf-8"); 
				        $save_img_array = $db->add_db(TB_Imag,$img_array);
			    } 	
			}
		}
		
		if($save_product==1 and $save_img_corver==1 and $save_img_array==1){
			echo '<script type="text/javascript">';
			echo 'window.location.href = "index.php?name=main&file=product_upload";'; 
			echo 'alert("Insert successful");'; 
			echo '</script>';
		}
	//$save_product = $db->add_db(TB_Imag,$item_list); 


	}
	
	
	
	
	
	
	
	}
	
	
	//echo print_r($item_list);
	



?>