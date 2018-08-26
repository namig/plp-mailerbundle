<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:31
 */

namespace Plp\MailerBundle\Core\BO\Command;


abstract class ASettingsBO
{
	/**
	 * @var string
	 */
	protected $apiKey;

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