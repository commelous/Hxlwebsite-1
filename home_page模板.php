<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>模板</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/12.0.0/lazyload.min.js"></script>
<style type="text/css">
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
    .awesome-portfolio-area.fix.white-theme{
      background-color: #ffffff;
      color: #000000;
    }
    .awesome-portfolio-area.fix.dark-theme{
      background-color: #666666;
      color: #ffffff;
    }
  .awesome-portfolio-area {
    /* background: #f7f5f6 none repeat scroll 0 0; */
  overflow: hidden;
  padding-top: 50px;
  font-family: 'Architects Daughter', cursive;
  
}
.section-heading{text-align:center}
.section-heading h2 {
  
  font-size: 70px;
  line-height: 45px;
  margin-bottom: 20px;
}

.single-awesome-portfolio {
  width: 20%;
  float: left;
  overflow:hidden;
  
                  
}
.single-awesome-portfolio:hover{
  box-shadow: 10px 0 10px rgba(200, 0, 0, 1.0),
                         0 10px 10px rgba(200, 0, 0, 1.0),
                         -10px 0 10px rgba(200, 0, 0, 1.0),
                         0 -10px 10px rgba(200, 0, 0, 1.0);

}
.single-awesome-portfolio a {
  position: relative;
  display: block;
}
.awesome-img {
  overflow: hidden;
  position: relative;
  transition: transform 0.6s cubic-bezier(0.19, 1, 0.22, 1) 0s;
  /* z-index: 2; */
  display: block;
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  margin:10px;
 
}

.awesome-info {
  background-color:white ;
  height: 100%;
  position: absolute;
  top: 0;
  width: 100%;
  opacity:1;
  display:block;
  overflow: hidden;
  border-radius: 10px;
  transform: scale(1); 
  
}
.awesome-info:hover{
  height: 100%;
  width:100%;
  transform: scale(1.3); 
}

