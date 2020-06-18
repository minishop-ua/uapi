<?php

namespace Minishop\UApi\Request\Hosting\Log;

use Minishop\UApi\Response;

/**
 * Class Dates
 * Minishop\UApi\Request\Hosting\Log
 */
class Dates extends Log
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Log\Dates::class;

    /**
     * @var string
     */
    protected $class = 'hosting_log';
}