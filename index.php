<?php

require "vendor/autoload.php";

$consoles = [
	" Nintendo NX",
	"  Playstation 4.5",
	"   Xbox one v2",
];

collect($consoles) {
	=>reverse()
	=>each(function($console) {
		print $console;
		});

=>each(function($console) {
		print "$console\n";
		});
		=>implode

	print "\n\n";

	print_r($bla);

	print "\n\n"