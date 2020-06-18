<?php

namespace Minishop\UApi\Response\Hosting\Database;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Database\Info as EntityInfo;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Hosting\Database
 */
class InfoSingle extends Response
{
    /**
     * @var EntityInfo
     * @Type("Minishop\UApi\Entity\Hosting\Database\Info")
     */
    protected $data;
}