<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>帳戶資訊</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
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

.avatar{
width:200px;
height:200px;
font-family:DFKai-SB;
}		
.edit-bt{
    margin:20px;
    width:600px;
    height:50px;
    position:relative;
    right:3.2cm;
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
    right:3.2cm;
    top:10px;
    font-size:x-large;
    background-color:white;
    color:black;
    transform: scale(1.1); 
    border:none;
}	              	              
    </style>
</head>
<body  class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<div class="container bootstrap snippets bootdey">
<h1 >帳戶資訊</h1>
<hr>
<div class="row">

<div class="col-md-3">
<div class="text-center">
<?php
  $pro_num =  rand(0,6);
  switch($pro_num){
     case'0':
       $pro_img = "picture/c3707d6c96f69a505d65d13a7895d727.jpg";
       break;
       case'1':
         $pro_img = "picture/59689446(.png";
       break;
       case'2':
         $pro_img = "picture/22ccaf2e93ac524d7901f2c3cdeccfc6.jpg";
       break;
       case'3':
         $pro_img = "picture/d05f268f3b0678f3c19ba8bfc305c5d6.jpg";
       break;
       case'4':
         $pro_img = "picture/822905.jpg";
       break;
       case'5':
         $pro_img = "picture/ef035e9530a6934772b4fa9cdb7de40b.jpg";
       break;
       case'6':
         $pro_img = "picture/bbe46578ea87a56cd13c4cef3dbe19e3.jpg";
       break;
  }

?>
<?php
  echo"<img src='",$pro_img,"' class='avatar img-circle img-thumbnail' alt='avatar'>";
?>
<h6></h6>
<?php
   echo  "<h2>",$_SESSION['name'],"</h2>";
?>
</div>
</div>

<div class="col-md-9 personal-info">

<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">帳號:</label>
<div class="col-lg-8">
<?php
   echo  "<h2>",$_SESSION['user_account'],"</h2>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">姓名:</label>
<div class="col-lg-8">
<?php
   echo  "<h2>",$_SESSION['name'],"</h2>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">電話:</label>
<div class="col-lg-8">
<?php
   echo  "<h2>",$_SESSION['phone'],"</h2>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">Email:</label>
<div class="col-lg-8">
<?php
   echo  "<h2>",$_SESSION['Email'],"</h2>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">生日:</label>
<div class="col-lg-8">
<?php
   echo  "<h2>",$_SESSION['birthday'],"</h2>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">上傳的圖片:</label>
<div class="col-lg-8">
<?php

     $link = mysqli_connect('localhost', 'root');
     mysqli_select_db($link, 'hxl_website');

   $sql = "SELECT COUNT(*) AS total_rows FROM website_picture WHERE user_id = '" . $_SESSION['user_id'] . "';";
   $result = mysqli_query($link, $sql);

   $row = mysqli_fetch_assoc($result);
    $totalRows = $row['total_rows'];
   echo  "<h2>",$totalRows,"</h2>";
?>
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label" style="font-size:30px;">權限:</label>
<div class="col-lg-8">
<?php
   if($_SESSION['admin'] == '1'){
   echo  "<h2>管理者</h2>";
   }
   else{
    echo  "<h2>一般用戶</h2>";
   }
?>
<?php
echo "<button class='edit-bt' onclick=\"window.location.href='profile_edit_page.php?pro-img=" . $pro_img . "'\">修改帳戶資訊</button>";
?>


</div>
</div>
</div>

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