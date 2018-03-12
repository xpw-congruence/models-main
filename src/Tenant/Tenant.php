<?php

namespace XpwCongruence\ModelsMain\Tenant;

use Zend\Stdlib\Guard\EmptyGuardTrait,
	Zend\Stdlib\Guard\NullGuardTrait,
	XpwCongruence\ModelsMain\Tenant\Exception;

class Tenant
{
	use EmptyGuardTrait,
		NullGuardTrait;

	/**
	 * @var string
	 */
	private $name = null;

	//
	// Name
	//

	/**
	 * @return string
	 *
	 * @throws Exception\RuntimeException on unset name
	 */
	public function getName()
	{
		$this->guardAgainstNull(
			$this->name,
			'name',
			'XpwCongruence\ModelsMain\Tenant\Exception\RuntimeException');

		return $this->name;
	}//end func

	/**
	 * @param string $name
	 *
	 * @return $this
	 *
	 * @throws Exception\InvalidArgumentException on empty name argument
	 */
	public function setName($name)
	{
		$name = (string) $name;

		$this->guardAgainstEmpty(
			$name,
			'name',
			'XpwCongruence\ModelsMain\Tenant\Exception\InvalidArgumuentException');

		$this->name = $name;

		return $this;
	}//end func

}//end class