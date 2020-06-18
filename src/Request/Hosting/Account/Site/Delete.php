<?php

namespace Minishop\UApi\Request\Hosting\Account\Site;

use Minishop\UApi\Request\Hosting\Account\Site;
use Minishop\UApi\Response;

/**
 * Class Delete
 * Minishop\UApi\Request\Hosting\Site
 */
class Delete extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

	/**
	 * @var string
	 */
    protected $method = 'site_delete';
}