<?php

namespace Minishop\UApi\Response\Hosting\Database\User;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Privileges
 * Minishop\UApi\Response\Hosting\Database\User
 */
class Privileges extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}