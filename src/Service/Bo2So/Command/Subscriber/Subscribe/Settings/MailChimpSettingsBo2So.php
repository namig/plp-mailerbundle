<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 18:31
 */

namespace Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe\Settings;


use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\Settings\MailChimpSettingsBO;
use Plp\MailerBundle\Service\Bo2So\ABo2SoConverter;
use Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings\MailChimpSettingsSO;

class MailChimpSettingsBo2So extends ABo2SoConverter
{
	/**
	 * @param $so MailChimpSettingsSO
	 * @return MailChimpSettingsBO
	 */
	protected function convert2SrcNotNull($so)
	{
		$bo = new MailChimpSettingsBO();
		$bo->setApiKey($so->getApiKey());
		$bo->setListId($so->getListId());

		return $bo;
	}

}