<?php

namespace Minishop\UApi\Response\Hosting\Database;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Database\Info as EntityInfo;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoList
 * Minishop\UApi\Response\Hosting\Database
 */
class InfoList extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Hosting\Database\Info>")
     */
    protected $data;
}