<!doctype PHP>
<html>
<head>
<?php
      /*$query = "SELECT header, image, description FROM siteusers";
      $result = $conn->query($query);
      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $header = $row['header'];
              $imageData = $row['image'];
              $description = $row['description'];
              echo "<div class="games flex">
              <a href="#"><img src="dishonored.jpg" class="flex"></a>
                <div class="games-text flex">
                  <h2 class="flex">$header</h2>
                  <p>$description</p>
                </div>
              </div>
          }
      } else {
          echo "No records found.";
      }
      $conn->close();
      */
?>
    <link rel="stylesheet" href="style.css">
    <header class="Hmain Hmargin">
        <div class="logo"><img src="Logo.png" width="50px" height="50px"></div>
        <nav class="nav">
        <a href="index.php">Home</a>
        <a href="#">More Games From Us</a>
        <a href="Log_in.php">Log In</a>
        <a href="faq.php">FAQ</a>
        <a href="aboutus.php">About Us</a>
        </nav>
    </header>
</head>
<body>
  <div class="container flex">
    <div class="games flex">
    <a href="#"><img src="dishonored.jpg" class="flex"></a>
      <div class="games-text flex">
        <h2 class="flex">Dishonored</h2>
        <p>Dishonored is an immersive first-person action game that casts you as
           a supernatural assassin driven by revenge. With Dishonored’s flexible 
           combat system, creatively eliminate your targets as you combine the supernatural 
           abilities, weapons and unusual gadgets at your disposal. Pursue your enemies under 
           the cover of darkness or ruthlessly attack them head on with weapons drawn. 
           The outcome of each mission plays out based on the choices you make.</p>
      </div>
    </div>
    <div class="games flex">
    <a href="#"><img src="prey.webp" class="flex"></a>
      <div class="games-text flex">
        <h2 class="flex">Prey</h2>
        <p>In Prey, you awaken aboard Talos I, a space station orbiting the moon in the 
           year 2032. You are the key subject of an experiment meant to alter humanity 
           forever – but things have gone terribly wrong. The space station has been overrun 
           by hostile aliens and you are now being hunted. As you dig into the dark secrets 
           of Talos I and your own past, you must survive using the tools found on the station -- your wits, 
           weapons, and mind-bending abilities. The fate of the Talos I and everyone aboard is in 
           your hands.</p>
      </div>
    </div>
    <div class="games flex">
      <a href="#"><img src="Fallout4.jpg" class="flex"></a>
      <div class="games-text flex">
        <h2 class="flex">Fallout 4</h2>
        <p>Bethesda Game Studios, the award-winning creators of 
           Fallout 3 and The Elder Scrolls V: Skyrim, welcome you 
           to the world of Fallout 4 – their most ambitious game ever, and the 
           next generation of open-world gaming. As the sole survivor of Vault 111,
           you enter a world destroyed by nuclear war. Every second is a fight for 
           survival, and every choice is yours. Only you can rebuild and determine 
           the fate of the Wasteland. Welcome home.</p>
      </div>
    </div>
    <div class="games flex">
    <a href="#"><img src="Deathloop.jpg" class="flex"></a>
      <div class="games-text flex">
        <h2 class="flex">Deathloop</h2>
        <p>DEATHLOOP is a next-gen first person shooter from Arkane Lyon, the 
           award-winning studio behind Dishonored. In DEATHLOOP, two rival assassins 
           are trapped in a mysterious timeloop on the island of Blackreef, doomed 
           to repeat the same day for eternity. As Colt, the only chance for escape 
           is to end the cycle by assassinating eight key targets before the day 
           resets. Learn from each cycle - try new paths, gather intel, and find 
           new weapons and abilities. Do whatever it takes to break the loop.</p>
      </div>
    </div>
    <div class="games flex">
    <a href="#"><img src="doom.jpg" class="flex"></a>
      <div class="games-text flex">
        <h2 class="flex">Doom</h2>
        <p>Developed by id software, the studio that pioneered the 
           first-person shooter genre and created multiplayer Deathmatch, 
           DOOM returns as a brutally fun and challenging modern-day shooter 
           experience. Relentless demons, impossibly destructive guns, 
           and fast, fluid movement provide the foundation for intense, first-person 
           combat – whether you’re obliterating demon hordes through the depths of Hell 
           in the single-player campaign, or competing against your friends in numerous 
           multiplayer modes. Expand your gameplay experience using DOOM SnapMap game 
           editor to easily create, play, and share your content with the world.</p>
      </div>
    </div>
  </div>
</body>
</html>