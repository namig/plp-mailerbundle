<?php

namespace Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\Settings;


use Plp\MailerBundle\Core\BO\Command\ASettingsBO;

class MailerLiteSettingsBO extends ASettingsBO
{
	/**
	 * @var string
	 */
	private $groupId;

	/**
	 * @return string
	 */
	public function getGroupId(): ?string
	{
		return $this->groupId;
	}

	/**
	 * @param string $groupId
	 */
	public function setGroupId(?string $groupId)
	{
		$this->groupId = $groupId;
	}
}