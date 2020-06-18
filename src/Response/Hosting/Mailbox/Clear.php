<?php

namespace Minishop\UApi\Response\Hosting\Mailbox;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Clear
 * Minishop\UApi\Response\Hosting\Mailbox
 */
class Clear extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}