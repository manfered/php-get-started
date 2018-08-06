<?php
    if(isset($_GET['id']) && ctype_digit($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header("Location: select.php");
    }
?>
<!DOCTYPE>
<html>
    <head>
        <title>
            delete php
        </title>
    </head>
    <body>
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'phptest');
            $sql = "DELETE FROM users WHERE id=$id";
            
            mysqli_query($db, $sql);
            echo '<p>User Deleted</p>';
            mysqli_close($db);        
        ?>
    </body>
</html>