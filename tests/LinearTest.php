<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__ . '/../core/EquationInterface.php';
include_once __DIR__ . '/../core/LogInterface.php';
include_once __DIR__ . '/../core/LogAbstract.php';
include_once __DIR__ . '/../Burya/Linear.php';
include_once __DIR__ . '/../Burya/Square.php';
include_once __DIR__ . '/../Burya/BuryaException.php';
include_once __DIR__ . '/../Burya/Log.php';
class LinearTest extends TestCase {
	public function testLinear1() : void
	{
		$a = new Burya\Linear();
		$this->assertEquals([-2],$a->linear(5,10));
	}
	public function testLinear2() : void
	{
        $a = new Burya\Linear();
        $this->assertEquals([0],$a->linear(5,0));
	}
	public function testExpectException1() : void
	{
        $a = new Burya\Linear();
        $this->expectException(Burya\BuryaException::class);
        $a->linear(0,5);
	}
	public function testExpectException2() : void
	{
        $a = new Burya\Linear();
        $this->expectException(Burya\BuryaException::class);
        $a->linear(0,0);
	}
}
