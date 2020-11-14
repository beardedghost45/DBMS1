<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
.container{
    max-width : 80%;
    background : skyblue;
    margin : auto;
    padding :23px;
    
}

</style>
<body>
    <div class="container">
    <h1>Learning PHP</h1>
    <p>You party status is her</p>
   
    <?php

    $age=70;
    if($age>18)
    echo "Yes go to party old mam";
    echo "<br>";
echo "star is sankalp";

$arr = array(4,5,6,8);
$i=0;

while ($i <count($arr))
{
    echo "<br>The valeue is: ";
    echo $arr[$i];
    $i++;
}


?> 
  
    </div>
</body>
</html>