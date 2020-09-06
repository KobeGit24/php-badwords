<!-- GOAL: Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<div style="background-color:#ccc; height:400px; border:3px solid black; padding:20px;">
  <b>
    <?php
      $p ="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
      echo $p;
    ?>
  </b>

  <b style="color: red;">
    <?php
      echo "<br>";
      echo "Lunghezza del paragrafo: " . strlen($p);
      echo "<br>";
    ?>
  </b>

  <b style="color: blue;">
    <?php
    $badword = $_GET["badword"];
    echo $badword;
     ?>
  </b>

  <b style="color: purple;">
    <?php
    $pNew = str_replace($badword, "***",$p);
    echo "<br>";
    echo $pNew;
    echo "<hr>";
    ?>
  </b>

  <!-- Versione con var_dump -->

  <b style="color: white;">
    <?php
    $p ="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    var_dump($p);
    echo "<br>";
    ?>
  </b>
  <b style="color: blue;">
    <?php
    $badword = $_GET["badword"];
    var_dump($badword);
    ?>
  </b>
  <b style="color: purple;">
    <?php
    $pNew = str_replace($badword, "***",$p);
    echo "<br>";
    var_dump($pNew);
    ?>
  </b>

</div>
