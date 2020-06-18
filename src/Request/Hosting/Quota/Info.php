<?php

namespace Minishop\UApi\Request\Hosting\Quota;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Hosting\Quota
 */
class Info extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Quota\Info::class;

    /**
     * @var string
     */
    protected $class = 'hosting_quota';
}