<!DOCTYPE html>
<head>
    <title>密碼產生器</title>

    <style>
      body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Architects Daughter', cursive;
      height:auto;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family: 'Architects Daughter', cursive;
      height:auto;
    }  
    .div-1 {
    width: 80%;
    height: auto;
    background-color: whitesmoke;
    position: relative;
    justify-content: center;
    align-items: center;
}


.div-1 h1 {
    position: relative;
    justify-content: center;
    color: #333;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 2em;
    border-bottom: 2px solid #333;
    padding: 10px 0;
    margin: 20;
}

   .div-2{
    width:100%;
    
    font-size: 30px;
    transform: scale(1);
    font-family: 'Architects Daughter', cursive;
   }
   
   .div-2:hover{
    width:100%;
    
    transform: scale(1.01);
   }
   .div-2-p{
    font-size: x-large;
    font-family: 'Architects Daughter', cursive;
    text-indent: 2em;
    text-align: left;
   }
   
   .cipher-input{
    width:600px;
   }
   .cipher-submit{
    margin: 20px;
    transform: scale(1);
    background-color: white;
    color:black;
    border:none;
    border-radius: 5px;
   }
   .cipher-submit:hover{
    margin: 20px;
    transform: scale(1.2);
    background-color: black;
    color:white;
   }
   .div-3{
    width:100%;
    height:auto;
    background-color: whitesmoke;
    font-size: 30px;
    transform: scale(1);
    font-family: 'Architects Daughter', cursive;
    margin-top:20px;
    color:#000000;
   }
</style>
</head>

<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">

<?php
    echo "<div class='div-1" . (isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme') . "'>";
?>

    <h1>Ceaser cipher產生器</h1>
    <?php
     echo"<div class='div-2'>";
    ?>
    <?php
     echo"<p style='font-size:x-large' class='div-2-p". (isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme') ."'>
     &nbsp;&nbsp;&nbsp;&nbsp;凱薩密碼是一種古老的替換式加密方法，得名於古羅馬的軍事領袖凱薩（Julius Caesar）。這種加密方式是一種位移加密，即將明文中的每個字母按照一定的位移量進行替換，從而生成密文。
     </p>";
     ?>
     <?php
     echo"<p style='font-size:x-large' class='div-2-p". (isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme') ."'>
     &nbsp;&nbsp;&nbsp;&nbsp;具體來說，對於凱薩密碼，使用者需要選擇一個固定的位移數量（通常被稱為密鑰），然後將明文中的每個字母向右（或向左）按照這個位移數量進行替換。例如，如果位移數為3，則明文中的每個字母都向右移動3個位置。
     </p>";
     ?>
      <?php
     echo"<p style='font-size:x-large' class='div-2-p". (isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme') ."'>
     &nbsp;&nbsp;&nbsp;&nbsp;凱薩密碼的加密方法簡單易行，但安全性較低，容易受到頻率分析等攻擊。在現代，凱薩密碼主要被當作一種教學工具，而非實際的安全加密方法。
     </p>";
     ?>

<center>
       <form action="index_side_bar.php?menu=ceacer-cipher" method="post" id="ceaser_form">
          <label style="font-size:xx-large">明文：</label><br>
          <input type="text" name="plaintext" placeholder="請輸入明文" class="cipher-input" style="color:#000000;" required><br>
          <button type="submit" name="submit" class="cipher-submit">產生密碼</button>
        </form>
    </div>
    <div class="div-3" >
    <?php
         
    $plaintext = isset($_POST['plaintext']) ? $_POST['plaintext'] : '';
    $transform = rand(-26, 26);
    
    if ($plaintext === null || $plaintext === '') {
        echo "";
    } else {
        while ($transform === null) {
            $transform = rand(-26, 26);
        }
        
        echo "移動距離: $transform";
        echo "<br>";
        
        $result = '';
        $length = strlen($plaintext);
        
        for ($i = 0; $i < $length; $i++) {
            $char = $plaintext[$i];
            if (ctype_alpha($char)) {
                $asciiStart = ctype_upper($char) ? ord('A') : ord('a');   
                $result .= chr((ord($char) - $asciiStart + $transform + 26) % 26 + $asciiStart);
            } else {
                $result .= $char;
            }
        }
        
        echo "明文：$plaintext <br>";
        echo "加密後: $result";
    }
?>

    
<?php
if($plaintext === null || $plaintext === ''){
    echo"";
}
else{
  echo "<center><form action='index_side_bar.php?menu=ceacer-cipher' method='post'>
  <input type='reset' value='刷新' onclick='resetVariables()'><br>
  </form></center>";
}
?>
</center>
<br>
   </div>
</div>

</body>
<script>
    function resetVariables() {
        location.reload(); // 重新載入整個頁面
    }

</script>