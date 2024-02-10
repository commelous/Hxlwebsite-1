<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guess the Number</title>
  <style>
   
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
      
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      
    }
    .input-col{
        color:#000000;
        width:300px;
        height:70px;
        font-size: xx-large;
    }
    .submit-btn{
        width:150px;
        height:70px;
        font-size: xx-large;
    }
    p{
        font-size: xx-large;
    }
    .div-a{
        text-align: center;
        
    }
  </style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<div class="div-a">
  <h1>猜數字遊戲</h1>
  <p>1到10之間猜一個數字:</p>
  <input type="text" id="userGuess" placeholder="輸入數字"  class="input-col"><br><br>
  <button onclick="checkGuess()" style="color:#000000;" class="submit-btn">提交答案</button>
  <p id="result"></p>
</div>
  <script>
    function checkGuess() {
      var userGuess = document.getElementById('userGuess').value;
      var randomNumber = <?php echo rand(1, 10); ?>;

      if (userGuess == randomNumber) {
        document.getElementById('result').innerHTML = '恭喜！你答對了';
      } else {
        document.getElementById('result').innerHTML = '錯了，正確的數字為 ' + randomNumber + '.';
      }
    }
  </script>
</body>
</html>
