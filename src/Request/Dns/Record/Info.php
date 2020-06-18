<?php

namespace Minishop\UApi\Request\Dns\Record;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Dns\Record
 */
class Info extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Info::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';
}