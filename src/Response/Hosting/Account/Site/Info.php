<?php

namespace Minishop\UApi\Response\Hosting\Account\Site;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Hosting\Account\Site
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<string, Minishop\UApi\Entity\Hosting\Account\Site\Info>")
     */
    protected $data;
}