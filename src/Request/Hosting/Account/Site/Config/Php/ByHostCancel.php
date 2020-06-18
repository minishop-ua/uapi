<?php

namespace Minishop\UApi\Request\Hosting\Account\Site\Config\Php;

use Minishop\UApi\Request\Hosting\Account\Site\Config\Host;
use Minishop\UApi\Response;

/**
 * Class ByHostCancel
 * Minishop\UApi\Request\Hosting\Account\Site\Config\Php
 */
class ByHostCancel extends Host
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\Config\Php\ByHostCancel::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site_config_php';
}