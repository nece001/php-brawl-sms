<?php

namespace Nece\Brawl\Sms;

use Error;
use Nece\Brawl\ConfigAbstract;
use ReflectionClass;

/**
 * 实例工厂
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-17
 */
class Factory
{
    /**
     * 创建配置对象
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @param string $provider 服务商名
     *
     * @return \Nece\Brawl\ConfigAbstract
     */
    public static function createConfig($provider)
    {
        $class = __NAMESPACE__ . '\\' . ucfirst($provider) . '\\Config';
        return new $class();
    }

    /**
     * 创建客户端
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @param ConfigAbstract $config
     *
     * @return \Nece\Brawl\Sms\SenderAbstract
     */
    public static function createClient(ConfigAbstract $config)
    {
        $class = new ReflectionClass($config);
        $namespace = $class->getNamespaceName();
        $parts = explode('\\', $namespace);
        $parts[] = 'Sender';
        try {
            $class = implode('\\', $parts);
            $instance = new $class();
            $instance->setConfig($config);
            return $instance;
        } catch (Error $e) {
            throw new SmsException('不支持的短信发送器');
        }
    }
}
