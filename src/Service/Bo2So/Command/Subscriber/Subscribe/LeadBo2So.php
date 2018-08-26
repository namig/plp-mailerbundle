<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 19:35
 */

namespace Plp\MailerBundle\Service\Bo2So\Command\Subscriber\Subscribe;


use Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe\LeadBO;
use Plp\MailerBundle\Service\Bo2So\ABo2SoConverter;
use Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\LeadSO;

class LeadBo2So extends ABo2SoConverter
{
	/**
	 * @param $so LeadSO
	 * @return LeadBO
	 */
	protected function convert2SrcNotNull($so)
	{
		$bo = new LeadBO();
		$bo->setName($so->getName());
		$bo->setEmail($so->getEmail());

		return $bo;
	}
}