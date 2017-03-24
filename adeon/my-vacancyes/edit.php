<?php
	include "../adeon.php";
	include "../../wp-load.php";
	
	$db = "users_vac";

	$wp_userid = get_current_user_id();
	$wp_username = $current_user->user_login;
	if(!$wp_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$id = $_POST['vac-id'];
		if(!$_FILES['vac-photo']['error']) {		
			$name = $_FILES['vac-photo']['name'];	
				if(!check_file_uploaded_name($name) || !check_file_uploaded_length($name)) {
					die(json_encode(array("error" => "Wrong file name"), JSON_UNESCAPED_UNICODE));			
				}

				if($_FILES['vac-photo']['size'] > 500000) {
					die(json_encode(array("error" => "Wrong file size"), JSON_UNESCAPED_UNICODE));			
				}			

				if (!file_exists("../../vac_data/users/$wp_username")) {				
					mkdir("../../vac_data/users/$wp_username", 0777, true);			
				}	

				move_uploaded_file($_FILES['vac-photo']['tmp_name'], "../../vac_data/users/$wp_username/$id.jpg");		
		}		
		$qual = (isset($_POST['vac-qual']) && $_POST['vac-qual'] == 0) ? 1 : 0;
		$unqual = (isset($_POST['vac-unqual']) && $_POST['vac-unqual'] == 0) ? 1 : 0;

		$data = array(
			'wp_userid' => $wp_userid,			
			'wp_username' => $wp_username,			
			'name' => $_POST['vac-name'],			
			'country' => $_POST['vac-country'],			
			'city' => $_POST['vac-city'],			
			'spec' => $_POST['vac-spec'],			
			'category' => $_POST['vac-category'],			
			'qual' => $qual,
			'unqual' => $unqual,			
			'info' => $_POST['vac-info'],			
			'state' => 0,			
			'date' => current_time('mysql'),			
			'has_photo' => file_exists("../../vac_data/users/$wp_username/$id.jpg")		
		);		
		$data_pattern = array('%d', '%s', '%s', '%d', '%d', '%s', '%s', '%d', '%d', '%s', '%d', '%s', '%d');				
		$where = array('id' => $_POST['vac-id']);
		$where_pattern = array('%d');

		$wpdb->update( $db, $data, $where, $data_pattern, $where_pattern);		
		if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));		
		die(json_encode(array("action" => "insert"), JSON_UNESCAPED_UNICODE));	
	}
	else if($_SERVER['REQUEST_METHOD'] === "GET") {
		if(!isset($_GET['id'])) {
			die(json_encode(array("error" => "id was not set"), JSON_UNESCAPED_UNICODE));
		}

		$id = $_GET['id'];
		$result = $wpdb->get_results("SELECT * FROM $db WHERE id=$id", ARRAY_A);
		if(!empty($wpdb->last_error)) {
			die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
		}

		if(!$result) {
			die(json_encode(array("error" => "no vac under that id"), JSON_UNESCAPED_UNICODE));
		}

		$data = array(
			'wp_userid' => $result[0]['wp_userid'],
			'wp_username' => $result[0]['wp_username'],
			'name' => $result[0]['name'],
			'spec' => $result[0]['spec'],
			'info' => $result[0]['info'],
			'category' => $result[0]['category'],
			'qual' => $result[0]['qual'],
			'unqual' => $result[0]['unqual'],
			'city' => $result[0]['city'],
			'country' => $result[0]['country'],
			'state' => $result[0]['state'],
			'msg' => $result[0]['msg'],
			'has_photo' => file_exists("../../vac_data/users/".$result[0]['wp_username']."/".$id.".jpg"),
			'path' => "../../vac_data/users/".$result[0]['wp_username']."/".$id.".jpg"
		);

		die(json_encode($data, JSON_UNESCAPED_UNICODE));
	}
?>