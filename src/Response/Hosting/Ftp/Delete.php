<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * Minishop\UApi\Response\Hosting\Ftp
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}