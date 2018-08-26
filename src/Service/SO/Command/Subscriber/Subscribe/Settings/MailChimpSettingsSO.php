<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:20
 */

namespace Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings;


use JMS\Serializer\Annotation as Serializer;
use Plp\MailerBundle\Common\Enums\IntegrationTypeEnum;

class MailChimpSettingsSO extends ASubscribeSettingsSO
{
	/**
	 * @var string
	 * @Serializer\Type("string")
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

	public function getIntegrationType(): string
	{
		return IntegrationTypeEnum::MAIL_CHIMP;
	}
}