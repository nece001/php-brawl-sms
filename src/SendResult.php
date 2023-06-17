<?php

namespace Nece\Brawl\Sms;

use Nece\Brawl\ResultAbstract;

/**
 * 发送结果
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-16
 */
class SendResult extends ResultAbstract
{
    public $result = array();

    /**
     * 添加结果
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @param string $serial_no
     * @param string $phone_number
     * @param string $fee
     * @param string $session_context
     * @param string $code
     * @param string $message
     * @param string $iso_code
     * @param bool $success
     *
     * @return void
     */
    public function addResult($serial_no, $phone_number, $fee, $session_context, $code, $message, $iso_code, $success)
    {
        $this->result[] = array(
            'serial_no' => $serial_no,
            'phone_number' => $phone_number,
            'session_context' => $session_context,
            'fee' => $fee,
            'code' => $code,
            'message' => $message,
            'iso_code' => $iso_code,
            'success' => $success,
        );
    }

    /**
     * 获取结果
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }
}
