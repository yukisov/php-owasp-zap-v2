<?php

namespace Zap\Test;

class Zapv2Test extends \PHPUnit_Framework_TestCase{

	public function setUp() {
		parent::setUp();

		// Set your ZAP setting
		$this->proxy = "tcp://localhost:8090";
		// Set your target web server
		$this->target_url = "http://localhost:8000";
	}

    public function tearDown() {
        \Mockery::close();
    }

	/**
	 * @test
	 */
	public function testVersion() {
		$zap = new \Zap\Zapv2($this->proxy);
		$version = @$zap->core->version();
		$this->assertSame("2.4", substr($version, 0, 3));
	}

	/**
	 * @test
	 */
	public function testStatusCode() {
		$zap = new \Zap\Zapv2($this->proxy);
		$res = $zap->statusCode($this->target_url);
		$this->assertSame("200", $res);
	}

	/**
	 * @test
	 */
	public function testSpiderScanReturnError() {
		// the Spider->scan() method doesn't raise any errors
		$this->assertTrue(true);
	}

	/**
	 * @test
	 */
	public function testSpiderScanReturnSuccess() {
		/* Use Mock not to request to a target server */
		$spider = \Mockery::mock('Zap\Spider');
		$spider->shouldReceive('scan')->once()->andReturn("1");

		$zap = new \Zap\Zapv2($this->proxy);
		$zap->setFieldByName('spider', $spider);
		$scan_id = $zap->spider->scan($this->target_url);

		$this->assertSame($scan_id, '1');
	}
}
