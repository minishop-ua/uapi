<?php

namespace Minishop\UApi\Request\Hosting\Account\Site\Config;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class Host
 * Minishop\UApi\Request\Hosting\Account\Site\Config
 */
class Host extends Account
{
	const CHARSET_UTF_8 = 'UTF-8';
	const CHARSET_CP_1251 = 'CP1251';
	const CHARSET_KOI8_R = 'KOI8-R';
	const CHARSET_ISO_8859_5 = 'ISO-8859-5';

	/**
	 * @var string
	 */
	protected $host;

	/**
	 * @return string
	 */
	public function getHost()
	{
		return $this->host;
	}

	/**
	 * @param string $host
	 * @return $this
	 */
	public function setHost($host)
	{
		$this->host = (string) $host;
		return $this;
	}
}