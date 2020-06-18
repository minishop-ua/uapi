<?php

namespace Minishop\UApi\Request\Hosting\Account;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class Plans
 * Minishop\UApi\Request\Hosting\Account
 */
class Plans extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Plans::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';
}