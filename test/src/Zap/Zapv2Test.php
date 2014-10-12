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

	/**
	 * @test
	 */
	public function testVersion() {
		$zap = new \Zap\Zapv2($this->proxy);
		$version = @$zap->core->version();
		$this->assertSame("2.3.1", $version);
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
		$resObj = json_decode('{"foo" : "bar"}');
		$spider = \Mockery::mock('Zap\Spider');
		$spider->shouldReceive('scan')->once()->andReturn($resObj);

		$zap = new \Zap\Zapv2($this->proxy);
		$zap->setFieldByName('spider', $spider);
		$resJson = $spider->scan($this->target_url);

		try {
			$zap->expectOk($resJson);
		} catch (\Zap\ZapError $e) {
			$expectedString = "Zap\\ZapError: [0]: " . var_export($resJson, true) . "\n";
			$this->assertSame($expectedString, $e->__toString());
		}
	}

	/**
	 * @test
	 */
	public function testSpiderScanReturnSuccess() {
		/* Use Mock not to request to a target server */
		$resObj = json_decode('{"Result" : "OK"}');
		$spider = \Mockery::mock('Zap\Spider');
		$spider->shouldReceive('scan')->once()->andReturn($resObj);

		$zap = new \Zap\Zapv2($this->proxy);
		$zap->setFieldByName('spider', $spider);
		$returnVal = $spider->scan($this->target_url);

		$res = $zap->expectOk($returnVal);
		$this->assertSame($returnVal, $res);
	}

	public function tearDown() {
		\Mockery::close();
	}
}