<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Php;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class Edit
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Php
 */
class Edit extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}