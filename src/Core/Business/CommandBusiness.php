<?php

namespace Plp\MailerBundle\Core\Business;


use Doctrine\Common\Collections\ArrayCollection;
use Plp\MailerBundle\Core\BO\Command\ACommandBO;

class CommandBusiness
{
	public function executeCommand(ACommandBO $command)
	{
		$command->execute();
	}

	/**
	 * @param $commands ArrayCollection|ACommandBO[]
	 */
	public function executeCommands($commands)
	{
		foreach ($commands as $command) {
			$command->execute();
		}
	}
}