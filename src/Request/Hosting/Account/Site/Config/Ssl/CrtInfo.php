<?php

namespace Minishop\UApi\Request\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Request\Hosting\Account\Site\Config\Host;
use Minishop\UApi\Response;

/**
 * Class CrtInfo
 * Minishop\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtInfo extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtInfo::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';
}