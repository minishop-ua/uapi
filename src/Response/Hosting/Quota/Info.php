<?php

namespace Minishop\UApi\Response\Hosting\Quota;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Hosting\Quota
 */
class Info extends Response
{
    /**
     * @var Entity\Hosting\Quota\Info
     * @Type("Minishop\UApi\Entity\Hosting\Quota\Info")
     */
    protected $data;
}