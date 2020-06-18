<?php

namespace Minishop\UApi\Response\Hosting\Account\Site;

use Minishop\UApi\Response;
use Minishop\UApi\Entity\Hosting\Account\Site;

use JMS\Serializer\Annotation\Type;

/**
 * Class HostStackDelete
 * Minishop\UApi\Response\Hosting\Account\Site
 */
class HostStackDelete extends Response
{
    /**
     * @var Site\HostStackDelete
     * @Type("array<string, Minishop\UApi\Entity\Report>")
     */
    protected $data;
}