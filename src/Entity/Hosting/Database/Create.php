<?php

namespace Minishop\UApi\Entity\Hosting\Database;

use Minishop\UApi\Entity\Hosting\Database\User;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;

/**
 * Class Create
 * Minishop\UApi\Entity\Hosting\Database
 */
class Create
{
	/**
	 * @var int
	 * @Type("int")
	 */
	protected $dbId;

	/**
	 * @var User
	 * @Type("Minishop\UApi\Entity\Hosting\Database\User")
	 * @Accessor(getter="getUser",setter="setUser")
	 */
	protected $user;

	/**
	 * @return int
	 */
	public function getDbId()
	{
		return $this->dbId;
	}

	/**
	 * @param int $dbId
	 * @return $this
	 */
	public function setDbId($dbId)
	{
		$this->dbId = $dbId;
		return $this;
	}

	/**
	 * @return User
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 * @return $this
	 */
	public function setUser($user = null)
	{
		$this->user = $user;
		return $this;
	}
}