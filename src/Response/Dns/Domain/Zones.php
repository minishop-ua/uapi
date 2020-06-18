<?php

namespace Minishop\UApi\Response\Dns\Domain;

use Minishop\UApi\Entity\Dns\Domain\Zone;
use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Zones
 * Minishop\UApi\Response\Dns\Domain
 */
class Zones extends Response
{
    /**
     * @var array
     * @type("array<Minishop\UApi\Entity\Dns\Domain\Zone>")
     */
    protected $data;
}