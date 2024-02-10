<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>圖片詳細資訊</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="picture\網站標籤.ico" />
<style type="text/css">
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
    }

    body.dark-theme {
      background-color: #666666;
      color:white;
    }
    .my_btn {
    /* 共用的按鈕樣式，你可以根據需要進行修改 */
    border:non;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    color:black;
    transform: scale(1);
    }
    .my_btn:hover {
    /* 共用的按鈕樣式，你可以根據需要進行修改 */
    border:non;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    color:black;
    transform: scale(1.2);
    }

.my_btn.white-theme {
    background-color: #333333;
    color: #FFFFFF;
    transform: scale(1);
}

.my_btn.dark-theme {
    background-color: #000000;
    color: #333333;
    transform: scale(1);
}

.my_btn.white-theme:hover {
    background-color: #AAAAAA;
    color: white;
    transform: scale(1.2);
}

.my_btn.dark-theme:hover {
    background-color: white;
    color: #000000;
    transform: scale(1.2);
}




.content-item {
    padding:30px 0;
	/* background-color:#FFFFFF; */
}

.content-item.grey {
	/* background-color:#F0F0F0; */
	padding:50px 0;
	height:100%;
}

.content-item h2 {
	font-weight:700;
	font-size:35px;
	line-height:45px;
	text-transform:uppercase;
	margin:20px 0;
}

.content-item h3 {
	font-weight:400;
	font-size:20px;
	/* color:#555555; */
	margin:10px 0 15px;
	padding:0;
}

.content-headline {
	height:1px;
	text-align:center;
	margin:20px 0 70px;
}

.content-headline h2 {
	background-color:#FFFFFF;
	display:inline-block;
	margin:-20px auto 0;
	padding:0 20px;
}

.grey .content-headline h2 {
	background-color:#F0F0F0;
}

.content-headline h3 {
	font-size:14px;
	color:#AAAAAA;
	display:block;
}

/* BOXES */

.box {
	/* background-color:#FFFFFF; */
	padding:10px 20px;
	box-shadow:0 1px 2px 0 rgba(0,0,0,0.1);
	margin-bottom:20px;
}

.box h3 {
    margin:30px 0 5px;
	font-weight:bold;
}

.box ul {
	margin:0;
}

.box ul li {
	font-size:13px;
	border-bottom:1px dashed #DDDDDD;
	padding:10px 0;
	font-weight:600;
}

.box ul li:last-child {
	border-bottom:0;
}

.box ul li i {
	font-size:18px;
	margin-right:20px;
}

.box.categories ul li i {
	color:#BBBBBB;	
	position:relative;
	top:2px;
	width:20px;
}

.posts ul li a {
	font-size:14px;
	line-height:23px;
}

.posts ul li a:hover {
	color:#333333;	
}

.posts ul li div {
	font-size:13px;
	color:#999999;
	font-weight:bold;
	text-align:right;
	margin-top:5px;
}

.box.posts ul li i {
    color:#333333;
    font-size:14px;
    margin-right:10px;
}

.box.tags ul.blog-tags li {
	border:0;
}

ul.blog-tags li {
	padding:7px 0;
}

div ul.blog-tags li i,
div .box.tags ul li i {
	color:#FFFFFF;
	position:relative;
	top:1px;
	font-size:14px;
}

#gallery .row {
    margin:0;
}

#gallery .row > div {
	padding:0;
}

#gallery .overlay-wrapper:hover .overlay {
	background-color:rgba(0,0,0,0.7);
}

#gallery-item h2 {
	font-size:20px;
	margin-top:0;
}

#gallery-item img {
	background-color:#FFFFFF;
	border:3px solid #999999;
	padding:7px;
}
.title-h1{
    font-size:50px;
    font-family:DFKai-SB;
    position: relative;
    align-items: center;
}
.pic-likes{
    border:none;
    border-radius: 100px;
    background-color:darkolivegreen;
    color:#F0F0F0;
    width:200px;
    height:40px;
    margin:10px;
    transform: scale(1);
}
.pic-likes:hover{
    background-color:cadetblue;
    color:#F0F0F0;
    transform: scale(1.1);
    
}
.likes-div{
    margin:20px;
    font-size:20px;;
}
.img-download-link{
    font-size:20px;
    font-family:DFKai-SB;
    
}

</style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$number = $_GET['number'];
if (isset($_GET['pic_id'])) {
    $pic_id = $_GET['pic_id'];
} else {
    echo "未指定圖片";
}

$link=mysqli_connect('localhost','root');
mysqli_select_db($link,'hxl_website');
                
$sql = "SELECT *
FROM website_picture
LEFT JOIN website_user ON website_picture.user_id = website_user.user_id WHERE pic_id = '$pic_id';";
$result = mysqli_query($link , $sql);

$row = mysqli_fetch_assoc($result);

$pic_id = $row['pic_id'];
$pic_filename = $row['pic_filename'];
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item grey" id="gallery-item">
<div class="container">
<div class="row">
<div class="col-sm-8">
<?php
   echo "<img src='picture/" . $pic_filename . "' class='img-responsive' alt='image'>";
?>
<?php
  echo"<a href='picture/",$pic_filename,"' download='hxlwebsite",$number,"' class='img-download-link'>下載圖片</a>";
