<?php

namespace Minishop\UApi\Response\Hosting\Quota;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Quota\Ftp;

use JMS\Serializer\Annotation\Type;

/**
 * Class UsedFtp
 * Minishop\UApi\Response\Hosting\Quota
 */
class UsedFtp extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Hosting\Quota\Ftp>")
     */
    protected $data;
}