<!-- Ricreare il nostro database dell’esercizio Basket (utilizzando solo funzioni PHP). Questa volta lo creiamo in un file PHP incluso nel file PHP principale che utilizzerà i dati per stamparli nell’html.
Potete inizialmente stamparli come le card uno sotto (o a fianco) all'altro e poi, se avete tempo e voglia, potete aggiungere il click sul codice del giocatore che mostra i dati solo del giocatore selezionato (con jQuery ovviamente) -->
<?php
  // generatore codice alfanumerico
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
  $code = substr(str_shuffle($permitted_chars), 0, 6);
  // generatore punti
  $punti = rand(0, 30);
  // generatore rimbalzi
  $rimbalzi = rand(0, 30);
  // generatore % da due punti
  $perc_2punti = rand(1, 100);
  // generatore % da tre punti
  $perc_3punti = rand(1, 100);

  // array scheda giocatore
  $scheda = [
    'codice' => $code,
    'rimbalzi' =>
  ]
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  </body>
</html>
