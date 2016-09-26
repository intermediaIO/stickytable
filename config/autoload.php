<?php

ClassLoader::addNamespaces(array
(
	'IIO',
	'IIO\Classes',
	'IIO\Frontend',
	'IIO\Models'
));

ClassLoader::addClasses(array
(
	'IIO\Classes\stickyHelper' => 'system/modules/stickytable/classes/stickyHelper.php',
));

TemplateLoader::addFiles(array());
