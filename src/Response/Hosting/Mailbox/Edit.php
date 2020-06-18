<?php
namespace Minishop\UApi\Response\Hosting\Mailbox;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * Minishop\UApi\Response\Hosting\Mailbox
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}