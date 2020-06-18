<?php

namespace Minishop\UApi\Request\Hosting\Database\User;

use Minishop\UApi\Request\Hosting\Database\User;
use Minishop\UApi\Response;

/**
 * Class Revoke
 * Minishop\UApi\Request\Hosting\Database\User
 */
class Revoke extends User
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Revoke::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_revoke';
}