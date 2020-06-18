<?php

namespace Minishop\UApi\Response\Hosting\Mailbox;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Hosting\Mailbox
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}