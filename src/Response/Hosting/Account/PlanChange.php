<?php

namespace Minishop\UApi\Response\Hosting\Account;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class PlanChange
 * Minishop\UApi\Response\Hosting\Account
 */
class PlanChange extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}