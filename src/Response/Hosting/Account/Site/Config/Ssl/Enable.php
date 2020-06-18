<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Enable
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Ssl
 */
class Enable extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}