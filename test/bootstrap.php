<?php

error_reporting(E_ALL ^ E_DEPRECATED);

set_include_path(implode(PATH_SEPARATOR, array(
	                            realpath(dirname(__FILE__).'/../src'),
	                            '/usr/local/Cellar/php/5.3.6/lib/php/src',
			    				get_include_path(),
                         )));

require_once 'PHPUnit/Autoload.php';
