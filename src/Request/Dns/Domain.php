<?php

namespace Minishop\UApi\Request\Dns;

use Minishop\UApi\Request;
use Minishop\UApi\Response;

/**
 * Class Create
 * Minishop\UApi\Request\Dns
 */
class Domain extends Request
{
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