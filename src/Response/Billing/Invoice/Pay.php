<?php

namespace Minishop\UApi\Response\Billing\Invoice;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Pay
 * Minishop\UApi\Response\Billing\Invoice
 */
class Pay extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}