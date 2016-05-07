<?php
$c = new Mosquitto\Client;
$c->onConnect(function() use ($c) {
	$c->publish('rajat','Ka hai be?',2);
});

$c->connect('localhost');
for($i=0;$i<100;$i++){
	$c->loop(1);
}
?>
