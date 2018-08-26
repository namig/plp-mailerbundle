<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 18:34
 */

namespace Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe\Settings;


use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\Settings\MailerLiteSettingsBO;
use Plp\MailerBundle\Service\Bo2So\ABo2SoConverter;
use Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings\MailerLiteSettingsSO;

class MailerLiteSettingsBo2So extends ABo2SoConverter
{
	/**
	 * @param $so MailerLiteSettingsSO
	 * @return MailerLiteSettingsBO
	 */
	protected function convert2SrcNotNull($so)
	{
		$bo = new MailerLiteSettingsBO();
		$bo->setApiKey($so->getApiKey());
		$bo->setGroupId($so->getGroupId());

		return $bo;
	}
}