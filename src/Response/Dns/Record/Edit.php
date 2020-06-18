<?php

namespace Minishop\UApi\Response\Dns\Record;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * Minishop\UApi\Response\Dns\Record
 */
class Edit extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Report>")
     */
    protected $data;
}