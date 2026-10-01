<?php

\define('_PS_MODE_DEV_', \false);
\define('_PS_DISPLAY_COMPATIBILITY_WARNING_', \false);
\define('_PS_DISPLAY_ONLY_ERRORS_', \false);
\define('_PS_DEBUG_SQL_', \true);
\define('_PS_DEBUG_PROFILING_', \false);
\define('_PS_MODE_DEMO_', \false);
\define('_PS_ALLOW_MULTI_STATEMENTS_QUERIES_', \false);
\define('_PS_ROOT_DIR_', \getenv('_PS_ROOT_DIR_') ? \getenv('_PS_ROOT_DIR_') : \getenv('REDIRECT__PS_ROOT_DIR_'));
\define('_PS_CORE_DIR_', \realpath($currentDir . '/..'));
\define('_PS_ALL_THEMES_DIR_', \_PS_ROOT_DIR_ . '/themes/');
\define('_PS_BO_ALL_THEMES_DIR_', \_PS_ADMIN_DIR_ . '/themes/');
\define('_PS_ENV_', 'test');
\define('_PS_CACHE_DIR_', \_PS_ROOT_DIR_ . '/var/cache/' . \_PS_ENV_ . \DIRECTORY_SEPARATOR);
\define('_PS_CONFIG_DIR_', \_PS_CORE_DIR_ . '/config/');
\define('_PS_CUSTOM_CONFIG_FILE_', \_PS_CONFIG_DIR_ . 'settings_custom.inc.php');
\define('_PS_CLASS_DIR_', \_PS_CORE_DIR_ . '/classes/');
\define('_PS_DOWNLOAD_DIR_', \_PS_ROOT_DIR_ . $dir);
\define('_PS_MAIL_DIR_', \_PS_CORE_DIR_ . '/mails/');
\define('_PS_MODULE_DIR_', \_PS_ROOT_DIR_ . '/modules/');
\define('_PS_OVERRIDE_DIR_', \_PS_ROOT_DIR_ . '/override/');
\define('_PS_PDF_DIR_', \_PS_CORE_DIR_ . '/pdf/');
\define('_PS_TRANSLATIONS_DIR_', \_PS_ROOT_DIR_ . '/translations/');
\define('_PS_UPLOAD_DIR_', \_PS_ROOT_DIR_ . '/upload/');
\define('_PS_CONTROLLER_DIR_', \_PS_CORE_DIR_ . '/controllers/');
\define('_PS_ADMIN_CONTROLLER_DIR_', \_PS_CORE_DIR_ . '/controllers/admin/');
\define('_PS_FRONT_CONTROLLER_DIR_', \_PS_CORE_DIR_ . '/controllers/front/');
\define('_PS_TOOL_DIR_', \_PS_CORE_DIR_ . '/tools/');
\define('_PS_GEOIP_DIR_', \_PS_CORE_DIR_ . '/app/Resources/geoip/');
\define('_PS_GEOIP_CITY_FILE_', 'GeoLite2-City.mmdb');
\define('_PS_VENDOR_DIR_', \_PS_CORE_DIR_ . '/vendor/');
\define('_PS_IMG_SOURCE_DIR_', \_PS_ROOT_DIR_ . '/img/');
\define('_PS_IMG_DIR_', \_PS_ROOT_DIR_ . $dir);
\define('_PS_CORE_IMG_DIR_', \_PS_CORE_DIR_ . '/img/');
\define('_PS_CAT_IMG_DIR_', \_PS_IMG_DIR_ . 'c/');
\define('_PS_COL_IMG_DIR_', \_PS_IMG_DIR_ . 'co/');
\define('_PS_EMPLOYEE_IMG_DIR_', \_PS_IMG_DIR_ . 'e/');
\define('_PS_GENDERS_DIR_', \_PS_IMG_DIR_ . 'genders/');
\define('_PS_LANG_IMG_DIR_', \_PS_IMG_DIR_ . 'l/');
\define('_PS_MANU_IMG_DIR_', \_PS_IMG_DIR_ . 'm/');
\define('_PS_ORDER_STATE_IMG_DIR_', \_PS_IMG_DIR_ . 'os/');
\define('_PS_PRODUCT_IMG_DIR_', \_PS_IMG_DIR_ . 'p/');
\define('_PS_PROFILE_IMG_DIR_', \_PS_IMG_DIR_ . 'pr/');
\define('_PS_SHIP_IMG_DIR_', \_PS_IMG_DIR_ . 's/');
\define('_PS_STORE_IMG_DIR_', \_PS_IMG_DIR_ . 'st/');
\define('_PS_SUPP_IMG_DIR_', \_PS_IMG_DIR_ . 'su/');
\define('_PS_TMP_IMG_DIR_', \_PS_IMG_DIR_ . 'tmp/');
/* Settings php */
\define('_PS_TRANS_PATTERN_', '(.*[^\\\\])');
/* Tax behavior */
\define('PS_TAX_EXC', 1);
\define('PS_TAX_INC', 0);
// Rounding
// Note - since PHP 8.4, there is also a new rounding modes in round()
// PHP_ROUND_CEILING, PHP_ROUND_FLOOR, PHP_ROUND_TOWARD_ZERO, PHP_ROUND_AWAY_FROM_ZERO
\define('PS_ROUND_UP', 0);
\define('PS_ROUND_DOWN', 1);
// PHP value PHP_ROUND_HALF_UP is 1
\define('PS_ROUND_HALF_UP', 2);
// PHP value PHP_ROUND_HALF_DOWN is 2
\define('PS_ROUND_HALF_DOWN', 3);
// PHP value PHP_ROUND_HALF_EVEN is 3
\define('PS_ROUND_HALF_EVEN', 4);
// PHP value PHP_ROUND_HALF_ODD is 4
\define('PS_ROUND_HALF_ODD', 5);
/* SQL Replication management */
\define('_PS_USE_SQL_SLAVE_', \false);
/* PS Technical configuration */
\define('_PS_ADMIN_PROFILE_', 1);
/* Cache */
\define('_PS_CACHEFS_DIRECTORY_', \_PS_ROOT_DIR_ . '/cache/cachefs/');
/* Geolocation */
\define('_PS_GEOLOCATION_NO_CATALOG_', 0);
\define('_PS_GEOLOCATION_NO_ORDER_', 1);
/* Smarty */
\define('_PS_SMARTY_NO_COMPILE_', 0);
\define('_PS_SMARTY_CHECK_COMPILE_', 1);
\define('_PS_SMARTY_FORCE_COMPILE_', 2);
\define('_PS_CACHE_CA_CERT_FILE_', \_PS_CACHE_DIR_ . 'cacert.pem');
