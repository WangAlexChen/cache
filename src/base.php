<?php

defined("DS") or define('DS', DIRECTORY_SEPARATOR);
defined('IS_CLI') or define('IS_CLI', PHP_SAPI == 'cli' ? true : false);
defined('WG_PATH') or define('WG_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . DS);
defined('WG_BASE_PATH') or define("WG_BASE_PATH", __DIR__ . DS);
defined('WG_CONFIG_PATH') or define("WG_CONFIG_PATH", WG_BASE_PATH . 'config'. DS);
defined('WG_CACHE_ROOT_PATH') or define('WG_CACHE_ROOT_PATH', dirname(realpath(WG_PATH)) . DS);
defined('WG_CACHE_RUNTIME_PATH') or define('WG_CACHE_RUNTIME_PATH', WG_CACHE_ROOT_PATH . 'runtime' . DS);

//缓存文件根目录
defined('WG_CACHE_PATH') or define('WG_CACHE_PATH', WG_CACHE_RUNTIME_PATH . 'cache' . DS);

//日志文件根目录
defined('WG_LOG_PATH') or define('WG_LOG_PATH', WG_CACHE_RUNTIME_PATH . 'log' . DS);


defined("WG_CONF_EXT") or define('WG_CONF_EXT','.php');
define('WG_CACHE_START_TIME', microtime(true));
define('WG_CACHE_START_MEM', memory_get_usage());

use WangGe\Cache\Config;
Config::init();
