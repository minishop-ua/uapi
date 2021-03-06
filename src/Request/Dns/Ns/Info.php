<?php

namespace Minishop\UApi\Request\Dns\Ns;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Dns\Ns
 */
class Info extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Ns\Info::class;

    /**
     * @var string
     */
    protected $class = 'dns_ns';
}