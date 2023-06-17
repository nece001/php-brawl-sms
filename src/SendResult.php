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
    private $request_id;
    private $result = array();

    /**
     * 设置请求ID
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @param string $value
     *
     * @return void
     */
    public function setRequestId($value)
    {
        $this->request_id = $value;
    }

    /**
     * 获取请求ID
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

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
