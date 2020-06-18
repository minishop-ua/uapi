<?php

namespace Minishop\UApi\Response\Dns\Domain;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Dns\Domain
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array<string, Minishop\UApi\Entity\Dns\Domain\Info>")
     */
    protected $data;
}