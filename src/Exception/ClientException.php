<?php

namespace Lazzard\FtpClient\Exception;

/**
 * Class ClientException
 *
 * @since 1.0
 * @package Lazzard\FtpClient\Exception
 * @author EL AMRANI CHAKIR <elamrani.sv.laza@gmail.com>
 */
class ClientException extends \Exception implements FtpClientException
{
    public function __construct($message)
    {
        parent::__construct(sprintf(
            "[FtpClient ERROR] - %s",
            $message
        ));
    }

    public static function getFtpServerResponse()
    {
        return explode(' ', error_get_last()['message'], 2)[1];
    }
}