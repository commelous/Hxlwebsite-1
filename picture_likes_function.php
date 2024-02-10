<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$link = mysqli_connect('localhost', 'root');
mysqli_select_db($link, 'hxl_website');

$userId = $_POST['userId'];
$picId = $_POST['picId'];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])) {
    if ($_POST["action"] === "like") {
        // 在 website_pic_likes 表中檢查是否已經存在相同的點讚紀錄
        $sqlCheckLike = "SELECT COUNT(*) AS likeExists FROM website_pic_likes WHERE user_id = '$userId' AND pic_id = '$picId'";
        $resultCheckLike = mysqli_query($link, $sqlCheckLike);

        if (!$resultCheckLike) {
            // 輸出 SQL 錯誤信息
            echo json_encode(["error" => "SQL 錯誤: " . mysqli_error($link)]);
            exit;
        }

        $rowCheckLike = mysqli_fetch_assoc($resultCheckLike);
        $likeExists = $rowCheckLike['likeExists'];

        if ($likeExists > 0) {
            // 如果已經存在相同的點讚紀錄，刪除該紀錄
            $sqlDeleteLike = "DELETE FROM website_pic_likes WHERE user_id = '$userId' AND pic_id = '$picId'";
            $resultDeleteLike = mysqli_query($link, $sqlDeleteLike);

            if (!$resultDeleteLike) {
                // 輸出 SQL 錯誤信息
                echo json_encode(["error" => "SQL 錯誤: " . mysqli_error($link)]);
                exit;
            }
        } else {
            // 如果不存在相同的點讚紀錄，插入新的點讚紀錄
            $sqlInsertLike = "INSERT INTO website_pic_likes (user_id, pic_id) VALUES ('$userId', '$picId')";
            $resultInsertLike = mysqli_query($link, $sqlInsertLike);

            if (!$resultInsertLike) {
                // 輸出 SQL 錯誤信息
                echo json_encode(["error" => "SQL 錯誤: " . mysqli_error($link)]);
                exit;
            }
        }
    } elseif ($_POST["action"] === "unlike") {
        // 在 website_pic_likes 表中刪除點讚紀錄
        $sqlDeleteLike = "DELETE FROM website_pic_likes WHERE user_id = '$userId' AND pic_id = '$picId'";
        $resultDeleteLike = mysqli_query($link, $sqlDeleteLike);

        if (!$resultDeleteLike) {
            // 輸出 SQL 錯誤信息
            echo json_encode(["error" => "SQL 錯誤: " . mysqli_error($link)]);
            exit;
        }
    }

    // 獲取點讚總數
    $sqlLikesCount = "SELECT COUNT(*) AS likesCount FROM website_pic_likes WHERE pic_id = '$picId'";
    $resultLikesCount = mysqli_query($link, $sqlLikesCount);

    if (!$resultLikesCount) {
        // 輸出 SQL 錯誤信息
        echo json_encode(["error" => "SQL 錯誤: " . mysqli_error($link)]);
        exit;
    }

    $rowLikesCount = mysqli_fetch_assoc($resultLikesCount);
    $likesCount = $rowLikesCount['likesCount'];

    // 輸出 JSON 數據
    header('Content-Type: application/json');
     echo json_encode(["likesCount" => $likesCount, "userLiked" => ($_POST["action"] === "like")]);
}
?>
