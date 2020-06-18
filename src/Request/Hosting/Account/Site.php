<?php

namespace Minishop\UApi\Request\Hosting\Account;

use Minishop\UApi\Request\Hosting\Account;

/**
 * Class Site
 * Minishop\UApi\Request\Hosting\Account
 */
class Site extends Account
{
	/**
	 * @var string
	 */
	protected $site;

	/**
	 * @return string
	 */
	public function getSite()
	{
		return $this->site;
	}

	/**
	 * @param string $site
	 * @return $this
	 */
	public function setSite($site)
	{
		$this->site = (string) $site;
		return $this;
	}
}