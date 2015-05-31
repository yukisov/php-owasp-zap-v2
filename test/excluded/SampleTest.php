<?php

class Zapv2Test extends \PHPUnit_Framework_TestCase{

	public function setUp() {
		parent::setUp();
	}

    public function tearDown() {
        \Mockery::close();
    }

	/**
	 * @test
	 */
	public function testRun() {

        $api_key = "popsp3nasdfesc7h4agk4m24cj";
        $target = "http://192.168.0.50/bodgeit/";
        $proxy = "tcp://localhost:8090";

        $zap = new Zap\Zapv2($proxy);

        $version = @$zap->core->version();
        if (is_null($version)) {
            echo "PHP API error\n";
            exit();
        } else {
            echo "version: ${version}\n";
        }

        echo "Spidering target ${target}\n";

        // Response JSON looks like {"scan":"1"}
        $scan_id = $zap->spider->scan($target, 0, $api_key);
        $count = 0;
        while (true) {
            if ($count > 10) exit();
            // Response JSON looks like {"status":"50"}
            $progress = intval($zap->spider->status($scan_id));
            printf("Spider progress %d\n", $progress);
            if ($progress >= 100) break;
            sleep(2);
            $count++;
        }
        echo "Spider completed\n";
        // Give the passive scanner a chance to finish
        sleep(5);

        echo "Scanning target ${target}\n";
        // Response JSON for error looks like {"code":"url_not_found", "message":"URL is not found"}
        $scan_id = $zap->ascan->scan($target, '', '', '', '', '', $api_key);
        $count = 0;
        while (true) {
            if ($count > 10) exit();
            $progress = intval($zap->ascan->status($scan_id));
            printf("Scan progress %d\n", $progress);
            if ($progress >= 100) break;
            sleep(2);
            $count++;
        }
        echo "Scan completed\n";

        // Report the results
        echo "Hosts: " . implode(",", $zap->core->hosts()) . "\n";
        $alerts = $zap->core->alerts($target, "", "");
        echo "Alerts (" . count($alerts) . "):\n";
        //print_r($alerts);

	}

}
