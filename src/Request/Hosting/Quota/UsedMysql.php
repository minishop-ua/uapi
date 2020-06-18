<?php

namespace Minishop\UApi\Request\Hosting\Quota;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class UsedMysql
 * Minishop\UApi\Request\Hosting\Quota
 */
class UsedMysql extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Quota\UsedMysql::class;

    /**
     * @var string
     */
    protected $class = 'hosting_quota';
}