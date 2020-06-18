<?php

namespace Minishop\UApi\Request\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Request\Hosting\Account\Site\Config\Host;
use Minishop\UApi\Response;

/**
 * Class CrtLetsEncryptCancel
 * Minishop\UApi\Request\Hosting\Account\Site\Config\Ssl
 */
class CrtLetsEncryptCancel extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Ssl\CrtLetsEncryptCancel::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_ssl';
}