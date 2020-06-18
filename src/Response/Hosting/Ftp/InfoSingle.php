<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoSingle
 * Minishop\UApi\Response\Hosting\Ftp
 */
class InfoSingle extends Response
{
    /**
     * @var Entity\Hosting\Ftp\Info
     * @Type("Minishop\UApi\Entity\Hosting\Ftp\Info")
     */
    protected $data;
}