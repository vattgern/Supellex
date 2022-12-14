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
define( 'AUTH_KEY',         ')9XuMB|,~$Qn^FRsB92BYFw!m||5ebT#ajvc+DQ<pK3ebfcNs>*>l2_[{:X7dA<z' );
define( 'SECURE_AUTH_KEY',  'hi46BZfEo_>?_I4gOvb%t%sQYvbu0[+dp)o71>zY`oRaVa[wgY.Q-):rvM1EOFi*' );
define( 'LOGGED_IN_KEY',    '@F`-WL/8C)idoOIHmG7EmTH}Mr6YKsSVCth{wqWd%x,Cq7{:$J|kXX@y.%;h%o4+' );
define( 'NONCE_KEY',        'M4>u*kTOmAuLq_q+onF^V.x8dWkbfbQ8Hh.`ojPsG4=.yAUe2);MK]R&/]l6Cj1L' );
define( 'AUTH_SALT',        '*}pVWF*VzfFb%*)pu!/J<V)Pv$d#KKvPoCh;W6KWMX=vPiNc.C[R^OmAW{e&$v0_' );
define( 'SECURE_AUTH_SALT', 'U&cpK5yST?zYL5Yu[fS:6[WmbIrF8@>Hvh[b=k|Gh^@X{VkW){qcO92q>{=urv!?' );
define( 'LOGGED_IN_SALT',   '^_5Qv$8 Wkp-Z>Dp <6raoTO^FUy;A]O$;Q`S.d(OEpgdM;gkC*Ygbu]8SW|7 ] ' );
define( 'NONCE_SALT',       'rGslqRem#K7K<T2U-T~O}T+iX%RXDqUK1RghoWRCGI`o_hZ<Rwf,.BF|t}38w;oL' );

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
