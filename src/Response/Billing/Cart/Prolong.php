<?php

namespace Minishop\UApi\Response\Billing\Cart;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Prolong
 * Minishop\UApi\Response\Billing\Cart
 */
class Prolong extends Response
{
    /**
     * @var Entity\Billing\Invoice
     * @Type("Minishop\UApi\Entity\Billing\Invoice")
     */
    protected $data;
}