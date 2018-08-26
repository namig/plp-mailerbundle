<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 25.08.2018
 * Time: 14:37
 */

namespace Plp\MailerBundle\Service\Bo2So;


use Doctrine\Common\Collections\ArrayCollection;

abstract class ABo2SoConverter
{
	protected abstract function convert2SrcNotNull($so);

	public function convert2Src($so)
	{
		if (empty($so)) {
			return null;
		}

		return $this->convert2SrcNotNull($so);
	}

	/**
	 * @param array $soList
	 * @return ArrayCollection
	 */
	public function convert2SrcList(array $soList)
	{
		if (empty($soList)) {
			return new ArrayCollection();
		}
		$result = new ArrayCollection();
		foreach ($soList as $so) {
			$result->add($this->convert2Src($so));
		}
		return $result;
	}
}