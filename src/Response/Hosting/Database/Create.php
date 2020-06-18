<?php

namespace Minishop\UApi\Response\Hosting\Database;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Database\Create as EntityCreate;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Hosting\Database
 */
class Create extends Response
{
    /**
     * @var EntityCreate
     * @Type("Minishop\UApi\Entity\Hosting\Database\Create")
     */
    protected $data;
}