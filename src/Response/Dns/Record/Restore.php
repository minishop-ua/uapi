<?php

namespace Minishop\UApi\Response\Dns\Record;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Restore
 * Minishop\UApi\Response\Dns\Record
 */
class Restore extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}