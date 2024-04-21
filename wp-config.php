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
define( 'DB_NAME', 'building' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'building' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'R._Y,&%zadB.D9f|=M+0zf|Ng =Px^#1aLhu3&|hzbq2*Q+VK.Dcvxp@{S_cX1tF' );
define( 'SECURE_AUTH_KEY',  '(!&gW[0<unDMero?m2PoRKWIeARsn%_RD&AANSRB]KbPl)VyW%_yX:p`JJTvXy_H' );
define( 'LOGGED_IN_KEY',    'wMt$/n!8c}XRG 25iCxgaI%U_!E=>V`PG^fi+B|Wjz&MZF$39F8gz0dLAd =Jy2f' );
define( 'NONCE_KEY',        '=>Uve0pnI1$zoM)3At70Du3/-*PY;)4sSCj9S=Q-pWLr!![@]bNW<S@Ku60;G0!W' );
define( 'AUTH_SALT',        '0GeNWScQhSbwy^LhW:iHEd6s<T `Sd{8j<zv V:cG(0w4uB4Br.be.?Kd$^q`JF_' );
define( 'SECURE_AUTH_SALT', 'dxJ0}E:J1(l)E%GsH[+qF3(4)R8:4>UJK9Iwf1#i~mvHRZ KyHBVFVk-)*|IK~4,' );
define( 'LOGGED_IN_SALT',   '-B@``}#j]sHc Z%jQt$GAhz5/9**N(2G_.vs!6xwh%[c<)$?`yz5$CVb,eIs#>mo' );
define( 'NONCE_SALT',       'kcnqL.4Z>(ig#RKWR.5x;Y9dPO2.JPS{#,Zj}O U.Fp5!U[$J`@%L&psz21WKP}>' );

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
