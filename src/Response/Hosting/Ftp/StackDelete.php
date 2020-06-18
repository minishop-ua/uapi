<?php

namespace Minishop\UApi\Response\Hosting\Ftp;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class StackDelete
 * Minishop\UApi\Response\Hosting\Ftp
 */
class StackDelete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}