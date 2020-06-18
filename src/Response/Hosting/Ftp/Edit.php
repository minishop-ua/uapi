<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * Minishop\UApi\Response\Hosting\Ftp
 */
class Edit extends Response
{
    /**
     * @var string
     * @Type("string")
     */
    protected $data;
}