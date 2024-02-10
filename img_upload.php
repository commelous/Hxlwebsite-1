<!DOCTYPE html>
<head>

</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$user_id = $_POST['user_id'];
$user_account = $_POST['user_account'];
$pic_name = $_POST['img_name'];
$pic_content = $_POST['img_content'];
$pic_date = $_POST['img_date'];
$pic_location = $_POST['img_location'];
$pic_category = $_POST['img_category'];

require 'website_db_setting.php';

if (isset($_POST["submit"])) {
    if ($_FILES["pic_file"]["error"] == 4) {
        echo "
            <script>
                alert('Image Does Not Exist');
                document.location.href = 'index_side_bar.php?menu=upload';
            </script>";
    } else {
        $fileName = $_FILES["pic_file"]["name"];
        $fileSize = $_FILES["pic_file"]["size"];
        $tmpName = $_FILES["pic_file"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png','gif'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "
                <script>
                    alert('Invalid Image Extension');
                    document.location.href = 'index_side_bar.php?menu=upload';
                </script>";
        } else if ($fileSize > 1000000000) {
            echo "
                <script>
                    alert('Image Size Is Too Large');
                    document.location.href = 'index_side_bar.php?menu=upload';
                </script>";
        } else {
            $uploadDirectory = 'uploads/';
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, $uploadDirectory . $newImageName);
            
            $imgPath = $uploadDirectory . $newImageName;

            // 使用预处理语句防止 SQL 注入
            $insertQuery = "INSERT INTO website_picture(pic_date, pic_name, pic_content, pic_location, user_id, pic_category, pic_filename) 
                            VALUES(?, ?, ?, ?, ?, ?, ?)";
            $stmt = $connect->prepare($insertQuery);
            $stmt->bind_param("ssssiss", $pic_date, $pic_name, $pic_content, $pic_location, $user_id, $pic_category, $fileName );
            $stmt->execute();
           
            if ($stmt->affected_rows > 0) {
                echo "
                    <script>
                        alert('Successfully Added');
                        window.location.href = 'index_side_bar.php?menu=gallery';
                    </script>";
            } else {
                echo "
                    <script>
                        alert('Error adding record to the database');
                        window.location.href = 'index_side_bar.php?menu=upload';
                    </script>";
            }
            $stmt->close();
        }
    }
}
?>
</body>
