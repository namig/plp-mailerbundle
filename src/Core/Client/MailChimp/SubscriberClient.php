<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 19:56
 */

namespace Plp\MailerBundle\Core\Client\MailChimp;


use DrewM\MailChimp\MailChimp;
use JMS\Serializer\SerializerBuilder;
use Plp\MailerBundle\Core\CO\MailChimp\MemberCO;
use Plp\MailerBundle\Core\CO\MailChimp\SubscribeSettingsCO;

class SubscriberClient
{
	function __construct()
	{
		$this->serializer = SerializerBuilder::create()->build();
	}

	public function subscribe(SubscribeSettingsCO $settings, MemberCO $member)
	{
		$mailChimp = new MailChimp($settings->getApiKey());
		$listId = $settings->getListId();
		$data = $this->serializer->toArray($member);
		return $mailChimp->post("lists/{$listId}/members", $data);
	}

}