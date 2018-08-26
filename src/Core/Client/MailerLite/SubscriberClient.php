<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 21:02
 */

namespace Plp\MailerBundle\Core\Client\MailerLite;

use JMS\Serializer\SerializerBuilder;
use MailerLiteApi\MailerLite;
use Plp\MailerBundle\Core\CO\MailerLite\SubscriberCO;
use Plp\MailerBundle\Core\CO\MailerLite\SubscribeSettingsCO;

class SubscriberClient
{
	function __construct()
	{
		$this->serializer = SerializerBuilder::create()->build();
	}

	public function subscribe(SubscribeSettingsCO $settings, SubscriberCO $subscriber)
	{
		$groupsApi = (new MailerLite($settings->getApiKey()))->groups();
		return $groupsApi->addSubscriber($settings->getGroupId(), $this->serializer->toArray($subscriber));
	}
}