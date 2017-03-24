<?php
	include "../../wp-load.php";
	
	$db = "users_vac";
	$wp_cur_userid = get_current_user_id();
	if(!$wp_cur_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	if($_SERVER['REQUEST_METHOD'] === "GET") {
		$spec = isset($_GET['spec']) ? $_GET['spec'] : "";
		$country = isset($_GET['country']) ? $_GET['country'] : -1;
		$city = isset($_GET['city']) ? $_GET['city'] : -1;
		$category = isset($_GET['category']) ? $_GET['category'] : -1;
		$qual = isset($_GET['qual']) ? $_GET['qual'] : -1;
		$unqual = isset($_GET['unqual']) ? $_GET['unqual'] : -1;
		
		$where = "state = 1";
		if(strlen($spec)) $where .= " AND spec = \"".$spec."\"";
		if(strval($country) != -1) $where .= " AND country = ".$country;
		if(strval($city) != -1)  $where .= " AND city = ".$city;
		if(strval($category) != -1)  $where .= " AND categoty = ".$category;
		if(strval($qual) != -1)  $where .= " AND qual = ".$qual;
		if(strval($unqual) != -1)  $where .= " AND unqual = ".$unqual;
		
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

		foreach($result as $vac) {
			$data[] = array(
				'id' => $vac['id'],
				'wp_username' => $vac["wp_username"],
				'name' => $vac["name"],
				'spec' => $vac["spec"],
				'info' => $vac["info"],
				'city' => $vac["city"],
				'country' => $vac["country"],
				'category' => $vac["category"],
				'qual' => $vac["qual"],
				'unqual' => $vac["unqual"],
				'state' => $vac["state"],
				'date' => $vac["date"],
				'has_photo' => file_exists("../../vac_data/users/".$vac["wp_username"]."/".$vac['id'].".jpg")
			);
		}
		
		die(json_encode(array("data" => $data, "get" => $_GET), JSON_UNESCAPED_UNICODE));
	}
?>