?>
<?php
  
  $sql2 = "SELECT COUNT(*) AS likeCount FROM website_pic_likes WHERE pic_id = $pic_id";
  $result2 = mysqli_query($link , $sql2);

  $row2 = mysqli_fetch_assoc($result2);
  $likeCount = $row2['likeCount'];
  $user_id = $row['user_id'];
  $sql3 = "SELECT EXISTS (SELECT 1 FROM website_pic_likes WHERE user_id = $user_id and pic_id = $pic_id) AS user_exists;";
  $result3 = mysqli_query($link , $sql3);
  $row3 = mysqli_fetch_assoc($result3);
  if($row3['user_exists'] == 0){ 
  echo"<div class='likes-div'> 
  <button type='button' id='likeButton' class='pic-likes' value='likes' data-user-id='", $row['user_account'] ,"' onclick='likeButtonClick()'>按讚</button>
  <span id='likeCount'>",$likeCount,"</span> 人喜歡這個內容
  </div>";
   }
  elseif($row3['user_exists'] == 1){
    echo"<div class='likes-div'> 
    <button type='button' id='likeButton' class='pic-likes' value='likes' data-user-id='", $row['user_account'] ,"' onclick='likeButtonClick()'>取消按讚</button>
    <span id='likeCount'>",$likeCount,"</span> 人喜歡這個內容
    </div>";
  } 

?>
</div>

<div class="col-sm-4">
<?php echo"<h1 class='title-h1'>",$row['pic_name'],"</h1>"; ?>
<div class="box">
<?php 
if($row['pic_content']){
  echo $row['pic_content']; 
}
else{
    echo"<h4>(無內文)</h4>";
}
?>
</div>
<div class="box">
<?php 
if($row['pic_location']){
  echo $row['pic_location']; 
}
else{
    echo"<h4>(未提供位置資訊)</h4>";
}
?>
</div>
<div class="box">
<ul class="list-unstyled">
<?php  
if($row['pic_date'] == ''){
echo"<li><i class='fa fa-calendar'></i>",$row['pic_date'],"</li>";  
}
else{
    echo"<li>(未標註日期)</li>";
}
?>
<?php  echo"<li><h3>上傳者：</h3></i><h1>",$row['user_name'],"</h1></li>"; ?>
<?php
if(isset($_SESSION['admin']) && $_SESSION['admin'] == '1'){
  echo"<li><h3>帳號：</h3></i><h3>",$row['user_account'],"</h3></li>"; 
}else{
    echo"";
}
?>
<?php  echo"<li><h3>信箱：</h3></i><h3>",$row['user_email'],"</h3></li>"; ?>
</ul>

</div>
<button class="my_btn" onclick="goBack()">返回</button>
<?php
  if($_SESSION['user_id'] == $row['user_id'] || $_SESSION['admin'] == 1){
  echo"<a href='delet_image_function.php?pic_id=$pic_id' class='btn btn-normal scroll' onclick='alert_function()' style='font-size:20px;'>刪除照片</a>";
  echo"<a href='edit_image_page.php?pic_filename=$pic_filename' class='btn btn-normal scroll' style='font-size:20px;'>編輯照片資訊</a>";
  }
  else{
    echo"";
  }

?>
</div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
    var userId = <?php echo json_encode($_SESSION['user_id']); ?>;
    var picId = <?php echo json_encode($row['pic_id']); ?>;
</script>

<script type="text/javascript">
	 function goBack() {
        window.history.back();
     }

     var alert_function = function(){
        let answer = confirm('確定要刪除這張圖片嗎？');
        if(answer){
            document.forms[0].submit();
          window.event.returnValue=true;
      
        }else{
          alert("取消刪除");
          window.event.returnValue=false;
        }
     }

     $(document).ready(function() {
    checkLikeStatus();
    });

    function likeButtonClick() {
    console.log("likeButtonClick called");

    event.preventDefault();

    
    // 在這裡，您可以使用 JavaScript 來處理按讚按鈕的點擊事件
    var likeButton = document.getElementById('likeButton');
    var likeCount = document.getElementById('likeCount');
    
    var userId = <?php echo json_encode($_SESSION['user_id']); ?>;
    var picId = <?php echo json_encode($row['pic_id']); ?>;

    // 如果已經點過讚，則發送取消讚的請求；否則，發送按讚的請求
    var action = likeButton.classList.contains('liked') ? 'unlike' : 'like';

    // 發送 AJAX 請求
    $.ajax({
    type: 'POST',
    url: 'picture_likes_function.php',
    data: { action: action, userId: userId, picId: picId },
    success: function(response) {
        console.log("Raw Response:", response);

        // 直接使用由後端返回的數據，不需要假設
        try {
            // 更新前端页面上的点赞数量和样式
            likeCount.textContent = response.likesCount;
            // 根据服务端返回的用户点赞状态，更新点赞按钮的样式
            if (response.userLiked) {
                likeButton.classList.add('liked');
                likeButton.innerText = '取消點讚';
            } else {
                likeButton.classList.remove('liked');
                likeButton.innerText = '點讚';
            }
        } catch (e) {
            console.error("Error processing response:", e);
        }
        likeCount.textContent = response.likesCount;
    },
    error: function() {
        alert('發生錯誤');
    }
    });

}

</script>
</body>
</html>