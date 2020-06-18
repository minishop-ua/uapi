<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoList
 * Minishop\UApi\Response\Hosting\Ftp
 */
class InfoList extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Hosting\Ftp\Info>")
     */
    protected $data;
}