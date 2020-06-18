<?php

namespace Minishop\UApi\Response\Hosting\Account;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class MigrationCancel
 * Minishop\UApi\Response\Hosting\Account
 */
class MigrationCancel extends Response
{
    /**
     * @var bool
     * @Type("boolean")
     */
	protected $data;
}