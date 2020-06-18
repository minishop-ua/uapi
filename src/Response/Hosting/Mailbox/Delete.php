<?php

namespace Minishop\UApi\Response\Hosting\Mailbox;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * Minishop\UApi\Response\Hosting\Mailbox
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}