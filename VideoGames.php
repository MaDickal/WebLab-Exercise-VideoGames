<?php

include('VGfunc.php');

$videogames[] = [
  "Name" => "Diablo 3",
  "Gameplay" => "Dungeon Crawler",
  "Platforms" => ['PC', 'PS3', 'Xbox'],
  "Release Year" => "2012"
  ];

$videogames[] = [
  "Name" => "FFXIV:ARR",
  "Gameplay" => "MMORPG",
  "Platforms" => ['PC', 'PS3'],
  "Release Year" => "2013"
  ];

$videogames[] = [
  "Name" => "Terraria",
  "Gameplay" => "Action-Adventure Sandbox",
  "Platforms" => ['PC', 'PS3', 'Xbox', 'Mobile'],
  "Release Year" => "2011"
  ];

$videogames[] = [
  "Name" => "Legend of Zelda: Ocarina of Time",
  "Gameplay" => "Action-Adventure",
  "Platforms" => ['N64', 'GameCube', 'Wii', 'Wii U'],
  "Release Year" => "1998"
  ];

$videogames[] = [
  "Name" => "Ni No Kuni",
  "Gameplay" => "RPG",
  "Platforms" => ['Nintendo DS', 'PS3'],
  "Release Year" => "2013"
  ];


?>

<html>
<head>
  <h2 align="center">Video Game Completion List</h2>
</head>
<body>
  <table>
      <tr>
        <td><b>Game</b></td>
        <td><b>Genre</b></td>
        <td><b>Platforms</b></td>
        <td><b>Release Year</b></td>
      </tr>
    <?php foreach($videogames as $videogame) { ?>
      <tr>
        <td><?php print $videogame['Name']; ?></td>
        <td><?php print $videogame['Gameplay']; ?></td>
        <td><?php
              foreach($videogame['Platforms'] as $platform) {
                echo "<pre>" . $platform . "</pre>";
              }
            ?></td>
        <td><?php print $videogame['Release Year']; ?></td>
      </tr>
    <?php } ?>
  </table>

<style>

  table { width : 100%; }
  td { border : 1px solid blue}

</style>

<h3 align="center"><?php
      commonConsole($videogames);
    ?>
</h3>

</body>

</html>

</html>
