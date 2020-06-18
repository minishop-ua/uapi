<?php

namespace Minishop\UApi\Request\Hosting\Mailbox;

use Minishop\UApi\Request\Hosting\Mailbox;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Hosting\Mailbox
 */
class InfoSingle extends Mailbox
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\InfoSingle::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';

	/**
	 * @var string
	 */
	protected $method = 'info';
}