<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 19:49
 */

namespace Plp\MailerBundle\Core\CO\MailChimp;


use JMS\Serializer\Annotation as Serializer;

class MemberCO
{
	const STATUS_SUBSCRIBED = "subscribed";

	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("email_address")
	 */
	private $email;

	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("status")
	 */
	private $status;

	/**
	 * @var MemberMergeFieldsCO
	 * @Serializer\Type("Plp\MailerBundle\Core\CO\MailChimp\MemberMergeFieldsCO")
	 * @Serializer\SerializedName("merge_fields")
	 */
	private $mergeFields;

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

	/**
	 * @return string
	 */
	public function getStatus(): ?string
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus(?string $status)
	{
		$this->status = $status;
	}

	/**
	 * @return MemberMergeFieldsCO
	 */
	public function getMergeFields(): ?MemberMergeFieldsCO
	{
		return $this->mergeFields;
	}

	/**
	 * @param MemberMergeFieldsCO $mergeFields
	 */
	public function setMergeFields(?MemberMergeFieldsCO $mergeFields)
	{
		$this->mergeFields = $mergeFields;
	}
}