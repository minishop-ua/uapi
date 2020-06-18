<?php

namespace Minishop\UApi\Response\Dns\Ns;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * Minishop\UApi\Response\Dns\Ns
 */
class Restore extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}