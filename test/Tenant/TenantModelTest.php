<?php

namespace XpwCongruenceTest\ModelsMain\Tenant;

use XpwCongruence\ModelsMain\Tenant\TenantModel as TenantModel,
	XpwCongruence\ModelsMain\Tenant\Exception\RuntimeException,
	XpwCongruence\ModelsMain\Tenant\Exception\InvalidArgumentException;

class TenantModelTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var TenantModel
	 */
	private $tenant = null;

	/**
	 * Setup
	 */
	public function setUp()
	{
		$this->tenant = new TenantModel();
	}

	//
	// Name accessors
	//

	/**
	 * Test name accessors
	 */
	public function testNameAccessors()
	{
		$name = 'test-name';

		$this->tenant->setName($name);

		$nameOut = $this->tenant->getName();

		$this->assertEquals($name, $nameOut);

	}//end func

	/**
	 * Test for exception on getting unset name
	 * @expectedException RuntimeException
	 */
	public function testNameGetterException()
	{
		$this->tenant->getName();
	}//end func

	/**
	 * Test for exception on setting empty name value
	 * @expectedException InvalidArgumentException
	 */
	public function testNameSetterException()
	{
		$name = '';
		$this->tenant->setName($name);
	}//end func


}//end class