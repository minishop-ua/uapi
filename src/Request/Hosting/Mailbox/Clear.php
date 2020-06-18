<?php

namespace Minishop\UApi\Request\Hosting\Mailbox;

use Minishop\UApi\Request\Hosting\Mailbox;
use Minishop\UApi\Response;

/**
 * Class Clear
 * Minishop\UApi\Request\Hosting\Mailbox
 */
class Clear extends Mailbox
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\Clear::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';
}