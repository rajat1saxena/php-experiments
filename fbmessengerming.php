<?php

$x = array (
  'object' => 'page',
  'entry' => 
  array (
    0 => 
    array (
      'id' => 401462790014008,
      'time' => 1461056963736,
      'messaging' => 
      array (
        0 => 
        array (
          'sender' => 
          array (
            'id' => 988811867835427,
          ),
          'recipient' => 
          array (
            'id' => 401462790014008,
          ),
          'timestamp' => 1461054650464,
          'message' => 
          array (
            'mid' => 'mid.1461054650462:d43d4b46e5f7dcea39',
            'seq' => 18,
            'text' => 'hello rajat',
          ),
        ),
        1 => 
        array (
          'sender' => 
          array (
            'id' => 988811867835427,
          ),
          'recipient' => 
          array (
            'id' => 401462790014008,
          ),
          'timestamp' => 1461055387108,
          'message' => 
          array (
            'mid' => 'mid.1461055387103:fa704732ac435c2748',
            'seq' => 19,
            'text' => 'Hi',
          ),
        ),
        2 => 
        array (
          'sender' => 
          array (
            'id' => 988811867835427,
          ),
          'recipient' => 
          array (
            'id' => 401462790014008,
          ),
          'timestamp' => 1461056748596,
          'message' => 
          array (
            'mid' => 'mid.1461056748594:7d303cb0bc3e1c2f81',
            'seq' => 20,
            'text' => 'hello',
          ),
        ),
        3 => 
        array (
          'sender' => 
          array (
            'id' => 988811867835427,
          ),
          'recipient' => 
          array (
            'id' => 401462790014008,
          ),
          'timestamp' => 1461056786750,
          'message' => 
          array (
            'mid' => 'mid.1461056786747:345051dd1824f81500',
            'seq' => 21,
            'text' => 'kya',
          ),
        ),
        4 => 
        array (
          'sender' => 
          array (
            'id' => 988811867835427,
          ),
          'recipient' => 
          array (
            'id' => 401462790014008,
          ),
          'timestamp' => 1461056843946,
          'message' => 
          array (
            'mid' => 'mid.1461056843943:c87f4ef42e7cf14445',
            'seq' => 22,
            'text' => 'aur be',
          ),
        ),
      ),
    ),
  ),
);

$messaging_events = $x['entry'][0]['messaging'];
foreach($messaging_events as $message){
  $sender = $message['sender']['id'];
  $text = $message['message']['text'];
  echo $sender.':'.$text."\n";
}
//var_dump($messaging_events);

?>