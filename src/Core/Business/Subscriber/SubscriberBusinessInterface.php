<?php

namespace Plp\MailerBundle\Core\Business\Subscriber;


use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\SubscribeCommandBO;

interface SubscriberBusinessInterface
{
	public function subscribe(SubscribeCommandBO $command);

	// public function unsubscribe(UnsubscribeCommand $command);
}