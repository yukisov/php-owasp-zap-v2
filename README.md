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
			"url": "to/local/repository/of/php-owasp-zap-v2/"
		}
	],
	"require": {
		...
		"zap/php-owasp-zap-v2": "dev-master"
		...
	}
	...
}
```


##License
- MIT License