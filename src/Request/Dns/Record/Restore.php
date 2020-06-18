<?php

namespace Minishop\UApi\Request\Dns\Record;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Restore
 * Minishop\UApi\Request\Dns\Record
 */
class Restore extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Restore::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';
}