<?php

namespace Minishop\UApi\Request\Hosting\Mailbox;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Hosting\Mailbox
 */
class InfoList extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Mailbox\InfoList::class;

    /**
     * @var string
     */
    protected $class = 'hosting_mailbox';

	/**
	 * @var string
	 */
	protected $method = 'info';

    /**
     * @var string
     */
    protected $domain;

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = (string) $domain;
        return $this;
    }
}