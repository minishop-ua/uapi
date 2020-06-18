<?php

namespace Minishop\UApi\Request\Hosting\Mailbox;

use Minishop\UApi\Response;

/**
 * Class Edit
 * Minishop\UApi\Request\Hosting\Mailbox
 */
class Edit extends Create
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Edit::class;
}