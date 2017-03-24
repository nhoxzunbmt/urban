<?php
	function check_file_uploaded_name($filename) {
		return preg_match("`^[-0-9A-Z_\.]+$`i", $filename) ? true : false;
	}

	function check_file_uploaded_length ($filename){
		return (mb_strlen($filename,"UTF-8") > 225) ? false : true;
	}

	include "wp-load.php";
	global $wpdb;
	$db="vacancies";
	$userid = get_current_user_id();
	$username = $current_user->user_login;
	if(!$userid) die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
		if(!$_FILES['vac-photo']['error']) {
			$name = $_FILES['vac-photo']['name'];
			if(!check_file_uploaded_name($name) || !check_file_uploaded_length($name)) {
				die(json_encode(array("error" => "Wrong file name"), JSON_UNESCAPED_UNICODE));
			}
				
			if($_FILES['vac-photo']['size'] > 500000) {
				die(json_encode(array("error" => "Wrong file size"), JSON_UNESCAPED_UNICODE));
			}
			
			if (!file_exists("vac_data/users/$username")) {
				mkdir("vac_data/users/$username", 0777, true);
			}
			
			move_uploaded_file($_FILES['vac-photo']['tmp_name'], "vac_data/users/$username/photo.jpg");
		}
		
		  $wpdb->insert( $db, array(
			'userwpid' => get_current_user_id(),
			'name' => $_POST['vac_name'],
			'city' => $_POST['vac_city'],
			'speciality' => $_POST['vac_speciality'],
			'activity' => $_POST['vac_activity'],
			'information' => htmlspecialchars($_POST['vac_information']),
			'qualification' => $_POST['vac_qualification'],
			'verific' => 2,
			'date' => current_time('mysql'),
			'photourl' => "vac_data/users/$username/photo.jpg"
			),
		  array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s')
		  );
		  if(!empty($wpdb->last_error)) die(json_encode(array("error" => $wpdb->last_error), JSON_UNESCAPED_UNICODE));
		  die(json_encode(array("action" => "insert"), JSON_UNESCAPED_UNICODE));
	}
?>