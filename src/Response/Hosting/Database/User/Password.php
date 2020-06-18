<?php

namespace Minishop\UApi\Response\Hosting\Database\User;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Password
 * Minishop\UApi\Response\Hosting\Database\User
 */
class Password extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}