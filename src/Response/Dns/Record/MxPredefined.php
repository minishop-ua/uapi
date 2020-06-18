<?php

namespace Minishop\UApi\Response\Dns\Record;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class MxPredefined
 * Minishop\UApi\Response\Dns\Record
 */
class MxPredefined extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}