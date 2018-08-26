<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 20:39
 */

namespace Plp\MailerBundle\Core\CO\MailChimp;


use JMS\Serializer\Annotation as Serializer;

class MemberMergeFieldsCO
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("FNAME")
	 */
	private $firstName;

	/**
	 * @return string
	 */
	public function getFirstName(): ?string
	{
		return $this->firstName;
	}

	/**
	 * @param string $firstName
	 */
	public function setFirstName(?string $firstName)
	{
		$this->firstName = $firstName;
	}
}