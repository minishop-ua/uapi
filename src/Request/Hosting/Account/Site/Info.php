<?php

namespace Minishop\UApi\Request\Hosting\Account\Site;

use Minishop\UApi\Request\Hosting\Account\Site;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Hosting\Account\Site
 */
class Info extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Info::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';
}