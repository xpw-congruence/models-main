<?php

namespace XpwCongruenceTest\ModelsMain\Tenant;

use XpwCongruence\ModelsMain\Tenant\Tenant as TenantModel;

class TenantTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test name getter
	 */
	public function testNameGetter()
	{
		$tenant = new TenantModel();
		$name   = 'test-name';

		$tenant->setName($name);

		$nameOut = $tenant->getName();

		$this->assertEquals($name, $nameOut);

	}//end func

}//end class