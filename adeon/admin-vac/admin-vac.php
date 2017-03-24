<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/adeon/admin-cv/admin-cv.css">
	</head>

	<body>
	<?php
		function getCategory($id){
			switch($id){
				case 0: return "Другое";
				case 1: return "Сельское хозяйство";
				case 2: return "Туризм";
				case 3: return "Рестораны, общепит";
				case 4: return "Маркетинг";
				case 5: return "Реклама, PR";
				case 6: return "Юриспруденция";
				case 7: return "Страхование";
				case 8: return "Спорт";
				case 9: return "Красота";
				case 10: return "Банки, Финансы ";
				case 11: return "Бухгалтерия";
				case 12: return "Аудиторство";
				case 13: return "Образование";
				case 14: return "Дизайн";
				case 15: return "Искусство";
				case 16: return "Развлечения";
				case 17: return "Транспорт и Логистика";
				case 18: return "Медицина и Фармацевтика";
				case 19: return "IT и Телекоммуникации";
				case 20: return "Производство, промышленность";
				case 21: return "Строительство и Недвижимость";
				case 22: return "СМИ, Журналистика";
				case 23: return "Переводы";
				case 24: return "Торговля и Продажи";
				case 25: return "Охрана и Безопасность";
				case 27: return "Персонал для дома и офиса";
			}
		}
		include get_home_path().'adeon/adeon.php';
		echo '<h2>Доступные Вакансии, ожидающие подтверждения</h2>';
	
		global $wpdb;
		$db="users_vac";
		$result = $wpdb->get_results("SELECT * FROM $db WHERE state=0", ARRAY_A);
		if(!empty($wpdb->last_error)) die($wpdb->last_error);
		
		if(!$result) {
			die("<p>Нет данных</p>");
		}
		
		foreach($result as $vac) { ?>
			<div class="cv-view">
				<div class="col-7">
					<div class="cv-view-field"><p><strong>ID вакансии</strong>: <?php echo $vac['id']; ?></p></div>
					<div class="cv-view-field"><p><strong>Название Вакансии</strong>: <?php echo $vac['name']; ?></p></div>
					<div class="cv-view-field"><p><strong>Имя пользователя</strong>: <?php echo $vac['wp_username']; ?></p></div>
					<div class="cv-view-field"><p><strong>Специальность</strong>: <?php echo $vac['spec']; ?></p></div>
					<div class="cv-view-field"><p><strong>Категория</strong>: <?php echo getCategory($vac['category']); ?></p></div>
					<div class="cv-view-field"><p><strong>Описание</strong>: <?php echo $vac['info']; ?></p></div>
					<div class="cv-view-field"><p><strong>Квалифицированный</strong>: <?php echo ($vac['qual'] == 1) ? "Да" : "Нет"; ?></p></div>
					<div class="cv-view-field"><p><strong>Неквалифицированный</strong>: <?php echo ($vac['unqual'] == 1) ? "Да" : "Нет"; ?></p></div>
					<div class="cv-view-field"><p><strong>Страна</strong>: <?php echo $country[$vac['country']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Город</strong>: <?php echo $city[$vac['country']][$vac['city']]; ?></p></div>
					<div class="cv-view-field"><p><strong>Дата</strong>: <?php echo $vac['date']; ?></p></div>
					
					<div class="comment">
						<form action="/adeon/admin-vac/process.php" method="POST">
							<textarea name="comment" id="" placeholder="Комментарий по поводу вакансии..." rows="3"></textarea>
							<input type="hidden" name="id" value="<?php echo $vac['id']; ?>">
							<input type="hidden" name="fio" value="<?php echo $vac['name']; ?>">
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
						if($vac['has_photo']) echo '<img src="/vac_data/users/'.$vac['wp_username'].'/'.$vac['id'].'.jpg"/>';
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