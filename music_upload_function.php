<!DOCTYPE html>
<head>

</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$user_id = $_POST['user_id'];
$user_account = $_POST['user_account'];
$music_name = $_POST['music_name'];

require 'website_db_setting.php';
echo"010";
if (isset($_POST["submit"])) {
    if ($_FILES["music_file"]["error"] == 4) {
        echo "
            <script>
                alert('Image Does Not Exist');
                document.location.href = 'index_side_bar.php?menu=upload';
            </script>";
    } else {
        $fileName = $_FILES["music_file"]["name"];
        $fileSize = $_FILES["music_file"]["size"];
        $tmpName = $_FILES["music_file"]["tmp_name"];
        echo"4";
        $validAudioTypes = ['mp3'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        echo"0";
        if (!in_array($imageExtension, $validAudioTypes)) {
            echo "
                <script>
                    alert('Invalid Image Extension');
                    document.location.href = 'index_side_bar.php?menu=music_upload';
                </script>";
        } else if ($fileSize > 1000000000) {
            echo "
                <script>
                    alert('Image Size Is Too Large');
                    document.location.href = 'index_side_bar.php?menu=music_upload';
                </script>";
        } else {
            $uploadDirectory = 'uploads/';
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }
            echo"5";
            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, $uploadDirectory . $newImageName);
            echo"6";
            $imgPath = $uploadDirectory . $newImageName;
            echo"7";
            // 使用预处理语句防止 SQL 注入
            $insertQuery = "INSERT INTO music(music_name,  user_id, music_file) 
                            VALUES(?, ?, ?)";
            $stmt = $connect->prepare($insertQuery);
            $stmt->bind_param("sss", $music_name, $user_id, $fileName);
            $stmt->execute();
            echo"1";
            if ($stmt->affected_rows > 0) {
                echo "
                    <script>
                        alert('Successfully Added');
                        window.location.href = 'index_side_bar.php?menu=music';
                    </script>";
            } else {
                echo "
                    <script>
                        alert('Error adding record to the database');
                        window.location.href = 'index_side_bar.php?menu=music_upload';
                    </script>";
            }
            $stmt->close();
        }
    }
}
else{
    echo"錯誤";
}
?>
</body>
