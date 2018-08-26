<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 18:21
 */

namespace Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\Settings;


use Plp\MailerBundle\Core\BO\Command\ASettingsBO;

class MailChimpSettingsBO extends ASettingsBO
{
	/**
	 * @var string
	 */
	private $listId;

	/**
	 * @return string
	 */
	public function getListId(): ?string
	{
		return $this->listId;
	}

	/**
	 * @param string $listId
	 */
	public function setListId(?string $listId)
	{
		$this->listId = $listId;
	}
}