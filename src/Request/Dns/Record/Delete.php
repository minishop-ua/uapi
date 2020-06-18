<?php

namespace Minishop\UApi\Request\Dns\Record;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Delete
 * Minishop\UApi\Request\Dns\Record
 */
class Delete extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\Delete::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';

    /**
     * @var array
     */
    protected $stack;

    /**
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param array $stack
     * @return $this
     */
    public function setStack(array $stack)
    {
        $this->stack = $stack;
        return $this;
    }

	/**
	 * @param int $recordId
	 * @return $this
	 */
    public function addToStack($recordId)
	{
		$this->stack[] = $recordId;
		return $this;
	}
}