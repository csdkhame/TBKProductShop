		<? include('includes/class.mysql.php');?>
		<? include('includes/config.in.php');?>
	<?php 
	$db = New DB();
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	
	$register['s_username'] = $_POST[username];
	$register['s_name'] = $_POST[name];
	$register['s_password'] = $_POST[name];
	$register['s_email'] = $_POST[password];
	$register['i_rating'] = 2;
	$register['s_remark'] = "natural user";
	
	//print_r($register);
	
	$result = $db->add_db('ap_users',$register); 
	
	if($result){
		echo 1;
	}else{
		echo 0;
	}
	?>
	