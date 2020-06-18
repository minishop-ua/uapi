<?php

namespace Minishop\UApi\Request\Hosting\Account;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Hosting\Account
 */
class Info extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Info::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';
}