<?php

namespace Minishop\UApi\Response\Hosting\Account\Site\Config\Php;

use Minishop\UApi\Response;

use JMS\Serializer\Annotation\Type;

/**
 * Class ByHost
 * Minishop\UApi\Response\Hosting\Account\Site\Config\Php
 */
class ByHost extends Response
{
    /**
     * @var int
     * @Type("int")
     */
    protected $data;
}