<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>音樂播放器</title>
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
    audio {
      width: 100%;
      margin-bottom: 10px;
      background: linear-gradient(to right, #FF9797, #ACD6FF); /* 設置背景顏色 */
      border: 5px solid black; /* 添加邊框 */
      padding: 10px; /* 內邊距 */
      border-radius: 5px; /* 圓角邊框 */
      /* 其他自訂樣式 */
    }
    .music-list{
        width:100%;
        height:50px;
        position:relative;
        top:auto;
        display: flex;
        align-items: center; /* 預防垂直方向上的不對齊 */
        margin-bottom: 0px; /* 如果需要增加間距，可以調整此處 */

    }
    .music-list-left{
        position:relative;
        left:0%;
        width:60%;
        height:100%;
        
    }
    .music-list-right{
        position:relative;
        width:40%;
        height:100%;
        right:0%;
        
        
    }
    .music-list-right h2{
        position:relative;
        
        left:6cm;
        
        
    }

</style>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<center><h1>音樂清單</h1></center><br>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
    $link=mysqli_connect('localhost','root');
    mysqli_select_db($link,'hxl_website');

    $sql = "select * from music";
    $result = mysqli_query($link , $sql);
    while($row = mysqli_fetch_assoc($result)){
    echo "<div class='music-list'>
           <div class='music-list-left'>
           <audio controls>
             <source src='music/", $row['music_file'], "' type='audio/mp3'>
             Your browser does not support the audio tag.
           </audio>
           </div>
           <div class='music-list-right'><h2>", $row['music_name'], "</h2></div>
          </div><hr>";
    }
?>
</body>
</html>
