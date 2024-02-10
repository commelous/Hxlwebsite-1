<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
 body.white-theme {
      background-color: #ffffff;
      color: #000000;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
    }
    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }
    .div-large{
        width:100%;
        height:auto;
        font-size: 30px;
        
    }
</style>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">

        <nav>
        <?php
          echo"<a href='index_side_bar.php?menu=web-teach&&language=html' class='nav-link'>HTML</a>";
        ?>
          <?php
          echo"<a href='index_side_bar.php?menu=web-teach&&language=css' class='nav-link'>CSS</a>";
        ?>
          <?php
          echo"<a href='index_side_bar.php?menu=web-teach&&language=javascript' class='nav-link'>javascript</a>";
        ?>
         <?php
          echo"<a href='index_side_bar.php?menu=web-teach&&language=php' class='nav-link'>PHP</a>";
        ?>
        </nav>
<div class="div-large">
     <?php
         $language_item = isset($_GET['language']) ? $_GET['language'] : 'html';
         if(!isset($_GET['language'])){
             include 'web_teach_html模板.php';
         }else{
         switch($language_item){
             case 'html':
                 include 'web_teach_html模板.php';
                 break;
             case 'css':
                 include 'web_teach_css模板.php';
                 break;
             case 'javascript':
                 include 'web_teach_javascript模板.php';
                 break;
             case 'php':
                 include 'web_teach_php模板.php';
                 break;
             
             }
         }
     ?>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    // 在這裡您可以添加您的 jQuery 代碼，根據需要進行操作
  });
</script>