<?php

namespace Minishop\UApi\Request\Hosting;

use Minishop\UApi\Request;

/**
 * Class Account
 * Minishop\UApi\Request\Hosting
 */
class Account extends Request
{
	const DEFAULT_DELETE_FILES = 0;
	const DEFAULT_DELETE_MAILBOXES = 0;

	/**
	 * @var string
	 */
	protected $account;

	/**
	 * @return string
	 */
	public function getAccount()
	{
		return $this->account;
	}

	/**
	 * @param string $account
	 * @return $this
	 */
	public function setAccount($account)
	{
		$this->account = (string) $account;
		return $this;
	}
}