<!DOCTYPE html>
<html>
<head>    
</head>
<body>
<?php
 class Person{
    
    var $name;

    function set_name($new_name){
        $this->name = $new_name;
    }

    function get_name(){
        return $this->name;
    }
 }
?>
</body>
</html>