<?php

namespace Plp\MailerBundle\Bundle;

use Plp\MailerBundle\Bundle\DependencyInjection\PlpMailerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlpMailerBundle extends Bundle
{
	public function getContainerExtension()
	{
		if (null == $this->extension)
		{
			$this->extension = new PlpMailerExtension();
		}

		return $this->extension;
	}
}