.awesome-info h3 {
  color: #fff;
  font-size: 16px;
  margin-bottom: 3px;
  
}
.awesome-info p {
  color: #aaa;
  font-size: 12px;
}
.single-awesome-portfolio a:hover .awesome-img {transform: translateY(100%);}
.awesome-portfolio-menu {
  margin-bottom: 40px;
  margin-top: 20px;
}
.awesome-portfolio-menu ul{text-align:center}
.awesome-portfolio-menu ul li {
  border: 1px solid #ececec;
  color: #888888;
  cursor: pointer;
  display: inline-block;
  font-size: 12px;
  font-weight: 300;
  margin: 0 4px;
  padding: 8px 17px;
  transition: all 0.3s ease 0s;
  background: #fff;
}
.awesome-portfolio-menu ul li.active,.awesome-portfolio-menu ul li:hover{border-color: #2bcdc1;
color: #2bcdc1;}
.awesome-portfolio-content .mix{
    display: none;
}
img {max-width:100%;height:auto}

.category_a {
  color: black;
  text-decoration: none; 
}

.category_a:hover {
  text-decoration: none; 
}


</style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">

<div class="awesome-portfolio-area fix">

<div class="container">

<div class="row">
<div class="col-md-12">
<div class="section-heading">
<h2>線上藝廊 </h2>
<p>
這裡是線上藝廊，裡面有著許多不同的照片和圖片<br>
點擊圖片可以查看詳細資訊
</p>
</div>
</div>
</div>

</div>




<div class="container awesome-portfolio">
<div class="awesome-portfolio-menu">
  
<ul>
<?php
  echo"<li class='filter ' data-filter='all'><a href='?menu2=all' class='category_a'>全部圖片</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.design'><a href='?menu2=animal' class='category_a'>動物圖片</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.flat'><a href='?menu2=view' class='category_a'>風景照</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.illustration'><a href='?menu2=portrait' class='category_a'>人物寫真</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.illustration'><a href='?menu2=macro' class='category_a'>微距攝影</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.branding'><a href='?menu2=cartoon' class='category_a'>動漫</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.branding'><a href='?menu2=illustration' class='category_a'>插圖</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.branding'><a href='?menu2=dynamic' class='category_a'>動圖</a></li>";
?>
<?php
 echo"<li class='filter' data-filter='.branding'><a href='?menu2=else1' class='category_a'>其他</a></li>";
?>
</ul>

</div>

<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
   $link=mysqli_connect('localhost','root');
   mysqli_select_db($link,'hxl_website');


$menu_item2 = isset($_GET['menu2']) ? $_GET['menu2'] : 'home';

if(!isset($_GET['menu2'])){
  $sql = "select * from website_picture";
  $result = mysqli_query($link , $sql);
  $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture";
  $result2 = mysqli_query($link , $sql2);
  $row_count = mysqli_fetch_assoc($result2)['row_count'];
}
else{
  switch($menu_item2){
  case 'all':
      $sql = "select * from website_picture";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  case 'animal':
      $sql = "select * from website_picture where pic_category = '動物攝影'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '動物攝影'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  case 'view':
      $sql = "select * from website_picture where pic_category = '風景攝影'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '風景攝影'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  case 'portrait':
      $sql = "select * from website_picture where pic_category = '人物攝影'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '人物攝影'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  case 'macro':
      $sql = "select * from website_picture where pic_category = '微距攝影'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '微距攝影'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  case 'cartoon':
      $sql = "select * from website_picture where pic_category = '動漫圖片'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '動漫圖片'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  case 'illustration':
      $sql = "select * from website_picture where pic_category = '插畫'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '插畫'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
      case 'dynamic':
        $sql = "select * from website_picture where pic_category = '動圖'";
        $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '動圖'";
        $result = mysqli_query($link , $sql);
        $result2 = mysqli_query($link , $sql2);
        $row_count = mysqli_fetch_assoc($result2)['row_count'];
        break;
  case 'else1':
      $sql = "select * from website_picture where pic_category = '其他'";
      $sql2 ="SELECT COUNT(*) AS row_count FROM website_picture WHERE pic_category = '其他'";
      $result = mysqli_query($link , $sql);
      $result2 = mysqli_query($link , $sql2);
      $row_count = mysqli_fetch_assoc($result2)['row_count'];
      break;
  }
}  

echo"<div class='awesome-portfolio-content' id='MixItUp68DC04'>";
echo"<center><h2>",$row_count,"個結果</h2><center><hr><br>";
$number = 10000000001;
    while($row = mysqli_fetch_assoc($result)){
    
    $pic_id = $row['pic_id'];
    
    $R = rand(0,7);
    $P = '0';
    if($R == 0){
      $P = "https://www.bootdey.com/image/400x300/";
    }
    elseif($R == 1){
      $P = "https://www.bootdey.com/image/400x300/FF0000/000000";
    }
    elseif($R == 2){
      $P = "https://www.bootdey.com/image/400x300/1E90FF/000000";
    }
    elseif($R == 3){
      $P = "https://www.bootdey.com/image/400x300/FF8C00/000000";
    }
    elseif($R == 4){
      $P = "https://www.bootdey.com/image/400x300/9932CC/000000";
    }
    elseif($R == 5){
      $P = "https://www.bootdey.com/image/400x300/6495ED/000000";
    }
    elseif($R == 6){
      $P = "https://www.bootdey.com/image/400x300/FF69B4/000000";
    }
    else{
      $P = "https://www.bootdey.com/image/400x300/7B68EE/000000";
    }

    
    $pic_filename = $row['pic_filename'];
    echo"
    <div class='single-awesome-portfolio mix all flat illustration' style='display: inline-block;'>
    <a href='image_detail_page.php?pic_id=$pic_id&&number=$number' onclick='showImage('picture/<?php echo ",$row['pic_filename'],"; ?>')'>
    <div class='awesome-img'><img src='",$P,"'  alt></div>
    <div class='awesome-info'>";
    echo "<img src='picture/", $pic_filename ,"' class='img-responsive' class='lazy' style='object-fit: cover; height: 100%; width: 100%; position: absolute; top: 50%; transform: translateY(-50%);' alt='image'>";
    
    $number = $number + 1;
    echo"</div>
    </a>
    </div>
    ";
  }
?>
<!-- <img class='lazy' data-src='data:image;base64," . base64_encode($row['pic_img']) . "' width='100%' height='auto' alt='image'> -->
</div>
<!-- <input type='hidden' value='",$row['pic_img'],"' name='pic_img' ><form action='image_detail_page.php' method='post'></form> -->
</div>
</div>

</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script type="text/javascript">

  // 在 jQuery 代碼中
  $(document).ready(function(){
    var lazyLoadInstance = new LazyLoad();
  });



 

</script>

</body>
</html>