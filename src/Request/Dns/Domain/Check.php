<?php

namespace Minishop\UApi\Request\Dns\Domain;

use Minishop\UApi\Request;
use Minishop\UApi\Response;

/**
 * Class Check
 * Minishop\UApi\Request\Dns\Domain
 */
class Check extends Request
{
    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Domain\Check::class;

    /**
     * @var string
     */
    protected $class = 'dns_domain';

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
}