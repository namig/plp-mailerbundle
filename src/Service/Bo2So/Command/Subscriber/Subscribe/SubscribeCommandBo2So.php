<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 18:26
 */

namespace Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe;


use Plp\MailerBundle\Common\Enums\IntegrationTypeEnum;
use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\SubscribeCommandBO;
use Plp\MailerBundle\Core\Business\Creator\SubscriberCommandCreatorBusiness;
use Plp\MailerBundle\Service\Bo2So\ABo2SoConverter;
use Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe\Settings\MailChimpSettingsBo2So;
use Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe\Settings\MailerLiteSettingsBo2So;
use Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\SubscribeCommandSO;

class SubscribeCommandBo2So extends ABo2SoConverter
{
	/**
	 * @var SubscriberCommandCreatorBusiness
	 */
	private $creator;
	/**
	 * @var MailChimpSettingsBo2So
	 */
	private $mailChimpSettingsBo2So;
	/**
	 * @var MailerLiteSettingsBo2So
	 */
	private $mailerLiteSettingsBo2So;
	/**
	 * @var LeadBo2So
	 */
	private $leadBo2So;

	function __construct(SubscriberCommandCreatorBusiness $creator,
	                     LeadBo2So $leadBo2So,
	                     MailChimpSettingsBo2So $mailChimpSettingsBo2So,
	                     MailerLiteSettingsBo2So $mailerLiteSettingsBo2So)
	{
		$this->creator = $creator;
		$this->mailChimpSettingsBo2So = $mailChimpSettingsBo2So;
		$this->mailerLiteSettingsBo2So = $mailerLiteSettingsBo2So;
		$this->leadBo2So = $leadBo2So;
	}

	/**
	 * @param $so SubscribeCommandSO
	 * @return SubscribeCommandBO
	 */
	protected function convert2SrcNotNull($so)
	{
		$settings = $so->getSettings();
		$integrationType = $settings->getIntegrationType();
		$command = $this->creator->createSubscribeCommand($integrationType);
		$command->setLead($this->leadBo2So->convert2Src($so->getLead()));
		switch ($integrationType) {
			case IntegrationTypeEnum::MAIL_CHIMP:
				$command->setSettings($this->mailChimpSettingsBo2So->convert2Src($settings));
				break;
			case IntegrationTypeEnum::MAILER_LITE:
				$command->setSettings($this->mailerLiteSettingsBo2So->convert2Src($settings));
				break;
		}

		return $command;
	}
}