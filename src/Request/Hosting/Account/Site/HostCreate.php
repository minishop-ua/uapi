<?php

namespace Minishop\UApi\Request\Hosting\Account\Site;

use Minishop\UApi\Request\Hosting\Account\Site;
use Minishop\UApi\Response;

/**
 * Class HostCreate
 * Minishop\UApi\Request\Hosting\Account\Site
 */
class HostCreate extends Site
{
    /**
     * @var string
     */
    protected $responseClass = Response\Hosting\Account\Site\HostCreate::class;

    /**
     * @var string
     */
    protected $class = 'hosting_site';

    /**
     * @var string
     */
    protected $subdomain;

    /**
     * @return string
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * @param string $subdomain
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = (string) $subdomain;
        return $this;
    }
}