<?php

namespace Minishop\UApi\Request\Billing\Invoice;

use Minishop\UApi\Request\Billing\Invoice;
use Minishop\UApi\Response;

/**
 * Class Pay
 * Minishop\UApi\Request\Billing\Invoice
 */
class Pay extends Invoice
{
    /**
     * @var string
     */
    protected $responseClass = Response\Billing\Invoice\Pay::class;

    /**
     * @var string
     */
    protected $class = 'billing_invoice';
}