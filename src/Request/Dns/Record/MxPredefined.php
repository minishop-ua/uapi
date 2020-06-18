<?php

namespace Minishop\UApi\Request\Dns\Record;

use Minishop\UApi\Request\Dns\Domain;
use Minishop\UApi\Response;

use JMS\Serializer\Annotation\SerializedName;

/**
 * Class MxPredefined
 * Minishop\UApi\Request\Dns\Record
 */
class MxPredefined extends Domain
{
	const DEFINED_SET_DEFAULT = 'ukraine';
	const DEFINED_SET_GOOGLE = 'google';
	const DEFINED_SET_YANDEX = 'yandex';
	const DEFINED_SET_MAIL_RU = 'mailru';

    /**
     * @var string
     */
    protected $responseClass = Response\Dns\Record\MxPredefined::class;

    /**
     * @var string
     */
    protected $class = 'dns_record';

    /**
     * @var string
	 * @SerializedName("set")
     */
    protected $defined;

	/**
	 * @return string
	 */
	public function getDefined()
	{
		return $this->defined;
	}

	/**
	 * @param string $defined
	 * @return $this
	 */
	public function setDefined($defined)
	{
		$this->defined = (string) $defined;
		return $this;
	}
}