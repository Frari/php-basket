<!-- Ricreare il nostro database dell’esercizio Basket (utilizzando solo funzioni PHP). Questa volta lo creiamo in un file PHP incluso nel file PHP principale che utilizzerà i dati per stamparli nell’html.
Potete inizialmente stamparli come le card uno sotto (o a fianco) all'altro e poi, se avete tempo e voglia, potete aggiungere il click sul codice del giocatore che mostra i dati solo del giocatore selezionato (con jQuery ovviamente) -->
<?php
  // generatore codice alfanumerico
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

  // array scheda giocatore

  $scheda = [];

  for ($i=0; count($scheda) < 20 ; $i++) {
    $code = substr(str_shuffle($permitted_chars), 0, 6);
    // generatore punti
    $punti = rand(0, 30);
    // generatore rimbalzi
    $rimbalzi = rand(0, 30);
    // generatore % da due punti
    $perc_2punti = rand(1, 100);
    // generatore % da tre punti
    $perc_3punti = rand(1, 100);

    if(!array_key_exists($code, $scheda)){
      $scheda[$code] = [
        'codice' => $code,
        'punti' => $punti,
        'rimbalzi'=>$rimbalzi,
        '% da 2 punti' => $perc_2punti,
        '% da 3 punti' => $perc_3punti
      ];
    }
  }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
    foreach($scheda as $key => $value) { ?>
       <div class="container">
        <?php  echo 'CODICE:'.' '.$value['codice'].'<br>';
        echo 'PUNTI:'.' '.$value['punti'].'<br>';
        echo 'RIMBALZI:'.' '.$value['rimbalzi'].'<br>';
        echo '% 2 PUNTI:'.' '.$value['% da 2 punti'].'<br>';
        echo '% 3 PUNTI:'.' '.$value['% da 3 punti'].'<br>';?>
       </div>
     <?php }
    ?>
  </body>
</html>
