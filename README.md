php-owasp-zap-v2
================

PHP client API for OWASP ZAP

##Getting Started

1. Git clone this repository on your local.
2. Add the lines on the next section to the composer.json in your project.
3. `$ php composer.phar install/update`

###composer.json on caller side
```
{
	...
	"repositories":[
		{
			"type": "git",
			"url": "to/php-owasp-zap-v2/"
		}
	],
	"require": {
		...
		"yukisov/php-owasp-zap-v2": "dev-master"
		...
	}
	...
}
```

##Usage
Example:

```php
<?php

$loader = require "vendor/autoload.php";

$target = "http://target.example.com/";

$zap = new \Zap\Zapv2('tcp://localhost:8090');
echo "version:" . $zap->core->version() . "\n";

echo "Spidering target " . $target . "\n";
// Give the Spider a chance to start
$zap->spider->scan($target);
while ((int)($zap->spider->status()) < 100) {
  echo "Spider progress " . $zap->spider->status() . "%\n";
  sleep(2);
}
echo "Spider completed\n";
// Give the passive scanner a chance to finish
sleep(5);

echo "Scanning target " . $target . "\n";
$zap->ascan->scan($target, 0, 0);
while ((int)($zap->ascan->status()) < 100) {
  echo "Scan progress " . $zap->ascan->status() . "%\n";
  sleep(2);
}
echo "Scan completed\n";

// Report the results
echo "Hosts: " . implode(",", $zap->core->hosts()) . "\n";
$alerts = $zap->core->alerts($target, "", "");
echo "Alerts (" . count($alerts) . "):\n";
print_r($alerts);

```

##License
- MIT License