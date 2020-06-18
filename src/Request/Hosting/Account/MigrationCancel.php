<?php

namespace Minishop\UApi\Request\Hosting\Account;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class MigrationCancel
 * Minishop\UApi\Request\Hosting\Account
 */
class MigrationCancel extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\MigrationCancel::class;

    /**
     * @var string
     */
    protected $class = 'hosting_account';
}