<?php

namespace Minishop\UApi\Request\Dns\Domain;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Delete
 * Minishop\UApi\Request\Dns\Domain
 */
class Delete extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Domain\Delete::class;

    /**
     * @var string
     */
    protected $class = 'dns_domain';
}