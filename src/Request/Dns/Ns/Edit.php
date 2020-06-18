<?php

namespace Minishop\UApi\Request\Dns\Ns;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

/**
 * Class Edit
 * Minishop\UApi\Request\Dns\Ns
 */
class Edit extends Domain
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Ns\Edit::class;

    /**
     * @var string
     */
    protected $class = 'dns_ns';

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
	 * @param string $ns
	 * @return $this
	 */
    public function addToStack($ns)
	{
		$this->stack[] = $ns;
		return $this;
	}
}