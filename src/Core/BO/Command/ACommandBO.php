<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:30
 */

namespace Plp\MailerBundle\Core\BO\Command;

use Plp\MailerBundle\Core\Business\ABusiness;

abstract class ACommandBO
{
	/**
	 * @var ASettingsBO
	 */
	protected $settings;

	abstract public function execute();

	/**
	 * @return ASettingsBO
	 */
	public function getSettings(): ?ASettingsBO
	{
		return $this->settings;
	}

	/**
	 * @param ASettingsBO $settings
	 */
	public function setSettings(?ASettingsBO $settings)
	{
		$this->settings = $settings;
	}

}