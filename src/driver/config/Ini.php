<?php
namespace WangGe\Cache\driver\config;
/**
 * @author WangGe technical department <869476711@qq.com>
 * @desc
 * @date 2024-05-02
 */
class Ini
{
    public function parse($config)
    {
        if (is_file($config)) {
            return parse_ini_file($config, true);
        } else {
            return parse_ini_string($config, true);
        }
    }
}