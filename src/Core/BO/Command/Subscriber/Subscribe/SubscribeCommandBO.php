<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:32
 */

namespace Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe;


use Plp\MailerBundle\Core\BO\Command\ACommandBO;
use Plp\MailerBundle\Core\Business\Subscriber\SubscriberBusinessInterface;

class SubscribeCommandBO extends ACommandBO
{
	/**
	 * @var LeadBO
	 */
	private $lead;

	/**
	 * @var SubscriberBusinessInterface
	 */
	private $business;

	function __construct(SubscriberBusinessInterface $business)
	{
		$this->business = $business;
	}

	public function execute()
	{
		$this->business->subscribe($this);
	}

	/**
	 * @return LeadBO
	 */
	public function getLead(): ?LeadBO
	{
		return $this->lead;
	}

	/**
	 * @param LeadBO $lead
	 */
	public function setLead(?LeadBO $lead)
	{
		$this->lead = $lead;
	}
}