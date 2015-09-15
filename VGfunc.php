<?php

function commonConsole($videogames) {
  $consoles = [];
  foreach($videogames as $videogame) {
    foreach($videogame['Platforms'] as $console) {
      if(array_key_exists($console, $consoles)) {
        $consoles[$console]++;
      }
      else {
       $consoles[$console] = 1;
      }
    }
  }
  arsort($consoles);
  $mostCommon = key($consoles);
  echo "The most common console used in this list is " . $mostCommon . ".";
}



?>
