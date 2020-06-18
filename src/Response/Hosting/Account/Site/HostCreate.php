<?php

namespace Minishop\UApi\Response\Hosting\Account\Site;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Account\Site\Host;

use JMS\Serializer\Annotation\Type;

/**
 * Class HostCreate
 * Minishop\UApi\Response\Hosting\Account\Site
 */
class HostCreate extends Response
{
    /**
     * @var Host
     * @Type("Minishop\UApi\Entity\Hosting\Account\Site\Host")
     */
    protected $data;
}