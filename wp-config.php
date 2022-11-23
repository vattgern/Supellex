<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'supellex' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':SBPND<<ezRH7M|v(Q$4:>ag5X!UvzPEYV|{x5``qI.x3]@!r{3d`soXPY*HavuU' );
define( 'SECURE_AUTH_KEY',  'Z9}xbJ>3ZN@KfO(f}FWl@-)p472FtS@)[0QI{q6{!:7>>C0=PD~hz67;ye,>+iPy' );
define( 'LOGGED_IN_KEY',    'RGg@83Q^BF^7hr*uJZO(XScOaH.3c:z!DiAQB.hC.[xVn2Y# 2yQd)S2`b rf7g>' );
define( 'NONCE_KEY',        '%v~^BrvT`!/)JM~GP[;9%j?BU=9 FTGh7tmD`h>8EJ0$;4fh,lX|P!9W?/Y B;,w' );
define( 'AUTH_SALT',        '!J]FgQXJ >z-H3YfIm2F75~g#U[)|W&?51]$Oi_Pj)l4^QbV/Fis~L:7hdII--4Z' );
define( 'SECURE_AUTH_SALT', '+(jCm=vKEm6^s1Bnf9Uyp,J 2JyZUh~sijW8vjfvo$(<NSdl7 0|H6~fC4hu|~:g' );
define( 'LOGGED_IN_SALT',   'W5U %zUfl|-fa:wpfD:rgy12K=6jntM{%?b,&Udc8G]Th:&!1$7Tgp-FD%T!:]Fo' );
define( 'NONCE_SALT',       'jFllKMv%_lBdEjVONFl%L)Qkan<OB1}P;5w(/8@XE<.>#3OEc/GN;k DA3SzB_q!' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
