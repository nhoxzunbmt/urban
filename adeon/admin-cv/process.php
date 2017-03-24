<?php
	include "../../wp-load.php";
	
	$db = "users_cv";
	$wp_cur_userid = get_current_user_id();
	
	if(!$wp_cur_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	if(!isset($_POST['id']) || !isset($_POST['wp_username']) || !isset($_POST['fio'])) {
		die(json_encode(array("error" => "Invalid params"), JSON_UNESCAPED_UNICODE));
	}
	
	$accept = isset($_POST['accept']) ? true : false;
	$state = $accept ? 1 : 2;
	$txt = "Здравствуйте, ".$_POST['fio'].". Ваша заявка CV была ".($accept ? "одобрена" : "отклонена").". :\n ".$_POST['comment']."\n https://urbanconsulting.md/ru/job/cv/";
	
	$data = array(
		'state' => $state,
		'msg' => strlen($_POST["comment"]) ? $_POST["comment"] : "CV заполнено неправильно.",
		'date' => current_time('mysql')
	);
	$where = array('id' => $_POST["id"]);
	$data_pattern = array('%d', '%s', '%s');
	$where_pattern = array('%d');
	
	$wpdb->update($db, $data, $where, $data_pattern, $where_pattern);
	
	$to = $_POST['wp_username'];
	$subject = "Рассмотрение заявки CV";
	$headers = "From: office@urbanconsulting.md" . "\r\n" .
	"CC: office@urbanconsulting.md";

	mail($to, $subject, $txt, $headers);
	header('Location: https://urbanconsulting.md/wp-admin/admin.php?page=mt-top-level-handle');
?>