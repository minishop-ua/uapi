<?php

namespace Minishop\UApi\Request\Hosting\Ftp;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class StackDelete
 * Minishop\UApi\Request\Hosting\Ftp
 */
class StackDelete extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\StackDelete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

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