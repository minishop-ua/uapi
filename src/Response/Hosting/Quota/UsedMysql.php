<?php

namespace Minishop\UApi\Response\Hosting\Quota;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class UsedMysql
 * Minishop\UApi\Response\Hosting\Quota
 */
class UsedMysql extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Hosting\Quota\Mysql>")
     */
    protected $data;
}