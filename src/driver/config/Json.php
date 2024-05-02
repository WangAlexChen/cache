<?php
namespace WangGe\Cache\driver\config;

/**
 * @author WangGe technical department <869476711@qq.com>
 * @desc
 * @date 2024-05-02
 */
class Json
{
    public function parse($config)
    {
        if (is_file($config)) {
            $config = file_get_contents($config);
        }
        $result = json_decode($config, true);
        return $result;
    }
}