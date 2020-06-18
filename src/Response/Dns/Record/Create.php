<?php

namespace Minishop\UApi\Response\Dns\Record;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Dns\Record
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}