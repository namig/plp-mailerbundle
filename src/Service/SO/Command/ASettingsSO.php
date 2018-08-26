<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:24
 */

namespace Plp\MailerBundle\Service\SO\Command;


use JMS\Serializer\Annotation as Serializer;

abstract class ASettingsSO
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	private $apiKey;

	/**
	 * @return string
	 */
	public function getApiKey(): ?string
	{
		return $this->apiKey;
	}

	/**
	 * @param string $apiKey
	 */
	public function setApiKey(?string $apiKey)
	{
		$this->apiKey = $apiKey;
	}
}