<?php

namespace Minishop\UApi\Request\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Request\Hosting\Account\Site\Config\Host;
use Minishop\UApi\Response;

/**
 * Class CrtDelete
 * Minishop\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtDelete extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtDelete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';
}