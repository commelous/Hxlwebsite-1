<?php
require 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 检查是否有上传的文件
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // 生成一个唯一的文件名，防止文件名冲突
        $imageName = uniqid() . '_' . $_FILES['image']['name'];
        $imagePath = 'uploads/' . $imageName; // 将文件移动到 'uploads' 目录

        // 移动上传的文件到 'uploads' 目录
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

        // 创建 TesseractOCR 对象，设置图像路径，并同时设置繁体中文和简体中文语言参数
        $tesseract = new TesseractOCR($imagePath);
        $tesseract->lang('chi_tra+chi_sim'); // 同时使用繁体中文和简体中文语言数据

        // 执行 OCR，并获取结果
        $result = $tesseract->run();
    } else {
        echo "Error uploading image.";
        header("Location:index_side_bar.php?menu=ocr");
    }
}
?>

<?php
/* if (extension_loaded('imagick')) {
    echo 'Imagick extension is installed.';
} else {
    echo 'Imagick extension is NOT installed.';
} */
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCR Image Upload</title>
</head>
<style>
     body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Architects Daughter', cursive;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family: 'Architects Daughter', cursive;
    }
    h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        #ocrResult {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .ocr-result{
            max-width: 1000px;
            max-height: 1000px;
            border: 2px solid #000000; 
            box-shadow: 0 0 10px #000000; 
        }
        .result-div{
            font-size: 30px;
            color:#000000;
        }
        
</style>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<h1>圖片字元辨識</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="image">選擇圖片:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <button type="submit" style="padding: 8px 16px; background-color: #4caf50; color: #fff; border: none; cursor: pointer;">Upload and OCR</button>
    </form>

    <?php
    // 检查是否有上传的文件
    if (isset($imagePath)) {
        echo "<div class='result-div'><img id='uploadedImag' src='" . htmlspecialchars($imagePath) . "' class='ocr-result' alt='Uploaded Image'></div>";
    }
    ?>

    <div id="ocrResult">
        <?php
        // 检查是否有 OCR 结果，如果有，则显示在页面上
        if (isset($result)) {
            echo "<strong style='color:#000000'>OCR Result:</strong><br><br><div class='result-div'> " . htmlspecialchars($result)."</div>";
        }
        ?>
    </div>
</body>
</html>
