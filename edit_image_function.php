<!DOCTYPE html>
<head>

</head>
<body>
<?php
   session_start();

   $connect = require_once "website_db_setting.php";

   $pic_id = $_POST['pic_id'];
   $pic_filename = $_POST['pic_filename'];
   $pic_name = $_POST['pic_name'];
   $pic_content = $_POST['pic_content'];
   $pic_date = $_POST['pic_date'];
   $pic_location = $_POST['pic_location'];
   $pic_category = $_POST['pic_category'];
  
   $sql = "UPDATE website_picture SET 
   pic_filename = '$pic_filename', 
   pic_name = '$pic_name', 
   pic_content = '$pic_content', 
   pic_date = '$pic_date',
   pic_location = '$pic_location',
   pic_category = '$pic_category'
   WHERE pic_id = $pic_id";
   

   $result = mysqli_query($connect, $sql);
  

    if(!$connect){
        echo "ERROR: Could not connect. " . mysqli_connect_error();
    }
    else{
        if(mysqli_query($connect, $sql)){
            echo "<center><h1>修改成功</h1></center>";
        }
        else{
            echo "<center><h1>修改失敗</h1></center><br>";
        }
    } 
    mysqli_close($connect);

    header("refresh: 0.5; url=index_side_bar.php?menu=gallery");
?>
</body>
