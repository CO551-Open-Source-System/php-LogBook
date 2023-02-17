<!DOCTYPE html>
<html>
    <head>
    <h2>My Exercise</h2>
    </head>
    <body>
    <?php
        // Associate the module codes with the module descriptions
        $modules = array("PRG1" => "Programming 1",
        "ISD" => "Internet Systems Development",
        "OOC" => "Object Oriented Concepts");
        echo "$modules[ISD]<br/>"; // displays Internet System Development
        echo "$modules[PRG1]<br/>";
        echo "$modules[OOC]<br/>";
    ?>
    </body>
</html>

