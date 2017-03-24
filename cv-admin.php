<?php
	include "wp-load.php";
	include "cv-adminview.php";

	if(isset($_POST['accept'])){
		$state=2;
		$txt = "Здравствуйте, ".$_POST['fio'].". Ваша заявка CV была одобрена. :\n ".$_POST['comment']."";
	} else {
		$state=0;
		$txt = "Здравствуйте, ".$_POST['fio'].". Ваша заявка CV была отклонена. :\n ".$_POST['comment']."";
	}
		$result = $wpdb->update("users_cv", array(
			'state' => $state,
			'msg' => $_POST["comment"],
			'time' => current_time('mysql')
			),
			array( 'id' => $_POST["cvid"]),
			array( '%d', '%s'),
			array( '%d' )
	);

	$to = $_POST['email'];
	$subject = "Рассмотрение заявки CV";
	$headers = "From: office@urbanconsulting.md" . "\r\n" .
	"CC: office@urbanconsulting.md";

	mail($to,$subject,$txt,$headers);
	header('Location: https://urbanconsulting.md/wp-admin/admin.php?page=mt-top-level-handle');
?>