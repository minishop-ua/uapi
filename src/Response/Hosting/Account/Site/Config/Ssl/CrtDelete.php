<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class CrtDelete
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class CrtDelete extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}