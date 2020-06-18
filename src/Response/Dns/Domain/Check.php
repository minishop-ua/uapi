<?php

namespace Minishop\UApi\Response\Dns\Domain;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Check
 * Minishop\UApi\Response\Dns\Domain
 */
class Check extends Response
{
    /**
     * @var array
     * @Type("array<string, Minishop\UApi\Entity\Dns\Domain\Check>")
     */
    protected $data;
}