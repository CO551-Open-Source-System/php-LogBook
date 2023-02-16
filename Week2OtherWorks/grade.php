<!DOCTYPE html>
<html>
    <head>
        <h2>My Exercise</h2>
    </head>
    <body>
        <?php
            $grade=$_POST['grade'];        
                
            if($grade >=70){
            echo 'Grade: Distinction';
            }elseif($grade >=60){
            echo 'Grade: Merit';
            }elseif($grade >=40){
            echo 'Pass';
            }else {echo 'Grade: Failed';}
        ?>
    </body>
</html>
