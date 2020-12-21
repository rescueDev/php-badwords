<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: purple;
            color: white;
            display:flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
    </style>
</head>
<body>
     <!--creo le variabili  -->
    <?php
$name = 'Ciao mi chiamo Salvatore';
$badword = $_GET['badword'];
$replace = str_ireplace($badword, '***', $name);
?>

<!-- BONUS condizione badword vuota con stile diverso -->
<?php 
    if($badword == '') {
        $badword = "<h2 style='background-color: red; color: black'>" . "Nessun valore inserito" . '</h2>';
      
    }
    else {
      $badword = "<h2 style='background-color: yellow; color: black'>" . "Badword: " . $badword . '</h2>';
        
    }
?>

<div>
<!-- badword output -->
<h3><?php echo $badword; ?></h3>
<!-- prima paragrafo -->
<h1>
  <?php echo $name;?> 
  <?php echo '[' . strlen($name) . ']';?>
    
</h1>
<!-- secondo paragrafo -->
<h1>
    <?php echo $replace ?>
     <?php echo "[" . strlen($replace) . "]"; ?>
</h1>

</div>

</body>
</html>