<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE</title>
</head>

 <body bgcolor= "yellow">
     <h1>My Introduction</h1>  
    <hr> 

    <p>This is my first website</p> 

    <?php
    //Data types 
    $decimal = 10.1;

    //String 
    $name = "tiger";
    $colors = "yellow, white, brown";

    //Integer
    $int = 10;

    //Boolean
    $question = true;

    //String Concatenation 
    $TigerDescription = "They have beautiful fur color like" . $colors . ".";

    //Boolean
    $Info = $question ? "They are considered endangered." :
    "They are not considered endangered."; 

    echo "<p>I'm $name King of the Jungle</p>";
    echo "<p> $int Tiger's</p>";
    echo "<p>The population of the Tiger in the World is: $decimal%</p>";
    echo "<p>$TigerDescription</p>";
    echo "<p>$Info </p>";
    var_dump ($decimal, $name, $int, $question );

    ?>

 </body>


</html>
