<?php

namespace Minishop\UApi\Request\Hosting\Mailbox;

use Minishop\UApi\Request\Hosting\Mailbox;
use Minishop\UApi\Response;

/**
 * Class Delete
 * Minishop\UApi\Request\Hosting\Mailbox
 */
class Delete extends Mailbox
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';
}