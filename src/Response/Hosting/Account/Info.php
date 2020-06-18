<?php

namespace Minishop\UApi\Response\Hosting\Account;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Hosting\Account
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Hosting\Account\Info>")
     */
    protected $data;
}