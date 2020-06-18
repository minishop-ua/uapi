<?php

namespace Minishop\UApi\Request\Hosting\Database;

use Minishop\UApi\Request\Hosting\Database;
use Minishop\UApi\Response;

/**
 * Class DatabaseDelete
 * Minishop\UApi\Request\Hosting\Database
 */
class Delete extends Database
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'database_delete';
}