<?php

namespace Minishop\UApi\Request\Hosting\Quota;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class UsedFtp
 * Minishop\UApi\Request\Hosting\Quota
 */
class UsedFtp extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Quota\UsedFtp::class;

    /**
     * @var string
     */
    protected $class = 'hosting_quota';
}