<?php

namespace Minishop\UApi\Response\Dns\Domain;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Dns\Domain
 */
class Create extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}