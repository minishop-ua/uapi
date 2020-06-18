<?php

namespace Minishop\UApi\Response\Hosting\Account\Site;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class HostDelete
 * Minishop\UApi\Response\Hosting\Account\Site
 */
class HostDelete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}