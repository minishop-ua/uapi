<?php

namespace Minishop\UApi\Response\Hosting\Mailbox;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Mailbox\Info;

use JMS\Serializer\Annotation\Type;

/**
 * Class InfoSingle
 * Minishop\UApi\Response\Hosting\Mailbox
 */
class InfoSingle extends Response
{
    /**
     * @var Info
     * @Type("Minishop\UApi\Entity\Hosting\Mailbox\Info")
     */
    protected $data;
}