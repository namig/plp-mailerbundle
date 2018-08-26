<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 18:18
 */

namespace Plp\MailerBundle\Core\BO\Command\Subscriber\Subscribe;


class LeadBO
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
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