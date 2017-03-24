<?php
	include "../../wp-load.php";
	
	$db = "users_vac";
	$wp_cur_userid = get_current_user_id();
	
	if(!$wp_cur_userid) {
		die(json_encode(array("error" => "Unauthorized access"), JSON_UNESCAPED_UNICODE));
	}
	
	if(!isset($_POST['id']) || !isset($_POST['fio'])) {
		die(json_encode(array("error" => "Invalid params"), JSON_UNESCAPED_UNICODE));
	}
	
	$accept = isset($_POST['accept']) ? true : false;
	$state = $accept ? 1 : 2;
	$txt = "Здравствуйте, ".$_POST['fio'].". Ваша вакансия была ".($accept ? "одобрена" : "отклонена").". :\n ".$_POST['comment']."\n https://urbanconsulting.md/ru/job/my-vacancyes/";
	
	$data = array(
		'state' => $state,
		'msg' => strlen($_POST["comment"]) ? $_POST["comment"] : "Вакансия заполнена неправильно.",
		'date' => current_time('mysql')
	);
	$where = array('id' => $_POST["id"]);
	$data_pattern = array('%d', '%s', '%s');
	$where_pattern = array('%d');
	
	$wpdb->update($db, $data, $where, $data_pattern, $where_pattern);
	
	$to = $_POST['wp_username'];
	$subject = "Рассмотрение заявки вакансии";
	$headers = "From: office@urbanconsulting.md" . "\r\n" .
	"CC: office@urbanconsulting.md";

	mail($to, $subject, $txt, $headers);
	header('Location: https://urbanconsulting.md/wp-admin/admin.php?page=sub-page');
?>