<?php

namespace Minishop\UApi\Request\Hosting\Database\User;

use Minishop\UApi\Request\Hosting\Database\User;
use Minishop\UApi\Response;

/**
 * Class Delete
 * Minishop\UApi\Request\Hosting\Database\User
 */
class Delete extends User
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\User\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'user_delete';
}