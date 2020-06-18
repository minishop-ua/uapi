<?php

namespace Minishop\UApi\Response\Dns\Record;

use Minishop\UApi\Response;
use Minishop\UApi\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Class Info
 * Minishop\UApi\Response\Dns\Record
 */
class Info extends Response
{
    /**
     * @var array
     * @Type("array <Minishop\UApi\Entity\Dns\Record\Info>")
     */
    protected $data;
}