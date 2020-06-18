<?php

namespace Minishop\UApi\Request\Hosting\Database;

use Minishop\UApi\Request\Hosting\Database;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Hosting\Database
 */
class InfoSingle extends Database
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Database\InfoSingle::class;

    /**
     * @var string
     */
    protected $class = 'hosting_database';

	/**
	 * @var string
	 */
    protected $method = 'info';
}