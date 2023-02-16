<!DOCTYPE html>
<html>
    <head>
        <h2>My Exercise</h2>
    </head>
    <body>
        <?php
           $grade=$_POST['grade'];
           //$grade=$_POST['switch'];          
            switch ($grade) {
                case $grade >=65; echo 'Grade: Distinction';break;
                case $grade >=60; echo 'Grade: Merit';break;
                case $grade >=40; echo 'Grade: Pass';break;
                default:echo 'Grade: Failed';
            }      
        ?>
    </body>
</html>