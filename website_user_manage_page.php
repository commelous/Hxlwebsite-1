<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
<title>管理用戶</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style type="text/css">
    	body{
           font-family: 'Architects Daughter', cursive;
           font-size:20px;

        }
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Architects Daughter', cursive;
      height:auto;
      font-size:20px;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
      font-family: 'Architects Daughter', cursive;
      height:auto;
      font-size:20px;
    }     

.bg-light-blue {
     background-color: #e9f7fe !important; 
    color: #3184ae;
    padding: 7px 18px;
    border-radius: 4px;
}

.bg-light-green {
    background-color: rgba(40, 167, 69, 0.2) !important;
    padding: 7px 18px;
    border-radius: 4px;
    color: #28a745 !important;
}

.buttons-to-right {
    position: absolute;
    right: 0;
    top: 40%;
}

.btn-gray {
    color: #666;
    background-color: #eee;
    padding: 7px 18px;
    border-radius: 4px;
}

.booking:hover .buttons-to-right .btn-gray {
    opacity: 1;
    transition: .3s;
}

.buttons-to-right .btn-gray {
    opacity: 0;
    transition: .3s;
}

.btn-gray:hover {
    background-color: #36a3f5;
    color: #fff;
}

.booking {
    margin-bottom: 30px;
    border-bottom: 1px solid #eee;
    padding-bottom: 30px;
}

.booking:last-child {
    margin-bottom: 0px;
    border-bottom: none;
    padding-bottom: 0px;
}

 @media screen and (max-width: 575px) {
    .buttons-to-right {
        top: 10%;
    }
    .buttons-to-right a {
        display: block;
        margin-bottom: 20px;
    }
    .buttons-to-right a:last-child {
        margin-bottom: 0px;
    }
    .bg-light-blue,
    .bg-light-green,
    .btn-gray {
        padding: 7px;
    }
} 

.card {
    margin-bottom: 20px;
    /* background-color: #fff; */
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-radius: 4px;
    box-shadow: none;
    border: none;
    padding: 25px;
}
.mb-5, .my-5 {
    margin-bottom: 3rem!important;
}
.msg-img {
    margin-right: 20px;
}
.msg-img img {
    width: 60px;
    border-radius: 50%;
}
img {
    max-width: 100%;
    height: auto;
}

</style>
</head>
<body   class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">

<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();  // 如果還未啟動，則啟動 session
    }
    $link = mysqli_connect('localhost', 'root');
    mysqli_select_db($link, 'hxl_website');
    
    $sql = "select * from website_user";
    $result = mysqli_query($link , $sql);

?>

<div class="container" >
<div class="row">
<div class="col-md-12">
<div class="card card-white mb-5">
<div class="card-heading clearfix border-bottom mb-4">
<?php

while($row = mysqli_fetch_assoc($result)){ 

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

echo"
<br>
<h2 class='card-title'>",$row['user_account'],"</h2>
</div>
<div class='card-body'>
<ul class='list-unstyled'>
<li class='position-relative booking'>
<div class='media'>
<div class='msg-img'>
<img src='",$pro_img,"' alt>
</div>
<div class='media-body'>
<h2 class='mb-4' >",$row['user_name'],"&nbsp;&nbsp;";

if($row['user_admin'] == 1){
echo"<span class='badge badge-primary mx-3'>系統管理者</span>&nbsp;&nbsp;<span class='badge badge-danger'></span></h2>";
}
elseif($row['user_admin'] == 0){
echo"<span class='badge badge-danger'>一般使用者</span></h3>";
}
else{
    echo"";
}

echo"<div class='mb-3'>
<span class='mr-2 d-block d-sm-inline-block mb-2 mb-sm-0'>Email：</span>
<span class='bg-light-blue'>",$row['user_email'],"</span>
</div>
<br>
<div class='mb-3'>
<span class='mr-2 d-block d-sm-inline-block mb-2 mb-sm-0'>聯絡電話:</span>
<span class='bg-light-blue'>",$row['user_phone'],"</span>
</div>
<br>
<div class='mb-3'>
<span class='mr-2 d-block d-sm-inline-block mb-2 mb-sm-0'>生日：</span>
<span class='bg-light-blue'>",$row['user_birthday'],"</span>
</div>
<div class='mb-5'>
</div>";
if($row['user_admin'] != 1){
 echo"
 <form action='delete_user_function.php' method='post'>
   <input type='hidden' value='",$row['user_id'],"' name='user_id'>
   <button type='submit' style='color:black;' >刪除此帳號</button>
 </form><hr>
 ";
}
else{
    echo"<h4>管理者帳號無法隨意刪除</h4><hr>";
}
}
?>

</li>

</ul>
</div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>