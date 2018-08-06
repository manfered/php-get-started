<?php

        if(isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            header('Location: select.php');
        }
?>
<!DOCTYPE>
<html>
    <head>
        <title>
            php update
        </title>
    </head>
    <body>
        <p>we shpuld have a form with validation to show the users with specified id information by in this case we update the namne to farzad to demonstrate the update in mysql</p>
        
       <?php
       
            $name = 'Farzad';
            $color = '#000';
            $gender = 'm';
       
            $db = mysqli_connect('localhost', 'root', '', 'phptest');
            $sql = sprintf("UPDATE users SET name = '%s', gender = '%s', color='%s'
                     WHERE id = %s",
            mysqli_real_escape_string($db, $name),
            mysqli_real_escape_string($db, $gender),
            mysqli_real_escape_string($db, $color),
            $id
            );
            
            mysqli_query($db, $sql);
            mysqli_close($db);
            echo '<p>user updated</p>';
       ?>
    </body>
</html>