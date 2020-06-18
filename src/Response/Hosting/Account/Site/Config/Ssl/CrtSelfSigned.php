<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtSelfSigned
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtSelfSigned extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}