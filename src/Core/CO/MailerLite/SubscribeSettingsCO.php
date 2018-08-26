<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 21:04
 */

namespace Plp\MailerBundle\Core\CO\MailerLite;


use Plp\MailerBundle\Core\CO\ASettingsCO;

class SubscribeSettingsCO extends ASettingsCO
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