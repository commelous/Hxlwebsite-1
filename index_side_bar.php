<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); 

if (!isset($_SESSION['user_id'])  ) {           
    $_SESSION = array(); 
    
    header('Location: login_page.php');    
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>hxl_website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="picture\網站標籤.ico" />
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<style type="text/css">
   /*  @import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);
    font-family: ‘cwTeXYen’, sans-serif; */
 

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

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
       background:#5B5B5B;       
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper {
    box-shadow: inset -1px 0px 0px 0px #DDDDDD;
    
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #FCFCFC;
    font-size: 20px;
}

.sidebar-nav li a:hover {
    text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media only screen and (max-width: 700px) {
    #sidebar-wrapper {
        width: 0%;  
        left: 0;  /* 調整位置 */
        margin-left: 0;  /* 調整位置 */
        box-shadow: none;  /* 移除陰影效果 */
    }
    #sidebar-wrapper.expanded {
      width: 40%;
      left: 0;
      margin-left: 0;
      box-shadow: none;
      /* 其他樣式... */
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 50;  /* 縮小導覽列寬度 */
    }

    #page-content-wrapper {
        padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
        margin-right: 0;
    }
    
    .btn-menu {
        margin: 14px 5px 5px 10px;  /* 調整按鈕位置 */
    }

    .sidebar-nav {
        width: 100%;  /* 將側邊導覽列寬度設為100% */
    }

    .sidebar-nav li {
        text-indent: 0;  /* 移除文字縮排 */
        line-height: 30px;  /* 調整行高 */
        font-family: 'Architects Daughter', cursive;
    }

    .sidebar-nav li a {
        font-size: 16px;  /* 調整文字大小 */
    }

    .sidebar-nav > .sidebar-brand {
        height: 40px;  /* 調整品牌區塊高度 */
        line-height: 40px;  /* 調整品牌區塊行高 */
    }

    .navbar-header {
        margin-left: 10px;  /* 調整按鈕位置 */
    }
    

}
@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

#sidebar-wrapper li.active > a:after {
    border-right: 17px solid #f4f3ef;
    border-top: 17px solid transparent;
    border-bottom: 17px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    right: -1px;
    
}

.sidebar-brand {
    border-bottom: 1px solid rgba(102, 97, 91, 0.3);
}

.sidebar-brand {
    padding: 18px 0px;
    margin: 0 20px;
}

.navbar .navbar-nav > li > a p {
    display: inline-block;
    margin: 0;
}
p {
    font-size: 16px;
    line-height: 1.4em;
}

.navbar-default {
    background-color: #f4f3ef;
    border:0px;
    border-bottom: 1px solid #DDDDDD;
}

