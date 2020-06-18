<?php

namespace Minishop\UApi\Response\Hosting\Log;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Dates
 * Minishop\UApi\Response\Hosting\Log
 */
class Dates extends Response
{
    /**
     * @var array
     * @Type("array")
     */
    protected $data;
}