<body>
  <?php
  $variavel2 = 'eu te amo S2';
  $variavel3 = "Italo {$variavel2}";
  echo $variavel3;
  $variavel3 = $variavel2[0];
  echo '<br/>';
   $variavel3 = array('maçã' , 'banana');
  echo implode ('--' , $variavel3);
      echo '<br/>';
      $variavel = 0;
      echo $variavel;
      echo '<br/>';
      echo $variavel;
      echo "<br>";
      require 'printer.php';
      
   ?>

</body>
