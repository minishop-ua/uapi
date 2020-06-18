<?php

namespace Minishop\UApi\Response\Hosting\Account\Site;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Create
 * Minishop\UApi\Response\Hosting\Account\Site
 */
class Create extends Response
{
    /**
     * @var Create
     * @Type("Minishop\UApi\Entity\Hosting\Account\Site\Create")
     */
    protected $data;
}