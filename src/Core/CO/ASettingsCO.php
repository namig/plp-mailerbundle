<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 20:03
 */

namespace Plp\MailerBundle\Core\CO;


class ASettingsCO
{
	/**
	 * @var string
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