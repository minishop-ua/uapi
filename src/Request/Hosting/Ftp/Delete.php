<?php

namespace Minishop\UApi\Request\Hosting\Ftp;

use Minishop\UApi\Request\Hosting\Account;
use Minishop\UApi\Response;

/**
 * Class Delete
 * Minishop\UApi\Request\Hosting\Ftp
 */
class Delete extends Account
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Ftp\Delete::class;

    /**
     * @var string
     */
    protected $class = 'hosting_ftp';

    /**
     * @var string
     */
    protected $ftp;

    /**
     * @return string
     */
    public function getFtp()
    {
        return $this->ftp;
    }

    /**
     * @param string $ftp
     * @return $this
     */
    public function setFtp($ftp)
    {
        $this->ftp = (string) $ftp;
        return $this;
    }
}