<?php

require_once __DIR__ . '/vendor/autoload.php';

$climate = new League\CLImate\CLImate;

$fiber = new Fiber(function(): void {
	$climate = new League\CLImate\CLImate;
	$climate->green("Execution will start as soon as the fiber is created");
	$climate->green("Things will continue until we call suspend");
	$climate->green('Fiber::suspend();');
    Fiber::suspend();
	$climate->green("Hello again from the Fiber...");
	$climate->green("This fiber is now done!");
});

$climate->blue("The fiber won't start until we call start");
$climate->blue('$fiber->start();');
$fiber->start();
$climate->blue("Take control back as soon as possible");
$climate->blue("But then resume the fiber again when ready");
$climate->blue('$fiber->resume();');
$fiber->resume();
$climate->blue("End of script");
