<?php
	include "wp-load.php";
	include "adeon.php";

	$db = "users_cv";
	$userid = get_current_user_id();
	$username = $current_user->user_login;
	if(!$userid) die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$result = $wpdb->get_results("SELECT * FROM $db WHERE userid=$userid");
		if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
	
		if(!$_FILES['cv-photo']['error']) {
			$name = $_FILES['cv-photo']['name'];
			if(!check_file_uploaded_length($name)) {
				die(json_encode(array("error" => "Wrong file name"), JSON_UNESCAPED_UNICODE));
			}
				
			if($_FILES['cv-photo']['size'] > 500000) {
				die(json_encode(array("error" => "Wrong file size"), JSON_UNESCAPED_UNICODE));
			}
			
			if (!file_exists("cv_data/users/$username")) {
				mkdir("cv_data/users/$username", 0777, true);
			}
			
			move_uploaded_file($_FILES['cv-photo']['tmp_name'], "cv_data/users/$username/photo.jpg");
		}

		if($wpdb->num_rows > 0) {
			$result = $wpdb->update($db, array(
				'userid' => $userid,
				'name' => $_POST['cv-name'],
				'spec' => $_POST['cv-spec'],
				'info' => $_POST['cv-info'],
				'age' => $_POST['cv-age'],
				'address' => $_POST['cv-address'],
				'email' => $_POST['cv-email'],
				'city' => $_POST['cv-city'],
				'country' => $_POST['cv-country'],
				'phone' => $_POST['cv-phone'],
				'state' => 1,
				'time' => current_time('mysql'),
				'has_photo' => file_exists("cv_data/users/$username")
			),
			array( 'userid' => get_current_user_id()),
			array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s'),
			array( '%d' )
		  );
		  if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
		  die(json_encode(array("action" => "update"), JSON_UNESCAPED_UNICODE));
		}
		else {
		  $wpdb->insert($db, array(
				'userid' => $userid,
				'user_name' => $username,
				'name' => $_POST['cv-name'],
				'spec' => $_POST['cv-spec'],
				'info' => $_POST['cv-info'],
				'age' => $_POST['cv-age'],
				'address' => $_POST['cv-address'],
				'email' => $_POST['cv-email'],
				'city' => $_POST['cv-city'],
				'country' => $_POST['cv-country'],
				'phone' => $_POST['cv-phone'],
				'state' => 1,
				'time' => current_time('mysql'),
				'has_photo' => file_exists("cv_data/users/$username")
			),
			array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d' , '%s', '%s')
		  );
		  if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
		  die(json_encode(array("action" => "insert"), JSON_UNESCAPED_UNICODE));
		}
	}
	else if ($_SERVER['REQUEST_METHOD'] === "GET") {
		$result = $wpdb->get_results("SELECT COUNT(*) AS max FROM $db");
		if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
		$max = $result[0]->max;
		
		if(!$max) {
			die(json_encode(array("data" => "no data"), JSON_UNESCAPED_UNICODE));
		}
		
		$result = $wpdb->get_results("SELECT * FROM $db WHERE userid=$userid");
		if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
		
		if(!$result) {
			die(json_encode(array("data" => "no data"), JSON_UNESCAPED_UNICODE));
		}
		
		die(json_encode(array(
			'userid' => $userid,
			'user_name' => $username,
			'name' => $result[0]->name,
			'spec' => $result[0]->spec,
			'info' => $result[0]->info,
			'age' => $result[0]->age,
			'address' => $result[0]->address,
			'email' => $result[0]->email,
			'city' => $result[0]->city,
			'country' => $result[0]->country,
			'phone' => $result[0]->phone,
			'state' => $result[0]->state,
			'time' => $result[0]->time,
			'msg' => $result[0]->msg,
			'has_photo' => file_exists("cv_data/users/$username")
		), JSON_UNESCAPED_UNICODE));
	}
?>