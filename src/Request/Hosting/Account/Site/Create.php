<?php

namespace Minishop\UApi\Request\Hosting\Account\Site;

use Minishop\UApi\Request\Hosting\Account\Site;
use Minishop\UApi\Response;

/**
 * Class Create
 * Minishop\UApi\Request\Hosting\Account\Site
 */
class Create extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Create::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

	/**
	 * @var string
	 */
    protected $method = 'site_create';
}