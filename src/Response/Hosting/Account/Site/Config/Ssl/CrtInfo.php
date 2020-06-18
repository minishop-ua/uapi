<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Account\Site\Config;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtInfo
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtInfo extends Response
{
    /**
     * @var Config\Ssl\CrtInfo
     * @Type("Minishop\UApi\Entity\Hosting\Account\Site\Config\Ssl\CrtInfo")
     */
    protected $data;
}