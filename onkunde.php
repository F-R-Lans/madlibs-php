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
       <form action="onkunde_post.php" method="post">
        <p>Wat zou je graag willen kunnen? <input class="question" type="text" name="kunnen"></p><br>
        <p>Met welke persoon kun je goed opscheten? <input class="question" type="text" name="vriend"></p><br>
        <p>Wat is je favoriete getal? <input class="question" type="text" name="getal"></p><br>
        <p>Wat heb je altijd bij je als je op vakantie gaat? <input class="question" type="text" name="vakantie"></p><br>
        <p>wit is je beste persoonlijke eigenschap? <input class="question" type="text" name="eigenschap1"></p><br>
        <p>Wat is je slechtste persoonlijke eigenschap? <input class="question" type="text" name="eigenschap2"></p><br>
        <p>Wat is het ergste dat je kan overkomen? <input class="question" type="text" name="erg"></p><br>
        <input type="submit" name="send">
      </form>
     </article>
     <footer> Made by nunya buziness</footer>
   </body>
 </html>
