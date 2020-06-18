<?php

namespace Minishop\UApi\Response\Hosting\Database\User;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Hosting\Database\User
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}