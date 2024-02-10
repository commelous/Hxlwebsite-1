<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>修改資料</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
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
.avatar{
width:200px;
height:200px;
}		
.edit-bt{
    margin:20px;
    width:600px;
    height:50px;
    position:relative;
    left:4cm;
    top:10px;
    font-size:x-large;
    background-color: #5B5B5B;
    color:aliceblue;
    transform: scale(1); 
}
.edit-bt:hover{
    margin:20px;
    width:600px;
    height:50px;
    position:relative;
    left:4cm;
    top:10px;
    font-size:x-large;
    background-color: #BEBEBE;
    color:black;
    transform: scale(1.1); 
    border:none;
}	              	               
</style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<?php

if (isset($_GET['pro-img'])) {
   $pro_img = $_GET['pro-img'];
} else {
    echo "未指定圖片";
}
?>
<div class="container bootstrap snippets bootdey">
<h1 class="text-primary">修改資料</h1>
<hr>
<div class="row">

<div class="col-md-3">
<div class="text-center">
<?php echo"<img src='",$pro_img,"' class='avatar img-circle img-thumbnail' alt='avatar'>"; ?>
<h6></h6>
<input type="file" class="form-control">
</div>
</div>

<div class="col-md-9 personal-info">
<h3>帳戶資訊</h3>

<form class="form-horizontal" role="form" action="profile_edit_function.php" method="post">
<div class="form-group">
<div class="col-lg-8">
<?php
  session_start();
  echo"<input class='form-control' type='hidden' value='",$_SESSION['user_id'],"' name='user_id'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">帳戶名稱:</label>
<div class="col-lg-8">
<?php
 echo"<input class='form-control' type='text' value='",$_SESSION['user_account'],"' name='user_account'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">姓名:</label>
<div class="col-lg-8">
<?php
 echo"<input class='form-control' type='text' value='",$_SESSION['name'],"' name='user_name'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">電話:</label>
<div class="col-lg-8">
<?php
  echo"<input class='form-control' type='text' value='",$_SESSION['phone'],"'  name='user_phone'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Email:</label>
<div class="col-lg-8">
<?php
  echo"<input class='form-control' type='text' value='",$_SESSION['Email'],"' name='user_email'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">生日:</label>
<div class="col-lg-8">
<?php
  echo"<input class='form-control' type='date' value='",$_SESSION['birthday'],"' name='user_birthday'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">密碼:</label>
<div class="col-lg-8">
<?php
  echo"<input class='form-control' type='password' value='",$_SESSION['password'],"' name='user_password'>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">確認密碼:</label>
<div class="col-lg-8">
<?php
  echo"<input class='form-control' type='password' value='' name='user_password2'>";
?>
</div>
</div>
<button type="submit" class="edit-bt">修改資料</button>

</form>


</div>
</div>
</div>
<hr>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>