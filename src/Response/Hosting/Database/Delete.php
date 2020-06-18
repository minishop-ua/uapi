<?php

namespace Minishop\UApi\Response\Hosting\Database;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * Minishop\UApi\Response\Hosting\Database
 */
class Delete extends Response
{
    /**
     * @var array
     * @Type("array")
     */
    protected $data;
}