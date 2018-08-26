<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:19
 */

namespace Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe;


use JMS\Serializer\Annotation as Serializer;

class LeadSO
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	private $name;

	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	private $email;

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(?string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail(?string $email)
	{
		$this->email = $email;
	}
}