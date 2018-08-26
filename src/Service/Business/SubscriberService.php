<?php

namespace Plp\MailerBundle\Service\Business;

use Plp\MailerBundle\Core\Business\CommandBusiness;
use Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe\SubscribeCommandBo2So;

class SubscriberService extends AService
{
	/**
	 * @var SubscribeCommandBo2So
	 */
	private $subscribeCommandBo2So;

	function __construct(CommandBusiness $commandBusiness, SubscribeCommandBo2So $subscribeCommandBo2So)
	{
		parent::__construct($commandBusiness);
		$this->subscribeCommandBo2So = $subscribeCommandBo2So;
	}

	public function subscribeList(array $commandList)
	{
		$commands = $this->serializer->fromArray($commandList, 'array<Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\SubscribeCommandSO>');
		$commandsBo = $this->subscribeCommandBo2So->convert2SrcList($commands);
		$this->commandBusiness->executeCommands($commandsBo);
	}

}