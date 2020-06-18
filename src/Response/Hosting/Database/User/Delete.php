<?php

namespace Minishop\UApi\Response\Hosting\Database\User;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * Minishop\UApi\Response\Hosting\Database\User
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}