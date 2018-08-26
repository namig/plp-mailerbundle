<?php

namespace Plp\MailerBundle\Core\Business\Subscriber;


use MailerLiteApi\Exceptions\MailerLiteSdkException;
use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\Settings\MailerLiteSettingsBO;
use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\SubscribeCommandBO;
use Plp\MailerBundle\Core\Client\MailerLite\SubscriberClient;
use Plp\MailerBundle\Core\CO\MailerLite\SubscriberCO;
use Plp\MailerBundle\Core\CO\MailerLite\SubscribeSettingsCO;

class MailerLiteSubscriberBusiness implements SubscriberBusinessInterface
{
	/**
	 * @var SubscriberClient
	 */
	private $client;

	function __construct(SubscriberClient $client)
	{
		$this->client = $client;
	}

	public function subscribe(SubscribeCommandBO $command)
	{
		$lead = $command->getLead();
		/** @var MailerLiteSettingsBO $commandSettings */
		$commandSettings = $command->getSettings();

		$subscriber = new SubscriberCO();
		$subscriber->setName($lead->getName());
		$subscriber->setEmail($lead->getEmail());

		$settings = new SubscribeSettingsCO();
		$settings->setApiKey($commandSettings->getApiKey());
		$settings->setGroupId($commandSettings->getGroupId());

		// TODO: Тестовый вывод
		echo sprintf("---------------Command with lead name: %s \n", $lead->getName());
		try {
			$result = $this->client->subscribe($settings, $subscriber);
			echo "RESULT: ".PHP_EOL;
			print_r($result);
		} catch (MailerLiteSdkException $exception) {
			echo "EXCEPTION MESSAGE: ";
			$exception->getMessage();
		}
	}
}