<?php 

require_once("../../includes/class.mysql.php");
require_once("../../includes/config.in.php");

/*$array = $_FILES["file1"];

while(list($key, $value) = each($array)){
	echo $value." , ";
}*/

	if($_GET[action]=='remove_each'){
		
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$remove[i_deleted] = 1;
		$remove[d_last_update] = $current_date;
		$result = $db->update_db(TB_Imag,$remove,"i_id='".$_POST[id_img]."' and i_id_item = '".$_POST[id_product]."'   "); 
		echo $result;
	
	}	
	
	if($_GET[action]=='restore_each'){
		
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$restore[i_deleted] = 0;
		$restore[d_last_update] = $current_date;
		$result = $db->update_db(TB_Imag,$restore,"i_id='".$_POST[id_img]."' and i_id_item = '".$_POST[id_product]."'   "); 
		echo $result;

	
	}
	
	if($_GET[action]=='cover_img'){
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$nocover[i_img_cover] = 0;
		$nocover[d_last_update] = $current_date;
		$false_cover = $db->update_db(TB_Imag,$nocover,"i_id_item = '".$_POST[id_product]."' "); 
		
		$cover[i_img_cover] = 1;
		$cover[d_last_update] = $current_date;
		$true_cover = $db->update_db(TB_Imag,$cover,"i_id='".$_POST[id_img]."' and i_id_item = '".$_POST[id_product]."' "); 
		
		
		
		echo $true_cover+$false_cover;

	}
	
	
	if($_GET[action]=='remove_all'){
		
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$remove[i_deleted] = 1;
		$remove[d_last_update] = $current_date;
		$result = $db->update_db(TB_Imag,$remove,"i_id_item = '".$_POST[id_product]."' and i_deleted = 0 "); 
		echo $result;
	}	
	
	if($_GET[action]=='restore_all'){
		
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		mysql_query("SET NAMES utf8"); 
		mysql_query("SET character_set_results=utf-8"); 
		$restore[i_deleted] = 0;
		$restore[d_last_update] = $current_date;
		$result = $db->update_db(TB_Imag,$restore,"i_id_item = '".$_POST[id_product]."' and i_deleted = 1  "); 
		echo $result;
	}	
	
	
	if($_GET[action]=='insert_pic'){
		$db = New DB();
		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
		$current_date = $current = date('Y-m-d h:i:s');
		if(file_exists($_FILES['profile']['tmp_name']) || is_uploaded_file($_FILES['profile']['tmp_name'])) {
    	
	    	if (move_uploaded_file($_FILES["profile"]["tmp_name"],"../../images_upload/".$_FILES["profile"]["name"])) 			{ 	
		        //echo "The file ". basename( $_FILES["files"]["name"][$f]). " has been uploaded.";
		        $nocover[i_img_cover] = 0;
				$nocover[d_last_update] = $current_date;
				$false_cover = $db->update_db(TB_Imag,$nocover,"i_id_item = '".$_POST[id_item]."' "); 
				if($false_cover==1){
		        $img_corver[i_img_cover] = 1;
		        $img_corver[i_id_item] = $_POST[id_item];
		        $img_corver[s_name] = $_FILES["profile"]["name"];
		        $img_corver[d_last_update] = $current_date;
		        mysql_query("SET NAMES utf8"); 
				mysql_query("SET character_set_results=utf-8"); 
		        $save_img_corver = $db->add_db(TB_Imag,$img_corver);
		        }
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
				        $img_array[i_id_item] = $_POST[id_item];
				        $img_array[s_name] = $_FILES["files"]["name"][$f];
				        $img_array[d_last_update] = $current_date;
				       	mysql_query("SET NAMES utf8"); 
						mysql_query("SET character_set_results=utf-8"); 
				        $save_img_array = $db->add_db(TB_Imag,$img_array);
			    } 	
			}
		}
		$save_img_corver =1;
		$save_img_array = 1;
		if($save_img_corver==1 and $save_img_array==1){
			ob_end_clean();
			echo '<script type="text/javascript">';
			echo 'window.history.back();'; 
			echo 'alert("Insert successful");'; 
			echo '</script>';
			//echo "Success";
		}
	}
	
	
?>