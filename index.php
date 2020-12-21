<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Bad Word</title>
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
$replace = str_ireplace($_GET['badword'], '***', $name);
?>

<div>
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