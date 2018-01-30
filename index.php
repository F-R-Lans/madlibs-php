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
       <form action="paniek_post.php"  method="post">
        <p>Welk dier zou je nooit als huisdier wilen hebben? <input class="question" type="text" name="huisdier"></p><br>
        <p>Wie is de belangrijkste persoon in je leven? <input class="question" type="text" name="persoon"></p><br>
        <p>In welk land zou je graag willen wonen? <input class="question" type="text" name="land"></p><br>
        <p>Wat doe je als je je verveelt? <input class="question" type="text" name="verveel"></p><br>
        <p>Met welk speelgoed speelde je als kind het meest? <input class="question" type="text" name="speelgoed"></p><br>
        <p>Bij welke docent spijbel je het liefst? <input class="question" type="text" name="docent"></p><br>
        <p>Als je €100,000 had, wat zou je dan kopen? <input class="question" type="text" name="geld"></p><br>
        <p>Wat is je favoriete bezigheid? <input class="question" type="text" name="bezigheid"></p><br>
        <input type="submit" name="send">
      </form>
     </article>
     <footer> Made by nunya buziness</footer>
   </body>
 </html>
