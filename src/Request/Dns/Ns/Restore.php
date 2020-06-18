<?php

namespace Minishop\UApi\Request\Dns\Ns;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Restore
 * Minishop\UApi\Request\Dns\Ns
 */
class Restore extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Ns\Restore::class;

    /**
     * @var string
     */
    protected $class = 'dns_ns';
}