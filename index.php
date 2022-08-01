<?php 
include('config/funtions.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>nuevosclientes</title>
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-vkoo8x4CGs03+Hhxv8T/Q5
</head>

<body>
<?php include('menu.php')?>
<div class"container"> 
    <h2 class="text-center mt-5" > nuevosclientes </h2>

<div class="row">
    <?php
    while ($clientes = mysqli_fetch_object($allclientes)){
        $input = $clientes->sessinDate;
        echo "div class='col'  >";
        echo "<div class='border border-info p-2'> ";
        echo "<h5>
        
        echo = <p> <b>fecha;</b> "<div class="date">("D", strtotime($input)) . " " . date("d.m.y h:i", strtotime($input)). "</p> ";
        echo = <div class='text-center' ><a class='btn btn-success ' href='" . ROOT . "/clientes/edit.php?id=$clientes->id' > modificar </a> - <a class=btn btn-danger `href'"
        echo " </div> ";
        echo "</div>";

    }
?>
</div>



</body>

</html>