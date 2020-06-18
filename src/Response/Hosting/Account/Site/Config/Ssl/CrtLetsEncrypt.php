<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtLetsEncrypt
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtLetsEncrypt extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}