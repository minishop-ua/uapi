<?php

namespace Minishop\UApi\Response\Dns\Ns;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * Minishop\UApi\Response\Dns\Ns
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}