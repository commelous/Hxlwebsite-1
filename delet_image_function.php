<!DOCTYPE html>
<head>

</head>
<body>
<?php


error_reporting(E_ALL);
ini_set('display_errors', 'On');

            $pic_id = $_GET['pic_id'];
            echo $pic_id; 
            $link = mysqli_connect('localhost', 'root');
            mysqli_select_db($link, 'hxl_website');


            $sql_likes = "DELETE FROM website_pic_likes WHERE pic_id = $pic_id";
            $result_likes = mysqli_query($link, $sql_likes);
            if (!$result_likes) {
                // 處理刪除失敗的情況，例如顯示錯誤信息
                echo "刪除相關聯的記錄失敗";
            } else {
                // 現在，可以安全地刪除主要的website_picture表中的記錄
                $sql_picture = "DELETE FROM website_picture WHERE pic_id = $pic_id";
                $result_picture = mysqli_query($link, $sql_picture);
            
                // 檢查是否成功刪除
                if ($result_picture) {
                    // 刪除成功，導向到相應的頁面
                    header("location:index_side_bar.php?menu=gallery");
                } else {
                    // 處理刪除失敗的情況，例如顯示錯誤信息
                    echo "刪除主表記錄失敗";
                    header("location:index_side_bar.php?menu=gallery");
                }
            }
            
            // 關閉連接
            mysqli_close($link);

            


?>


</body>




