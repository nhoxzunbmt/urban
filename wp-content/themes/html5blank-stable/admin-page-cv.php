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
		echo '<h2>Доступные CV, ожидающие подтверждения</h2>';
	
		global $wpdb;
		$db="users_cv";
		$result = $wpdb->get_results("SELECT * FROM $db WHERE state=1", ARRAY_A);
		if(!empty($wpdb->last_error)) die($wpdb->last_error);
		
		if(!$result) {
			die("<p>Нет данных</p>");
		}
		
		foreach($result as $cv) { ?>
			<div class="cv-view">
				<div class="col-9">
					<div class="cv-view-field"><p><strong>Имя</strong>: <?php echo $cv['name']; ?></p></div>
					<div class="cv-view-field"><p><strong>Специальность</strong>: <?php echo $cv['spec']; ?></p></div>
					<div class="cv-view-field"><p><strong>Описание</strong>: <?php echo $cv['info']; ?></p></div>
					<div class="cv-view-field"><p><strong>Возраст</strong>: <?php echo $cv['age']; ?></p></div>
					<div class="cv-view-field"><p><strong>Адрес</strong>: <?php echo $cv['address']; ?></p></div>
					<div class="cv-view-field"><p><strong>Email</strong>: <?php echo $cv['email']; ?></p></div>
					<div class="cv-view-field"><p><strong>Страна</strong>: <?php echo $country[$cv['country']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Город</strong>: <?php echo $city[$cv['country']][$cv['city']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Телефон</strong>: <?php echo $cv['phone']; ?></p></div>
				</div>
			
				<div class="col-3 cv-view-photo"> 
					<?php 
						if($cv['has_photo']) echo '<div class="wrapper" style="background-image: url(/cv_data/users/'.$cv['user_name'].'/photo.jpg);"></div>';
						else  echo '<div class="wrapper" style="background-image: url(/wp-content/uploads/2017/03/checked.png);"></div>';
					?>
				</div>
			
				<div class="comment">
					<form action="/adeon/admin-cv.php" method="POST">
						<textarea name="comment" id="" cols="135" placeholder="Комментарий по поводу CV..." rows="3"></textarea>
						<input type="hidden" name="cvid" value="<?php echo $cv['id']; ?>">
						<input type="hidden" name="email" value="<?php echo $cv['email']; ?>">
						<input type="hidden" name="fio" value="<?php echo $cv['name']; ?>">
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