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
       <h2> Onkunde</h2>
       <p>Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]; ?>. Neem nou <?php echo $_POST["vriend"]; ?>.Zelfs met de hulp van een <?php echo $_POST["vakantie"]; ?> of zelfs <?php echo $_POST["getal"]; ?> kan <?php echo $_POST["vriend"]; ?> niet <?php echo $_POST["kunnen"]; ?>.Dat heeft niet te maken met een gebrek aan 
       <?php echo $_POST["eigenschap1"]; ?>, maar met een te veel aan <?php echo $_POST["eigenschap2"]; ?>.Te veel <?php echo $_POST["eigenschap2"]; ?> leidt tot <?php echo $_POST["erg"]; ?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"]; ?>.Helaas voor <?php echo $_POST["vriend"]; ?>.</p>

     </article>
     <footer> Made by nunya buziness</footer>
   </body>
 </html>
