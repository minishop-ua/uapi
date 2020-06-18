<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ws;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class CacheClear
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ws
 */
class CacheClear extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}