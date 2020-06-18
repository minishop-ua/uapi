<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class AccessInfo
 * Minishop\UApi\Response\Hosting\Ftp
 */
class AccessInfo extends Response
{
    /**
     * @var Entity\Hosting\Ftp\AccessInfo
     * @Type("Minishop\UApi\Entity\Hosting\Ftp\AccessInfo")
     */
    protected $data;
}