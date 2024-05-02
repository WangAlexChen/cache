<?php
require __DIR__ . '/../vendor/autoload.php';

use WangGe\Cache\Cache;

Cache::set('test','test11');

$cache = Cache::get('test');

print_r($cache);