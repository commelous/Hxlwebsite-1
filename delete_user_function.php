<!DOCTYPE html>
<head>

</head>
<body>
<?php
            session_start();
            $user_id = $_POST['user_id'];

            $link = mysqli_connect('localhost', 'root');
            mysqli_select_db($link, 'website_user');
    
            
            $sql = "DELETE FROM website_user WHERE user_id = $user_id" ;
            
            $result = mysqli_query($link, $sql);
            

            header("location:index_side_bar.php?menu=user_manage");


?>


</body>




