<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Calculatrice</title>
</head>
<body>

  <!-- Compléter le fichier fourni pour que la calculatrice fonctionne. -->
  <!-- Bonus : Ajouter un bouton de remise à zéro. -->


  <h1>Une calculatrice en PHP</h1>
  <div class="col-sm-6" style="text-align:center;">
    <form action="index.php" method="post">
      <div>
        <label for="chiffre1">Chiffre1: </label>
        <input type="text" name="chiffre1" value="0"/>
      </div>
      <div >
        <label for="chiffre2">Chiffre2: </label>
        <input type="text" name="chiffre2" value="0"/>
      </div>
      <div class="form-group">
        <label for="choix">Opération: </label>
        <select name="choix">
          <option value="+">Addition</option>
          <option value="-">Soustraction</option>
          <option value="*">Multiplication</option>
          <option value="/">Division</option>
        </select>
      </div>

      <button type="submit" name="button" value="calculer">Submit</button>
      <button type="reset" name="buttonReset" value="effacer">Reset</button>


  <?php
  if(isset($_POST['chiffre1']) && isset($_POST['chiffre2'])){ // Si les variables existent ...
    $chiffre1 =htmlspecialchars($_POST['chiffre1']); // On sécurise ...
    $chiffre2 = htmlspecialchars($_POST['chiffre2']);
    if ($_POST['choix'] == '+'){
      $result = $chiffre1 + $chiffre2;
      ?>
    <p>Le resultat est :<?php echo $result ?></p>
    <?php
    }else if($_POST['choix'] == '-'){
      $result = $chiffre1 - $chiffre2;
      ?>
        <p>Le resultat est :<?php echo $result ?></p>
    <?php
    }else if($_POST['choix'] == '*'){
      $result = $chiffre1 * $chiffre2;
      ?>
      <p>Le resultat est :<?php echo $result ?></p>
      <?php
    }else{
      $result = $chiffre1 / $chiffre2;
      ?>
      <p>Le resultat est :<?php echo $result;
    }?></p>
<div class="row mt-4">

<?php
  } else{ // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
  echo 'Veuillez renseigner tous les champs.';
  }
  ?>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
