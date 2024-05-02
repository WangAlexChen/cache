<?php
namespace WangGe\Cache\driver\config;

/**
 * @author WangGe technical department <869476711@qq.com>
 * @desc
 * @date 2024-05-02
 */
class Xml
{
    public function parse($config)
    {
        if (is_file($config)) {
            $content = simplexml_load_file($config);
        } else {
            $content = simplexml_load_string($config);
        }
        $result = (array) $content;
        foreach ($result as $key => $val) {
            if (is_object($val)) {
                $result[$key] = (array) $val;
            }
        }
        return $result;
    }
}