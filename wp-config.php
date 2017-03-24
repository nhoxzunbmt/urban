<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'urbancon_sulting');

/** Имя пользователя MySQL */
define('DB_USER', 'urbancon_sulting');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'P3s1xXq5@LQB');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O$<7k{/B?b5M j/AV7mH(631U-*.BpPr/0NeF}}9|8}t%8yPfn>g:tP;xK-qJ^F{');
define('SECURE_AUTH_KEY',  'F^zBo,(FXB*6}bgZ-8 ;lqt/b|rgQJ,G#[E$?E0fO]%v!|9OlfCn.90l4x*N%Zl+');
define('LOGGED_IN_KEY',    'CS^q?&CgP8H~&]5XBPVAE-0i|iRMxl|=z$6bJ8&N}[<g9ReYsMqcb8kg-&&u~Ql#');
define('NONCE_KEY',        '76kszPKe66>5EEM?ay-m8NEQGpUzxq=*Fgh*>3]TZ>2q+8=iEP@BJ1-LwrW&_yo:');
define('AUTH_SALT',        'q;uYr{b//jw>0+c+ 8;u(,$rSSW4D[2C5(;W,@;~wPW3G=v~hVU]FX{HgJC=k7 E');
define('SECURE_AUTH_SALT', 'XL=@5J>eRL{RUF,$@~.Du-U/*.`{^)j;|.?yHgQ-f K~|@a>48#2QHF@<W.Yu!|6');
define('LOGGED_IN_SALT',   'A2Jc#t6(M/_gGdI!!XD@RdFix45OW,=nX<3{1=Q>x1;)u?;QH(! 2TZEeBjX=eiR');
define('NONCE_SALT',       'YW+,dSyZEch(ZA.2rX20q/+0X0ejhH:1odgM;l2ner2fZ]5|Lb#3c8%m}~ZVd|w5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'uc_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
