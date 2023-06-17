<?php

namespace Nece\Brawl\Sms;

use Nece\Brawl\ClientAbstract;

/**
 * 发送基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-16
 */
abstract class SenderAbstract extends ClientAbstract
{
    protected $phone_numbers = array();

    /**
     * 添加待发送号码
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @param string $phone_number
     * @param string $code
     *
     * @return void
     */
    public function addPhoneNumber($phone_number, $code = '86')
    {
        $this->phone_numbers[] = array(
            'phone_number' => $phone_number,
            'code' => $code
        );
    }

    /**
     * 发送
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @param string $template_id
     * @param array $params
     *
     * @return \Nece\Brawl\Sms\SendResult
     */
    abstract public function send($template_id, array $params): SendResult;
}
