<?php

namespace Minishop\UApi\Response\Dns\Ns;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Dns\Ns
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array")
     */
    protected $data;
}