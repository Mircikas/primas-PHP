<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP 1</title>
</head>
<body>


<?php
    session_start();
    if(!isset($_SESSION['participants'])){
        $_SESSION["participants"] = [];
    }
    ?>
    <div class="container">
    <?php
    if(isset($_GET["name"]) && isset($_GET["fname"]) && isset($_GET["tel"]) && isset($_GET["email"]) && $_GET["name"] !=="" && $_GET["fname"] !=="" && $_GET["tel"] !=="" && $_GET["email"] !=="") { 
    $_SESSION["participants"][] = ["name" => $_GET["name"], "fname" => $_GET["fname"], "tel" => $_GET["tel"], "email" => $_GET["email"]]; 
    echo '<h1> Renginyje užsiregistravo: ' . $_GET["name"] . " " . $_GET["fname"] . '</h1>';}
    
    
?>

  

    <form class="ivestis" action="" method="get">
    <input type="text" id="name" name="name" placeholder="Vardas">
    <input type="text" id="fname" name="fname" placeholder="Pavardė">
    <input type="tel" id="tel" name="tel" placeholder="Tel.">
    <input type="email" id="email" name="email" placeholder="Email">
    <button type="submit">Įtraukti</button>
  </form>


<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">Vardas</th>
      <th scope="col">Pavardė</th>
      <th scope="col">Tel. Numeris</th>
      <th scope="col">El. Paštas</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($_SESSION['participants'] as $dalyviai) {?>
    <tr>
      <td><?=$dalyviai["name"]?></td>
      <td><?=$dalyviai["fname"]?></td>
      <td><?=$dalyviai["tel"]?></td>
      <td><?=$dalyviai["email"]?></td>
    </tr>
 <?php } ?>
  </tbody>
</table> 
</div>



</body>
</html>