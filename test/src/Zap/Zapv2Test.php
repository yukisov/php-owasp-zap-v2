<?php

namespace Zap\Test;

class Zapv2Test extends \PHPUnit_Framework_TestCase{

    public function setUp()
    {
        parent::setUp();

        $this->proxy = "tcp://localhost:8090";
        $this->target_url = "https://www.owasp.org/index.php/OWASP_Zed_Attack_Proxy_Project";
    }

    /**
     * @test
     */
    public function testVersion()
    {
        $zap = new \Zap\Zapv2($this->proxy);
        $version = @$zap->core->version();
        $this->assertSame("2.3.1", $version);
    }

    /**
     * @test
     */
    public function testStatusCode()
    {
        $zap = new \Zap\Zapv2($this->proxy);
        $res = $zap->statusCode($this->target_url);
        $this->assertSame("200", $res);
    }
}