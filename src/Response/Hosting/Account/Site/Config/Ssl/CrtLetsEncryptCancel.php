<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtLetsEncryptCancel
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtLetsEncryptCancel extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}