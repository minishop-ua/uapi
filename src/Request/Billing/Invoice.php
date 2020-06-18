<?php

namespace Minishop\UApi\Request\Billing;

use Minishop\UApi\Request;
use Minishop\UApi\Response;

/**
 * Class Info
 * Minishop\UApi\Request\Billing\Invoice
 */
class Invoice extends Request
{
	/**
	 * @var string
	 */
	protected $invoice;

	/**
	 * @return string
	 */
	public function getInvoice()
	{
		return $this->invoice;
	}

	/**
	 * @param string $invoice
	 * @return $this
	 */
	public function setInvoice($invoice)
	{
		$this->invoice = (string) $invoice;
		return $this;
	}
}