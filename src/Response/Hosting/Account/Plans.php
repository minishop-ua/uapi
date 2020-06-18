<?php

namespace Minishop\UApi\Response\Hosting\Account;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Plans
 * Minishop\UApi\Response\Hosting\Account
 */
class Plans extends Response
{
    /**
     * @var array
     * @Type("array<string, Minishop\UApi\Entity\Hosting\Account\Plan>")
     */
    protected $data;
}