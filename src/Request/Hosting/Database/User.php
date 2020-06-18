<?php

namespace Minishop\UApi\Request\Hosting\Database;

use Minishop\UApi\Request\Hosting\Database;

/**
 * Class User
 * Minishop\UApi\Request\Hosting\Database
 */
class User extends Database
{
	/**
	 * @var string
	 */
	protected $user;

	/**
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param string $user
	 * @return $this
	 */
	public function setUser($user)
	{
		$this->user = (string) $user;
		return $this;
	}
}