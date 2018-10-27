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
define('DB_NAME', 'yandyblog');

/** Имя пользователя MySQL */
define('DB_USER', 'yandyblog');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'A010497123zeki!');

/** Имя сервера MySQL */
define('DB_HOST', 'yandyblog.db.11978125.5cc.hostedresource.net');

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
define('AUTH_KEY',         '.pSg=^[8j?@vH-clN=8@wU0pf5C&<I~.%quP5%nQIP=LfCq6eV]ZXIjx0%H]8jD&');
define('SECURE_AUTH_KEY',  'U o2k]n*_l=]RGEM;qT0dR$=qn4xZ$U&9,U$ 79OW%z-W%^<pbV!C1L!?[]!yg,n');
define('LOGGED_IN_KEY',    'Rl 9Z^uf=Vmvx{ZSTsvY/cb/z#LE}tn3kxJ*d1|kLM>yKGZg-vETlg2Q2-6Z4{$)');
define('NONCE_KEY',        '17dC/fmh|q+%:F`wS~n*qLt1X[gg8*mH5*Y[iFjW-m=tz@fZ35[p#Vt:jyZ3wZnC');
define('AUTH_SALT',        '~v_n,S9jhRf]kti={!7z01C 3Is[-R/o7gLo!E~]/|t*EsmI3r&#:_F:UkF,x*.U');
define('SECURE_AUTH_SALT', '][).{<R#W_M&jfONt_dfilT*6j#eucXotI!-BH~/ZM!mJ!`l#d?Ljsot?,Ok.cks');
define('LOGGED_IN_SALT',   'Y:/dYqZ^sX3%z^_>Hy;Q*KTh}3Z(cD*;8WlFBEVF)3Q-b^A}?>K~GCC8:L(COc>%');
define('NONCE_SALT',       'sh-{:IO[V`mZK.KHv9-)@:2k5V}vU{}D]wb3c)yh:`<AddX5~,aYf$MomO~OfQ6t');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
