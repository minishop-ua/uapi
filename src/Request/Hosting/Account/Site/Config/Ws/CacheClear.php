<?php

namespace Minishop\UApi\Request\Hosting\Account\Site\Config\Ws;

use Minishop\UApi\Request\Hosting\Account\Site\Config\Host;
use Minishop\UApi\Response;

/**
 * Class CacheClear
 * Minishop\UApi\Request\Hosting\Account\Site\Config\Ws
 */
class CacheClear extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ws\CacheClear::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ws';
}