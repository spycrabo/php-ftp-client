<?php

namespace Lazzard\FtpClient\Configuration\Exception;

use Lazzard\FtpClient\Exception\FtpClientException;

/**
 * Class OptionException
 *
 * @since 1.0
 * @package Lazzard\FtpClient\FtpConfiguration\Exception
 * @author EL AMRANI CHAKIR <elamrani.sv.laza@gmail.com>
 */
class OptionException extends \InvalidArgumentException implements FtpClientException
{
    public function __construct($message)
    {
        parent::__construct("[FTP Configuration Exception] " . $message);
    }
}