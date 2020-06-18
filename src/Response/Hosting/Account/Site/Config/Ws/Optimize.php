<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ws;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Optimize
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class Optimize extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}