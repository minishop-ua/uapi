<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Disable
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class Disable extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}