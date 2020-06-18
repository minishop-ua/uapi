<?php

namespace Minishop\UApi\Response\Hosting\Mailbox;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoList
 * Minishop\UApi\Response\Hosting\Mailbox
 */
class InfoList extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Hosting\Mailbox\Info>")
     */
    protected $data;
}