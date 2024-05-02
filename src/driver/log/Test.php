<?php

namespace WangGe\Cache\driver\log;

/**
 * @author WangGe technical department <869476711@qq.com>
 * @desc  模拟测试输出
 * @date 2024-05-02
 */
class Test
{
    /**
     * 日志写入接口
     * @access public
     * @param array $log 日志信息
     * @return bool
     */
    public function save(array $log = [])
    {
        return true;
    }

}