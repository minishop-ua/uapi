<?php

namespace Minishop\UApi\Request\Hosting;

/**
 * Class Mailbox
 * Minishop\UApi\Request\Hosting
 */
class Mailbox extends Account
{
	/**
	 * @var string
	 */
	protected $mailbox;

	/**
	 * @return string
	 */
	public function getMailbox()
	{
		return $this->mailbox;
	}

	/**
	 * @param string $mailbox
	 * @return $this
	 */
	public function setMailbox($mailbox)
	{
		$this->mailbox = $mailbox;
		return $this;
	}
}