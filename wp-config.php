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
define('DB_NAME', 'Medusha');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UYR@evc8<QQ9{L,?Nk1}d)qM]lE)D*xB)CGhwL?I:*oRFjj{U=A[V`mSM>8WvgoI');
define('SECURE_AUTH_KEY',  'BABF<Y}qoEPILqZ~e!iC>`S40CpXSXqhqSoJ6T(Y!TZ:=a!dzDlz%VV;~Fg8Nm`F');
define('LOGGED_IN_KEY',    '3Xi/t;70:~t:)fU6 z45rHEUtu~!:{Un-mR8rvdskoE(ng4GBT0C2#<{pE}swt}>');
define('NONCE_KEY',        'a,VOpFFbPX{Y@T|/qMg%?cb$7?j/e/*^&#=HD4L.Q@:V_EO,];(7m`q(^EQ()O^Y');
define('AUTH_SALT',        'JB|EQ)U*lI[,NZU2o)c+T}q..vB+d/S#`!n0duzl@<T6pPrF@g_EeLmiyzbwN+cT');
define('SECURE_AUTH_SALT', '!V&=%u>4U?OFQ@xXmfx=N?}3yJy@.(-+E[Vt*l4_/RNRF#lQi].ivdd]#Layfo,C');
define('LOGGED_IN_SALT',   'HEC$Y$><S@Dzi_?KKPQ`h6@mQ6+V!ZPLyv(n%4v;DqQ3qMccaWPLS+YSDdQ7h{N4');
define('NONCE_SALT',       ':UzWR}^}?KVfYbsjt*W6g7Csk8ffh.AmEpVv,AedN6ry/i{{_G8x1]=@g`l>H}wn');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
