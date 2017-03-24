<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/adeon/admin-cv/admin-cv.css">
	</head>

	<body>
	<?php
		include get_home_path().'adeon/adeon.php';
		echo '<h2>Доступные CV, ожидающие подтверждения</h2>';
	
		global $wpdb;
		$db="users_cv";
		$result = $wpdb->get_results("SELECT * FROM $db WHERE state=0", ARRAY_A);
		if(!empty($wpdb->last_error)) die($wpdb->last_error);
		
		if(!$result) {
			die("<p>Нет данных</p>");
		}
		
		foreach($result as $cv) { ?>
			<div class="cv-view">
				<div class="col-7">
					<div class="cv-view-field"><p><strong>ID пользователя</strong>: <?php echo $cv['wp_userid']; ?></p></div>
					<div class="cv-view-field"><p><strong>Имя пользователя</strong>: <?php echo $cv['wp_username']; ?></p></div>
					<div class="cv-view-field"><p><strong>Имя</strong>: <?php echo $cv['name']; ?></p></div>
					<div class="cv-view-field"><p><strong>Специальность</strong>: <?php echo $cv['spec']; ?></p></div>
					<div class="cv-view-field"><p><strong>Описание</strong>: <?php echo $cv['info']; ?></p></div>
					<div class="cv-view-field"><p><strong>Возраст</strong>: <?php echo $cv['age']; ?></p></div>
					<div class="cv-view-field"><p><strong>Адрес</strong>: <?php echo $cv['address']; ?></p></div>
					<div class="cv-view-field"><p><strong>Email</strong>: <?php echo $cv['email']; ?></p></div>
					<div class="cv-view-field"><p><strong>Страна</strong>: <?php echo $country[$cv['country']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Город</strong>: <?php echo $city[$cv['country']][$cv['city']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Телефон</strong>: <?php echo $cv['phone']; ?></p></div>
					<div class="cv-view-field"><p><strong>Дата</strong>: <?php echo $cv['date']; ?></p></div>
					
					<div class="comment">
						<form action="/adeon/admin-cv/process.php" method="POST">
							<textarea name="comment" id="" placeholder="Комментарий по поводу CV..." rows="3"></textarea>
							<input type="hidden" name="id" value="<?php echo $cv['id']; ?>">
							<input type="hidden" name="wp_username" value="<?php echo $cv['wp_username']; ?>">
							<input type="hidden" name="fio" value="<?php echo $cv['name']; ?>">
							<div class="cv-view-buttons">
							<input class="btn-agree" type="submit" value="Принять" name='accept'>
							<input class="btn-disagree" type="submit" value="Отклонить" name='reject'>
							</div>
						</form>
					</div>
				</div>
			
				<div class="col-5">
					<div class="cv-view-photo">
					<?php 
						if($cv['has_photo']) echo '<img src="/cv_data/users/'.$cv['wp_username'].'/photo.jpg"/>';
						else  echo '<img src="/wp-content/uploads/2017/03/checked.png"/>';
					?>
					</div>
				</div>

				<div class="clear"></div>
				
			</div>
		<? }
		
	?>
	</body>
</html>