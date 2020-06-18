<?php
namespace Minishop\UApi\Response\Billing\Invoice;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Billing\Invoice
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<Minishop\UApi\Entity\Billing\Invoice>")
     */
    protected $data;
}