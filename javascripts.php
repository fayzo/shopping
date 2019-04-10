<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>javascripts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<style>
.cold{
    background-color:black
}
.muchs{
    background-color:red
}
</style>
<body>
<button type="submit" onclick='meclick()' class="btn btn-primary">click me</button>
    <ul>
       <li id="one" class="hot">fresh g</li>
       <li id="two" class="hot">pinenuts figs</li>
       <li id="three" class="hot">honey</li>
       <li id="four">balsamic vi negar</li>
   </ul>
   <?php
    $Row_viewRowID= '<script>var g = document.getElementsByTagName("ul")[0].firstChild.nodeValue; console.log(g)</script>';
    echo $Row_viewRowID;
    ?>
   <script type='text/javascript'> 

   </script>
</body>
</html>