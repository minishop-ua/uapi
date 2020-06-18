<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ws;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}