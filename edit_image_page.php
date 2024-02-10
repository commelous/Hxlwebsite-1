<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>圖片詳細資訊</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="picture\網站標籤.ico" />
<style type="text/css">
    	



.content-item {
    padding:30px 0;
	background-color:#FFFFFF;
}

.content-item.grey {
	background-color:#F0F0F0;
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
	color:#555555;
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
	background-color:#FFFFFF;
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
.form-input{
	width:300px;
	height:40px;
	border-radius: 5px;
	margin:10px;
}
.form-textarea {
    width: 100%;
    height: 400px; /* 設置高度，或使用其他適當的值 */
    resize: none; /* 可以設置為 'both' 或 'vertical' 以啟用/禁用調整大小 */
}
.form-submit{
   width:300px;
   height:40px;
   margin:20px;
   position:relative;
   right:10px;
   background-color:#999999;
   color:#333333;
   border-radius: 5px;
   border:none;
   transform: scale(1);
}
.form-submit:hover{
    background-color: #999999;
   color:#F0F0F0;
   transform: scale(1.1);
}
</style>
</head>
<body>
<?php

if (isset($_GET['pic_filename'])) {
    $pic_img3 = $_GET['pic_filename'];
} else {
    echo "未指定圖片。";
}

$link=mysqli_connect('localhost','root');
mysqli_select_db($link,'hxl_website');
                
$sql = "SELECT *
FROM website_picture
LEFT JOIN website_user ON website_picture.user_id = website_user.user_id WHERE pic_filename = '$pic_img3';";
$result = mysqli_query($link , $sql);

$row = mysqli_fetch_assoc($result);

$pic_id = $row['pic_id'];
$content = $row['pic_content'];
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item grey" id="gallery-item">
<div class="container">
<div class="row">
<div class="col-sm-8">
<?php
  echo"<img src='picture/",$pic_img3,"' class='img-responsive' alt>";     
  
?>
</div>
<div class="col-sm-4">



<form action="edit_image_function.php" method="post" >
<?php 
echo"<input type='hidden' value='",$row['pic_id'],"' name='pic_id' >"; 
echo"<input type='hidden' value='",$pic_img3,"' name='pic_filename' > "; 
?>
<?php 
echo"<input type='text' value='",$row['pic_name'],"' name='pic_name' class='form-input' style='position:relative; left:10px;' placeholder='圖片標題'>"; 
?>
<div class="box">
<?php 
echo"<textarea type='text' name='pic_content' class='form-textarea' placeholder='圖片內文'>",$row['pic_content'],"</textarea>"; 
?>
</div>
<div class="box">
<ul class="list-unstyled">
<?php  
  echo"<input type='date' value='",$row['pic_date'],"' name='pic_date' class='form-input'>";
?>
<?php  
 echo"<input type='text' value='",$row['pic_location'],"' name='pic_location' class='form-input' placeholder='圖片地點'>";
?>
<?php  
 echo "<select name='pic_category' class='form-input'>
         <option " . ($row['pic_category'] == '風景攝影' ? 'selected' : '') . ">風景攝影</option>
         <option " . ($row['pic_category'] == '動物攝影' ? 'selected' : '') . ">動物攝影</option>
         <option " . ($row['pic_category'] == '人物攝影' ? 'selected' : '') . ">人物攝影</option>
         <option " . ($row['pic_category'] == '微距攝影' ? 'selected' : '') . ">微距攝影</option>
         <option " . ($row['pic_category'] == '動漫圖片' ? 'selected' : '') . ">動漫圖片</option>
         <option " . ($row['pic_category'] == '插畫' ? 'selected' : '') . ">插畫</option>
		 <option " . ($row['pic_category'] == '動圖' ? 'selected' : '') . ">其他</option>
         <option " . ($row['pic_category'] == '其他' ? 'selected' : '') . ">其他</option>
       </select>";
?>
<button type="submit" class="form-submit">修改圖片資料</button>
</form>

</ul>
</div>
<button class="btn btn-normal" onclick="goBack()">返回</button>
</div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

</script>
</body>
</html>