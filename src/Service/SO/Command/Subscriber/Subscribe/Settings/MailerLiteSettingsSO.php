<?php

namespace Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings;


use JMS\Serializer\Annotation as Serializer;
use Plp\MailerBundle\Common\Enums\IntegrationTypeEnum;

class MailerLiteSettingsSO extends ASubscribeSettingsSO
{
	/**
	 * @var string
	 * @Serializer\Type("string")
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

	public function getIntegrationType(): string
	{
		return IntegrationTypeEnum::MAILER_LITE;
	}
}