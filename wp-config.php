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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'safety' );

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
define( 'AUTH_KEY',         '8ug.GY}pe]!MiFfPS+hHj-{s@S8?Z}02EC,1G/4HSR}tf40b]r%RWb5w&GF# 8oF' );
define( 'SECURE_AUTH_KEY',  'r5%?AOKIAc{H@*u4~a28==/FE 6T(Vh/)g@^b{>Q0BOJ7zFA/xH?i.aG.trSH[%`' );
define( 'LOGGED_IN_KEY',    'FK%82H`hD3[^<~PgKIpkQRv/PFh,B+- >7*,G[WKnnS`#0*n2@|6$M-!+eZtSU.o' );
define( 'NONCE_KEY',        '])qsvBSj#(<E`#[1vA+L#<_V+xs57l>U|h!i;1areE@F6w1},cGPK<D:TFlB`%z&' );
define( 'AUTH_SALT',        ':y4Y8Yf.=?|cf*mOQ9<1NFG+~{z%$qOr(h]l=yZsw?K2rTU[.(<jNo yMx!w&l,h' );
define( 'SECURE_AUTH_SALT', '!,jEn{!ZrY,oC~)oTB.<k0B>BES+E}(NkRb$:ETn10#m,QKQ|Jz^GMh9Pkc}J#>>' );
define( 'LOGGED_IN_SALT',   '~&L2-)P$e^r`>qS!KS,p!AIM3ka}Z]YWbiVW5<wyH0eaL0Mk9eD<rv1TN+c%?)0S' );
define( 'NONCE_SALT',       'G |qM{O76wiX9O9`uT1z.|%<#y-AZ/w$5x-u}K$@?{CygjUqBLF63eyh+7MbxF99' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
