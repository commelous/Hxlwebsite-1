<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>上傳音樂</title>
  <style>
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Architects Daughter', cursive;
      font-size: 20px;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family: 'Architects Daughter', cursive;
      font-size: 20px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color:#000000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
  <form method="post" enctype="multipart/form-data" action="music_upload_function.php">
    <h2 style="color:#000000;">上傳音樂</h2>

    <label for="musicName" style="color:#000000;">音樂名稱：</label>
    <input type="text" id="musicName" name="music_name" style="width:100%;color:#000000;" required>
    <?php echo"<input type='hidden' name='user_id' value='",$_SESSION['user_id'],"'>"; ?>
    <?php echo"<input type='hidden' name='user_account' value='",$_SESSION['user_account'],"'>"; ?>


    <label for="musicFile" style="color:#000000;">選擇音樂檔案：</label>
    <input type="file" id="musicFile" name="music_file" accept=".mp3" required>
    <br><br>
    <button type="submit" name="submit">上傳音樂</button>
  </form>
</body>
</html>
