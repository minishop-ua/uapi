<?php

namespace Minishop\UApi\Request\Billing\Invoice;

use Minishop\UApi\Request\Billing\Invoice;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Billing\Invoice
 */
class Info extends Invoice
{
    /**
     * @var string
     */
    protected $responseClass = Response\Billing\Invoice\Info::class;

    /**
     * @var string
     */
    protected $class = 'billing_invoice';
}