<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 20:03
 */

namespace Plp\MailerBundle\Core\CO\MailChimp;


use Plp\MailerBundle\Core\CO\ASettingsCO;

class SubscribeSettingsCO extends ASettingsCO
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