<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class AccessEdit
 * Minishop\UApi\Response\Hosting\Ftp
 */
class AccessEdit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}