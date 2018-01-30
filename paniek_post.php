<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>mad libs</title>
     <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
     <div id="image">
       <head>
         <p id="mad">mad libs</p>
       </head>
     </div>
     <div id="middle">
     <nav>
       <ul>
         <li> <a href="index.php">Er heerst paniek...</a></li>
         <li> <a href="onkunde.php">Onkunde</a></li>
       </ul>
     </nav>
     </div>
     <article>
       <h2> Er heerst paniek...</h2>
       <p>Er heerst paniek in het koningkrijk <?php echo  $_POST["land"] ;?>. Koning <?php echo  $_POST["docent"] ;?> is ten einde raad en als koning <?php echo  $_POST["docent"] ;?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"] ;?><br><?php echo $_POST["persoon"] ;?>! Het is een ramp! Het is een schande!<br> Sire, Majesteid, Uwe luidruchtigheid, wat is er aan de hand?<br>Mijn </p>
       <?php echo $_POST["huisdier"] ;?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"] ;?> voor hem gekocht!<br> Majesteid, uw <?php echo $_POST["huisdier"] ;?> komt vast vanzelf weer terug.<br> Ja, da's leuk en aardig, maar hoe moet ik in de tussen tijd <?php echo $_POST["bezigheid"] ;?> leren? <br> Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"];?> voor gebruiken. <br>
       <?php echo  $_POST["docent"] ;?> Je hebt helemaal gelijk! Wat zou ik toch doen als ik jou niet had<br>
       <?php echo $_POST["verveel"] ;?>,Sire.</p>


     </article>
     <footer> Made by nunya buziness</footer>
   </body>
 </html>
