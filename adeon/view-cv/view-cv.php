<?php
	include "../adeon.php";
	include "../../wp-load.php";
	
	$db = "users_cv";
	$wp_cur_userid = get_current_user_id();
	$wp_cur_username = $current_user->user_login;

	if(!$wp_cur_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	if(!isset($_GET['id'])) {
		die(json_encode(array("error" => "Invalid params"), JSON_UNESCAPED_UNICODE));
	}
	
	$id = $_GET['id'];
	
	$result = $wpdb->get_results("SELECT * FROM $db WHERE id=$id", ARRAY_A);
	if(!empty($wpdb->last_error)) {
		die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
	}
	
	if(!$result) {
		die(json_encode(array("error" => "No CV found"), JSON_UNESCAPED_UNICODE));
	}
	
	if($result[0]['state'] != 1) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	$wp_username = $result[0]['wp_username'];
	
	$data = array(
		'wp_username' => $wp_username,
		'name' => $result[0]['name'],
		'spec' => $result[0]['spec'],
		'info' => $result[0]['info'],
		'age' => $result[0]['age'],
		'address' => $result[0]['address'],
		'email' => $result[0]['email'],
		'city' => $result[0]['city'],
		'country' => $result[0]['country'],
		'phone' => $result[0]['phone'],
		'state' => $result[0]['state'],
		'date' => $result[0]['date'],
		'msg' => $result[0]['msg'],
		'has_photo' => file_exists("../../cv_data/users/$wp_username")
	);

	die(json_encode($data, JSON_UNESCAPED_UNICODE));
?>