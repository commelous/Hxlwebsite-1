<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	
body{
    
    font-family:DFKai-SB;
}
body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family:DFKai-SB;
      height:auto;
      margin-top:0px;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family:DFKai-SB;
      height:auto;
      margin-top:0px;
    }     


.content-item {
    padding:30px 0;
	 /* background-color:#FFFFFF;  */
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
.upload_input{
    border-radius: 5px;
    width:300px;
    height:50px;
	color:#000000;
}
.upload_input:hover{
    border-radius: 5px;
    background-color:#DDDDDD;
    width:300px;
    height:50px;
}
.upload_button{
    position:relative;
    left:30px;
    width:300px;
    height:50px;
    font-size: x-large;
    background-color: #DDDDDD;
    color:#555555;
    
}
.upload_button:hover{
    width:300px;
    height:50px;
    background-color: #555555;
    color:#DDDDDD;
}
.upload_file{
    width:250px;
    height:70px;
    position:relative;
    align-items: center;
}
</style>
</head>
<body  class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<?php
    if (session_status() == PHP_SESSION_NONE) {
       session_start();  
    }
   $name = $_SESSION['name'];
   $id = $_SESSION['user_id'];
   $account = $_SESSION['user_account'];
   $password = $_SESSION['password'];
   $Email = $_SESSION['Email'];
   $phone = $_SESSION['phone'];
   $admin = $_SESSION['admin'];
   $birthday = $_SESSION['birthday'];
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item grey" id="gallery-item">
<div class="container">
<div class="row">


<form method="post" action="img_upload.php" enctype="multipart/form-data">
<div class="col-sm-8">
<input type="file" name="pic_file" class="upload_file" required>
</div>
<?php
 echo"<input type='hidden' name='user_account' value='",$account,"'  >";
 echo"<input type='hidden' name='user_id' value='",$id,"'  >";
?>

<div class="col-sm-4">
<input type="text" name="img_name" placeholder="照片名稱" class="upload_input" style="position:relative;left:20px;bottom:20px;" required>
<div class="box">
<textarea type="text" name="img_content" cols="50" rows="20" style="resize:none;border-radius: 5px; color:#000000;" placeholder="照片介紹" ></textarea>
</div>
<div class="box">
<ul class="list-unstyled">
<li><input type="date" name="img_date" class="upload_input" ></li>
<li><input type="text" name="img_location" placeholder="地點" class="upload_input" ></li>
<li><select name="img_category"  class="upload_input" required>
    <option>風景攝影</option>
    <option>動物攝影</option>
    <option>人物攝影</option>
    <option>微距攝影</option>
    <option>動漫圖片</option>
    <option>插畫</option>
	<option>動圖</option>
	<option>其他</option>
</select></li>
</ul>
</div>
<button type="submit" class="upload_button" name="submit">上傳</button>

</form>

</div>

</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	

</script>
</body>
</html>