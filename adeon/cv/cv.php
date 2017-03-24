<?php
	/*
	CREATE TABLE `users_cv` (
	 `id` int(11) NOT NULL AUTO_INCREMENT,
	 `wp_userid` int(11) NOT NULL,
	 `wp_username` varchar(255) NOT NULL,
	 `name` varchar(32) NOT NULL,
	 `spec` varchar(64) NOT NULL,
	 `info` varchar(255) NOT NULL,
	 `age` int(11) NOT NULL,
	 `country` int(11) NOT NULL,
	 `city` int(11) NOT NULL,
	 `address` varchar(48) NOT NULL,
	 `email` varchar(255) NOT NULL,
	 `phone` varchar(22) NOT NULL,
	 `state` int(11) NOT NULL,
	 `date` datetime NOT NULL,
	 `has_photo` int(11) NOT NULL,
	 `msg` varchar(250) NOT NULL,
	 PRIMARY KEY (`id`)
	) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8

	ALTER TABLE `users_cv` CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci
	*/
	
	include "../adeon.php";
	include "../../wp-load.php";
	
	$db = "users_cv";
	$wp_cur_userid = get_current_user_id();
	$wp_cur_username = $current_user->user_login;

	if(!$wp_cur_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	$result = $wpdb->get_results("SELECT * FROM $db WHERE wp_userid=$wp_cur_userid", ARRAY_A);
	if(!empty($wpdb->last_error)) {
		die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
	}
	
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		if(!$_FILES['cv-photo']['error']) {
			$name = $_FILES['cv-photo']['name'];
			if(!check_file_uploaded_length($name)) {
				die(json_encode(array("error" => "Wrong file name"), JSON_UNESCAPED_UNICODE));
			}
				
			if($_FILES['cv-photo']['size'] > 500000) {
				die(json_encode(array("error" => "Wrong file size"), JSON_UNESCAPED_UNICODE));
			}
			
			if (!file_exists("../../cv_data/users/$wp_cur_username")) {
				mkdir("../../cv_data/users/$wp_cur_username", 0777, true);
			}
		}
	
		$data = array(
			'wp_userid' => $wp_cur_userid,
			'wp_username' => $wp_cur_username,
			'name' => $_POST['cv-name'],
			'spec' => $_POST['cv-spec'],
			'info' => $_POST['cv-info'],
			'age' => $_POST['cv-age'],
			'address' => $_POST['cv-address'],
			'email' => $_POST['cv-email'],
			'city' => $_POST['cv-city'],
			'country' => $_POST['cv-country'],
			'phone' => $_POST['cv-phone'],
			'state' => 0,
			'date' => current_time('mysql'),
			'has_photo' => file_exists("../../cv_data/users/$wp_cur_username")
		);
		$data_pattern = array('%d', '%s', '%s', '%s', '%s', '%d', '%s', '%s', '%d', '%d', '%s', '%d', '%s', '%d');
		$where = array('wp_userid' => $wp_cur_userid);
		$where_pattern = array('%d');
		
		if($wpdb->num_rows > 0) {
			$cur_date = new DateTime(date("Y-m-d H:i:s"));
			$last_date = new DateTime($result[0]['date']);
			$diff = $cur_date->diff($last_date);
			$hours = $diff->h;
			$hours = $hours + ($diff->days*24);
			
			if($hours < 24) {
				die(json_encode(array("error" => 'You can change your CV only 1 time per 24 hours'), JSON_UNESCAPED_UNICODE));
			}

			if(!$_FILES['cv-photo']['error']) {
				move_uploaded_file($_FILES['cv-photo']['tmp_name'], "../../cv_data/users/$wp_cur_username/photo.jpg");
			}
			
			$wpdb->update($db, $data, $where, $data_pattern, $where_pattern);
			if(!empty($wpdb->last_error)) {
				die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
			}
			
			die(json_encode(array("data" => array("action" => "update")), JSON_UNESCAPED_UNICODE));
		}
		else {
			if(!$_FILES['cv-photo']['error']) {
				move_uploaded_file($_FILES['cv-photo']['tmp_name'], "../../cv_data/users/$wp_cur_username/photo.jpg");
			}
			$wpdb->insert($db, $data, $data_pattern);
			if(!empty($wpdb->last_error)) {
				die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
			}
			
			die(json_encode(array("data" => array("action" => "insert")), JSON_UNESCAPED_UNICODE));
		}
	}
	else if($_SERVER['REQUEST_METHOD'] === "GET") {
		if(!$wpdb->num_rows) {
			die(json_encode(array("data" => null), JSON_UNESCAPED_UNICODE));
		}
	
		$data = array(
			'wp_username' => $wp_cur_username,
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
			'has_photo' => file_exists("../../cv_data/users/$wp_cur_username")
		);

		die(json_encode($data, JSON_UNESCAPED_UNICODE));
	}
?>