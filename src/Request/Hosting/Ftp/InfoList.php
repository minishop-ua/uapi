<?php

namespace Minishop\UApi\Request\Hosting\Ftp;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class InfoList
 * Minishop\UApi\Request\Hosting\Ftp
 */
class InfoList extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\InfoList::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

	/**
	 * @var string
	 */
    protected $method = 'info';
}