<?php

namespace Plp\MailerBundle\Core\Business\Subscriber;

use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\Settings\MailChimpSettingsBO;
use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\SubscribeCommandBO;
use Plp\MailerBundle\Core\Client\MailChimp\SubscriberClient;
use Plp\MailerBundle\Core\CO\MailChimp\MemberCO;
use Plp\MailerBundle\Core\CO\MailChimp\MemberMergeFieldsCO;
use Plp\MailerBundle\Core\CO\MailChimp\SubscribeSettingsCO;

class MailChimpSubscriberBusiness implements SubscriberBusinessInterface
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
		/** @var MailChimpSettingsBO $commandSettings */
		$commandSettings = $command->getSettings();
		$lead = $command->getLead();

		$settings = new SubscribeSettingsCO();
		$settings->setApiKey($commandSettings->getApiKey());
		$settings->setListId($commandSettings->getListId());

		$member = new MemberCO();
		$member->setEmail($lead->getEmail());
		$mergeFields = new MemberMergeFieldsCO();
		$mergeFields->setFirstName($lead->getName());
		$member->setMergeFields($mergeFields);
		$member->setStatus(MemberCO::STATUS_SUBSCRIBED);

		// TODO: Тестовый вывод
		echo sprintf("---------------Command with lead name: %s \n", $lead->getName());
		try {
			$result = $this->client->subscribe($settings, $member);
			echo "RESULT: " . PHP_EOL;
			print_r($result);
		} catch (\Exception $exception) {
			echo "EXCEPTION MESSAGE: ";
			$exception->getMessage();
		}
	}
}