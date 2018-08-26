<?php

namespace Plp\MailerBundle\Core\Business\Creator;


use Plp\MailerBundle\Common\Enums\IntegrationTypeEnum;
use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\SubscribeCommandBO;
use Plp\MailerBundle\Core\Business\Subscriber\MailChimpSubscriberBusiness;
use Plp\MailerBundle\Core\Business\Subscriber\MailerLiteSubscriberBusiness;

class SubscriberCommandCreatorBusiness
{
	/**
	 * @var MailChimpSubscriberBusiness
	 */
	private $mailChimpSubscriberBusiness;
	/**
	 * @var MailerLiteSubscriberBusiness
	 */
	private $mailerLiteSubscriberBusiness;

	function __construct(MailChimpSubscriberBusiness $mailChimpSubscriberBusiness,
	                     MailerLiteSubscriberBusiness $mailerLiteSubscriberBusiness)
	{
		$this->mailChimpSubscriberBusiness = $mailChimpSubscriberBusiness;
		$this->mailerLiteSubscriberBusiness = $mailerLiteSubscriberBusiness;
	}

	/**
	 * @param string $integrationType
	 * @return null|SubscribeCommandBO
	 */
	public function createSubscribeCommand(string $integrationType)
	{
		switch ($integrationType) {
			case IntegrationTypeEnum::MAIL_CHIMP:
				return new SubscribeCommandBO($this->mailChimpSubscriberBusiness);
			case IntegrationTypeEnum::MAILER_LITE:
				return new SubscribeCommandBO($this->mailerLiteSubscriberBusiness);
		}
		return null;
	}
}