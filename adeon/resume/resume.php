<?php
	include "../../wp-load.php";
	
	$db = "users_cv";
	$wp_cur_userid = get_current_user_id();
	if(!$wp_cur_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	if($_SERVER['REQUEST_METHOD'] === "GET") {
		$spec = isset($_GET['spec']) ? $_GET['spec'] : "";
		$country = isset($_GET['country']) ? $_GET['country'] : -1;
		$city = isset($_GET['city']) ? $_GET['city'] : -1;
		
		$where = "state = 1";
		if(strlen($spec)) $where .= " AND spec = \"".$spec."\"";
		if(strval($country) != -1) $where .= " AND country = ".$country;
		if(strval($city) != -1)  $where .= " AND city = ".$city;
		
		$query = "SELECT COUNT(*) AS max FROM $db WHERE ".$where;
		$result = $wpdb->get_results($query, ARRAY_A);
		if(!empty($wpdb->last_error)) {
			die(json_encode(array("error" => $wpdb->last_error, "query" => $query), JSON_UNESCAPED_UNICODE));
		}
		
		$max = isset($_GET['max']) ? $_GET['max'] : $result[0]['max'];
		$from = isset($_GET['from']) ? $_GET['from'] : 0;
		if($from >= $max) $from = 0;
		$where .= " LIMIT $from, $max";
		
		$query = "SELECT * FROM $db WHERE ".$where;
		$result = $wpdb->get_results($query, ARRAY_A);
		if(!empty($wpdb->last_error)) {
			die(json_encode(array("error" => $wpdb->last_error, "query" => $query), JSON_UNESCAPED_UNICODE));
		}

		if(!$max) {
			die(json_encode(array("data" => null), JSON_UNESCAPED_UNICODE));
		}
		
		$data = array();

		foreach($result as $cv) {
			$data[] = array(
				'id' => $cv['id'],
				'wp_username' => $cv["wp_username"],
				'name' => $cv["name"],
				'spec' => $cv["spec"],
				'info' => $cv["info"],
				'age' => $cv["age"],
				'address' => $cv["address"],
				'email' => $cv["email"],
				'city' => $cv["city"],
				'country' => $cv["country"],
				'phone' => $cv["phone"],
				'state' => $cv["state"],
				'date' => $cv["date"],
				'msg' => $cv["msg"],
				'has_photo' => file_exists("../../cv_data/users/".$cv["wp_username"])
			);
		}
		
		die(json_encode(array("data" => $data, "get" => $_GET), JSON_UNESCAPED_UNICODE));
	}
?>