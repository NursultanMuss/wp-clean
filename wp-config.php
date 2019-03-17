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
define( 'DB_NAME', 'my_site_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1Aw)+BE[iPVG?pCga&A0znQDxQYu9^(@>J[>94E`.#(?McY-8-OEUB(H1y#i7%-A' );
define( 'SECURE_AUTH_KEY',  '2APq6AN-|8Lw``NA(g[Dumzi9$AE$[;QLVWnvN?`Z,o3zf9copS`KaB)bM(qE;z(' );
define( 'LOGGED_IN_KEY',    '?_gHLgs.jHX>HGQR)QQ@6jFkplpziD_,!}z(v~=RWf)w13iW|Z5}&z$(7b(1D{:1' );
define( 'NONCE_KEY',        '/#JZ}%J?h!06;Ee@UV[^0`F6plL{PDmOd<wLDRzJ^K~yoQ0x6&aOa[3z?6L9:$3y' );
define( 'AUTH_SALT',        '|+|exXZq`H>#QFG;@rHBsY31/;_{P;m=48M&G-Ub%$dEsuHc`CD!OuTKr8{}XPKb' );
define( 'SECURE_AUTH_SALT', 'q d16t}I0i0;r3vr``d`JMYx]^uqF#k{._{5dmwi3>g9lD2BK[[~AX%eDbF+Mufy' );
define( 'LOGGED_IN_SALT',   'Z@}k*ROBL&XP33/f/g7pKzU!Ba[2^TSnMOy1CH<  -mL[w|15-[9S58Q-%2]_a&x' );
define( 'NONCE_SALT',       'U}vLot+`z$a`MVWD+?~+1h5I((T@?O{8}Xu{[5?PdeqQhw~{KmMtkgJ7g]iX;M3U' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
