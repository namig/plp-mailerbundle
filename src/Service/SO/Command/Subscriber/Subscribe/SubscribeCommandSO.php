<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:14
 */

namespace Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe;



use JMS\Serializer\Annotation as Serializer;
use Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings\ASubscribeSettingsSO;

class SubscribeCommandSO
{
	/**
	 * @var ASubscribeSettingsSO
	 * @Serializer\Type("Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings\ASubscribeSettingsSO")
	 * @Serializer\SerializedName("integration")
	 */
	private $settings;

	/**
	 * @var LeadSO
	 * @Serializer\Type("Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\LeadSO")
	 */
	private $lead;

	/**
	 * @return ASubscribeSettingsSO
	 */
	public function getSettings(): ?ASubscribeSettingsSO
	{
		return $this->settings;
	}

	/**
	 * @param ASubscribeSettingsSO $settings
	 */
	public function setSettings(?ASubscribeSettingsSO $settings)
	{
		$this->settings = $settings;
	}

	/**
	 * @return LeadSO
	 */
	public function getLead(): ?LeadSO
	{
		return $this->lead;
	}

	/**
	 * @param LeadSO $lead
	 */
	public function setLead(?LeadSO $lead)
	{
		$this->lead = $lead;
	}
}