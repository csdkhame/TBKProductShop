<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

$mysqli = new mysqli('localhost', 'root', '123', 'admin_productsell');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] === 'edit') {
	$current_date = $current = date('Y-m-d h:i:s');
    $mysqli->query("UPDATE web_item_type SET s_name	='" . $input['NAME'] . "', s_detail='" . $input['DETAIL'] . "', d_last_update='" . $current_date . "' WHERE i_id='" . $input['id'] . "'");
} else if ($input['action'] === 'delete') {
    $mysqli->query("UPDATE web_item_type SET i_deleted=1 WHERE i_id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE web_item_type SET i_deleted=0 WHERE i_id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
