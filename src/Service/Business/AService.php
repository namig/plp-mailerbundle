<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 19:19
 */

namespace Plp\MailerBundle\Service\Business;


use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Plp\MailerBundle\Core\Business\CommandBusiness;

abstract class AService
{
	/**
	 * @var Serializer
	 */
	protected $serializer;

	/**
	 * @var CommandBusiness
	 */
	protected $commandBusiness;

	function __construct(CommandBusiness $commandBusiness)
	{
		$this->serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
			new SerializedNameAnnotationStrategy(
				new IdenticalPropertyNamingStrategy()
			)
		)->build();
		$this->commandBusiness = $commandBusiness;
	}

}