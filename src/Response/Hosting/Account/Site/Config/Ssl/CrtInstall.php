<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtInstall
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtInstall extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}