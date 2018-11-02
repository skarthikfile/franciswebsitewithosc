<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/oc/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/oc/upload/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/oc/upload/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/oc/upload/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/oc/upload/image/');
define('DIR_STORAGE', 'C:/xampp/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'oc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');