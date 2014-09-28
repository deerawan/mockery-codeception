<?php

require_once __DIR__ . '/../../src/Husband.php';

use Mockery as m;

class HusbandTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;
    
    public function testNeedKissIsFrenchKiss()
    {
        $wife = m::mock('Wife');
        $wife->shouldReceive('kiss')->once()->andReturn(true);

        $husband = new Husband($wife);
        $kissResult = $husband->needKiss();

        $this->assertEquals('very happy', $kissResult);
    }

}