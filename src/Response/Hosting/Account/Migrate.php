<?php

namespace Minishop\UApi\Response\Hosting\Account;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Migrate
 * Minishop\UApi\Response\Hosting\Account
 */
class Migrate extends Response
{
    /**
     * @var bool
     * @Type("boolean")
     */
    protected $data;
}