<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Study</title>
		<link rel="stylesheet" href="/wp-content/themes/html5blank-stable/admin-page-cv.css">
	</head>

	<body>
	<?php
		include 'adeon.php';
		echo '<h2>Доступные Вакансии, ожидающие подтверждения</h2>';
	
		global $wpdb;
		$db="vacancies";
		$result = $wpdb->get_results("SELECT * FROM $db WHERE state=1", ARRAY_A);
		if(!empty($wpdb->last_error)) die($wpdb->last_error);
		
		if(!$result) {
			die("<p>Нет данных</p>");
		}
		
		foreach($result as $vac) { ?>
			<div class="cv-view">
				<div class="col-9">
					<div class="cv-view-field"><p><strong>Заголовок</strong>: <?php echo $vac['name']; ?></p></div>
					<div class="cv-view-field"><p><strong>Страна</strong>: <?php echo $country[$vac['country']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Город</strong>: <?php echo $city[$vac['country']][$vac['city']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Специальность</strong>: <?php echo $vac['spec']; ?></p></div>
					<div class="cv-view-field"><p><strong>Сфера деятельности</strong>: <?php echo $vac['act']; ?></p></div>
					<div class="cv-view-field"><p><strong>Доп.Инфа</strong>: <?php echo $vac['information']; ?></p></div>
					<div class="cv-view-field"><p><strong>Квалиф/Неквалиф</strong>: <?php echo ($vac['qual']) ? "Квалифицированный" : "Неквалифицированный"; ?></p></div>
					<div class="cv-view-field"><p><strong>Дата</strong>: <?php echo $vac['date']; ?></p></div>
				</div>
			
				<div class="col-3 cv-view-photo"> 
					<?php 
						if($vac['has_photo']) echo '<div class="wrapper" style="background-image: url(/cv_data/users/'.$vac['user_name'].'/photo.jpg);"></div>';
						else  echo '<div class="wrapper" style="background-image: url(/wp-content/uploads/2017/03/checked.png);"></div>';
					?>
				</div>
			
				<div class="comment">
					<form action="/adeon/admin-vac.php" method="POST">
						<textarea name="comment" id="" cols="135" placeholder="Комментарий администратора" rows="3"></textarea>
						<input type="hidden" name="vacid" value="<?php echo $vac['id']; ?>">
						<input type="hidden" name="useremail" value="<?php echo $vac['useremail']; ?>">
						<div class="cv-view-buttons">
						<div class="btn-agree"><input type="submit" value="Принять" name='accept'></div>
						<div class="btn-disagree"><input type="submit" value="Отклонить" name='reject'></div>
						</div>
					</form>
				</div>
				
			</div>
		<? }
		
	?>
	</body>
</html>