<?php

require_once __DIR__ . '/vendor/autoload.php';

$climate = new League\CLImate\CLImate;

$fiber = new Fiber(function(int $count): void {
	for ($i = 0; $i < $count; $i++) {
		$climate = new League\CLImate\CLImate;
		$climate->green("Pretending to do IO (with a sleep) for thing " . $i+1);
		$ioWillTake = rand(1000000, 4000000);
		usleep($ioWillTake); // faking a copy of something with IO
        Fiber::suspend([$i+1, $ioWillTake]);
	}
});


// Start 5 fake IO things in the fiber loop
$todo = 5;
$copied = $fiber->start($todo);
$completed = 1;

while(!$fiber->isTerminated()) {
    $percentage = round($completed / $todo, 2) * 100;
    $climate->blue("[{$percentage}%]: Fake did some IO");
    $copied = $fiber->resume();
    ++$completed;
}

$climate->blue('Completed');
