<?php
namespace Minishop\UApi\Response\Dns\Domain;

use Minishop\UApi\Response;
use JMS\Serializer\Annotation\Type;

/**
 * Class Delete
 * Minishop\UApi\Response\Dns\Domain
 */
class Delete extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}