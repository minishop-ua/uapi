<?php

namespace Minishop\UApi\Response\Hosting\Log;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class View
 * Minishop\UApi\Response\Hosting\Log
 */
class View extends Response
{
    /**
     * @var Entity\Hosting\Log\View
     * @Type("Minishop\UApi\Entity\Hosting\Log\View")
     */
    protected $data;
}