.btn-menu {
    border-radius: 3px;
    padding: 4px 12px;
    margin: 14px 5px 5px 20px;
    font-size: 14px;
    float: left;
}
    .marquee-container {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

    .marquee-content {
        display: inline-block;
        animation: marquee 10s linear infinite;
    }

    @keyframes marquee {
        0% {
        transform: translateX(100%);
        }
        100% {
        transform: translateX(-100%);
        }
    }
    .navbar-center {
    width: 1100px;
    height: 90px;
    font-size: 50px;
    
    overflow: hidden; /* 隱藏超出容器的部分 */
}

.marquee-container {
    animation: marquee 40s linear infinite;
}

.marquee-content {
    font-size: 50px;
    font-family: 'Architects Daughter', cursive;
    display: flex;
    animation: marquee 40s linear infinite;
}

.marquee-content p {
    font-size: 50px;
    font-family: 'Architects Daughter', cursive;
    margin-right: 20px; /* 可以根據需要調整間距 */
}
.marquee-content img {
    height: 80px;
    max-width: 100%; /* 圖片最大寬度為容器寬度 */
    max-height: 100%; /* 圖片最大高度為容器高度 */
    object-fit: contain; /* 圖片等比例縮放，確保完整顯示 */
}
.theme-bt{
    width:200px;
    font-size: x-large;
    
    border-radius: 5px;
    background-color: #999999;
    color:#000000;
    transform: scale(1);
}
.theme-bt:hover{
    width:200px;
    font-size: x-large;
    
    border-radius: 5px;
    background-color:#FCFCFC;
    color:#000000;
    transform: scale(1.1);
}

</style>
</head>
<body>
    <?php
       
      $name = $_SESSION['name'];
      $id = $_SESSION['user_id'];
      $password = $_SESSION['password'];
      $Email = $_SESSION['Email'];
      $phone = $_SESSION['phone'];
      $admin = $_SESSION['admin'];
      $birthday = $_SESSION['birthday'];

    ?>

<div id="wrapper" class="wrapper-content">
<div id="sidebar-wrapper">

<ul class="sidebar-nav">
<li class="sidebar-brand">

</li>
<?php
$active = "class='active'";
echo"<li ",$active,">";

echo"<a href='?menu=gallery'>","圖片展示","</a>";
?>
</li>
<li>
<?php
$active = "class='active'";
echo"<li ",$active,">";

echo"<a href='?menu=video'>","影片","</a>";
?>
</li>
<li>
<?php
$active = "class='active'";
echo"<li ",$active,">";

echo"<a href='?menu=web-teach'>","網頁設計教學","</a>";
?>
</li>
<li>
<?php
$active = "class='active'";
echo"<li ",$active,">";

echo"<a href='?menu=num-game'>","猜數字","</a>";
?>
</li>
<li>
<?php
$active = "class='active'";
echo"<li ",$active,">";

echo"<a href='?menu=music'>","音樂","</a>";
?>
</li>
<li>
<?php

echo"<li ",$active,">";

echo"<a href='?menu=ceacer-cipher'>","密碼產生器","</a>";
?>
</li>
<?php

echo"<li ",$active,">";

echo"<a href='?menu=profile'>","帳戶資訊","</a>";
?>
</li>
<?php

echo"<li ",$active,">";

echo"<a href='?menu=ocr'>","字元辨識","</a>";
?>
</li>
<li>
<?php

echo"<li ",$active,">";

echo"<a href='?menu=canvas'>","繪圖板","</a>";
?>
</li>
<?php
echo"<hr><li ",$active,">";

   if(isset($_SESSION['user_id'])){
   echo"<a href='?menu=upload'>上傳圖片</a>";
   }
   else{
    echo"";
   }
?>
<?php
echo"<li ",$active,">";

   if(isset($_SESSION['user_id']) && $_SESSION['admin'] == 1){
   echo"<a href='?menu=upload-music'>上傳音樂</a>";
   }
   else{
    echo"";
   }
?>
</li>
</li>
<?php
echo"<li ",$active,">";

   if(isset($_SESSION['user_id']) && $_SESSION['admin'] == 1){
   echo"<a href='?menu=user_manage'>管理用戶</a>";
   }
   else{
    echo"";
   }
?>
</li>

<li>
<?php
if(!isset($_GET['menu'])){
   echo"<button id='themeSwitchBtn' class='theme-bt'>切換主題</button>";
}
elseif($_GET['menu'] == 'gallery'){
    echo"<button id='themeSwitchBtn' class='theme-bt'>切換主題</button>";
}
else{
    echo"";
}
?>
</li>
</ul>
</div>
<div id="page-content-wrapper">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button class="btn-menu btn btn-success btn-toggle-menu" type="button" >
<i class="fa fa-bars"></i>
</button>
</div>
<div class="collapse navbar-collapse">
    
<ul class="nav navbar-nav navbar-right">
<li class="navbar-center">
    <div class="marquee-container">
        <div class="marquee-content">
            <img src="picture\0f314738-1891-8896-4a73-c2a06cb07cb0.png"  >
            <img src="picture\59689446(.png"  >
            <img src="picture\oEAAceIYcXExntjA9b1CLiATgCDUABAIclkJEf~noop-2.png"  >
            <img src="picture\yasna09665789-2.png"  >
            <img src="picture\756f7d008e024a788f0bc4c2e19d58be.png"  >
            <img src="picture\osA3bbeffQGLeLSLAfwAQds7dQYgmAEIcRAYHL~noop-2.png"  >
            <img src="picture\f043cb45d29848a2ca461edeaeff7f92_960w.png"  >
            <img src="picture\yhgyhi16565.png"  >
        </div>
    </div>
</li>
<li>
<?php
echo"<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
  <i class='ti-panel'></i>
  <h3>",$name,"</h3>
  </a>";
?>
</li>

<li>
<?php
echo"<a href='logout_function.php' >
  <i class='ti-settings'></i>
  <h3>登出</h3>
  </a>";
?>
</li>

</ul>

</div>
</div>
</nav>
<div class="container-fluid">
<div class="row">
    <!-- 內容 -->
<div class="col-lg-12">
                    <?php
                        
                        $menu_item = isset($_GET['menu']) ? $_GET['menu'] : 'home';
                        if(!isset($_GET['menu'])){
                            include 'home_page模板.php';
                        }else{
                        switch($menu_item){
                            case 'gallery':
                                include 'home_page模板.php';
                                break;
                            case 'video':
                                include 'video_play模板.php';
                                break;
                            case 'web-teach':
                                include 'web_teach_模板.php';
                                break;
                            case 'num-game':
                                include 'Guess_num_game模板.php';
                                break;
                            case 'ceacer-cipher':
                                include 'ceaser_cipher模板.php';
                                break;
                            case 'profile':
                                include 'user_profile_page.php';
                                break;
                            case 'canvas':
                                include 'canvas模板.php';
                                break;
                            case 'upload':
                                include 'picture_upload模板.php';
                                break;
                            case 'user_manage':
                                include 'website_user_manage_page.php';
                                break;
                            case 'music':
                                include 'music_play模板.php';
                                break;
                            case 'upload-music':
                                include 'music_upload模板.php';
                                break;
                            case 'ocr':
                                include 'ocr模板.php';
                                break;
                            }
                        }
                        
                    ?>

</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
	
    $(document).ready(function() {
    $(".btn-menu").click(function() {
      $("#sidebar-wrapper").toggleClass("expanded");
    });
    });


$(function(){
    $(".btn-toggle-menu").click(function() {
        $("#wrapper").toggleClass("toggled");
    });
})


     var bootstrapButton = $.fn.button.noConflict(); // 釋放 Bootstrap Button 的控制權
       $.fn.bootstrapBtn = bootstrapButton; // 賦予一個新名稱





        // 在 jQuery 代碼中
$(document).ready(function(){
  var lazyLoadInstance = new LazyLoad();

  // 获取按钮元素
  var themeSwitchBtn = document.getElementById("themeSwitchBtn");

  // 切换主题的函数
  function switchTheme() {
    // 获取当前主题状态
    var currentTheme = document.body.classList.contains("white-theme") ? "white-theme" : "dark-theme";

    // 切换主题
    if (currentTheme === "white-theme") {
      document.body.classList.remove("white-theme");
      document.body.classList.add("dark-theme");
    } else {
      document.body.classList.remove("dark-theme");
      document.body.classList.add("white-theme");
    }

    // 将当前主题状态存储到 Cookie 中，有效期为 30 天
    document.cookie = "theme=" + (currentTheme === "white-theme" ? "dark-theme" : "white-theme") + "; path=/; max-age=" + (30 * 24 * 60 * 60);
  }

  // 监听按钮点击事件
  themeSwitchBtn.addEventListener("click", function() {
    // 调用切换主题的函数
    switchTheme();
  });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>


 
 