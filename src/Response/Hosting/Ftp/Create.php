<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Entity\Hosting\Ftp\Create as CreateEntity;
use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Hosting\Ftp
 */
class Create extends Response
{
    /**
     * @var CreateEntity
     * @Type("Minishop\UApi\Entity\Hosting\Ftp\Create")
     */
    protected $data;
}