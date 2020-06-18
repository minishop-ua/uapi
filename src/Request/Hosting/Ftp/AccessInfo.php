<?php

namespace Minishop\UApi\Request\Hosting\Ftp;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class AccessInfo
 * Minishop\UApi\Request\Hosting\Ftp
 */
class AccessInfo extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\AccessInfo::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';
}