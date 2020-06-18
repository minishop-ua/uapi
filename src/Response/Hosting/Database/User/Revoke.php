<?php

namespace Minishop\UApi\Response\Hosting\Database\User;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Revoke
 * Minishop\UApi\Response\Hosting\Database\User
 */
class Revoke extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}