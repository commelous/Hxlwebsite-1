<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>登入</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="picture\網站標籤.ico" />
<style type="text/css">
    body{
    margin-top:20px;
    
    font-family:DFKai-SB;
    background-color:black   center center fixed;
    background-size: cover;  
    
}
.carousel-inner {
    background-size: cover;
}

.carousel-item {
    height: 100vh; 
}
#backgroundCarousel {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1; /* 使輪播元素在最底層 */
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
    width: 100%;
    border-radius: 5px;
    
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}



.card-columns .card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
    }
    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}
.text-muted {
    color: #9faecb !important;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.mb-3 {
    margin-bottom: 1rem !important;
}

.input-group {
    position: relative;
    display: flex;
    width: 100%;
}
.register_button{
    background-color: #DFFFDF;
    color:black;
    border-radius: 10px;
    position:relative;
    top:1.5cm;
    width:2cm;
    border: none;
    transform: scale(1);
}
.register_button:hover{
    background-color: #79FF79;
    color:black;
    border-radius: 10px;
    border: none;
    transform: scale(1.3);

}
.register-container{
    background-color: darkolivegreen;
    background: rgba(144, 238, 144, 0.8);
    border-radius: 5px;
}
.submit_bt{
    background-color: #DFFFDF;
    color:black;
    border-radius: 10px;
    border: none;
    width:100px;
    align-items: center;
    transform: scale(1);
    
}
.submit_bt:hover{
    background-color: #79FF79;
    color:black;
    border-radius: 10px;
    border: none;
    transform: scale(1.3);
}

</style>
</head>
<body>
    <!-- 背景圖片輪播 -->
<div id="backgroundCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="picture/pngtree-green-forest-with-trees-is-shown-image_2915435.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="picture/nordic_landscape-Mountain_scenery_wallpaper_1680x1050.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="picture/pexels-tsang-chung-yee-669963.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="picture/pexels-timo-volz-1717859.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="picture/CTHSvurn8c6.jpg" alt="Second slide">
            </div>

        </div>
</div>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<br>
<br>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card-group mb-0">
<div class="card p-4">
<div class="card-body">
<h1>登入</h1>
<p class="text-muted">登入您的帳號</p>

<!-- form表單 -->
<form method="post" action="website_login_function.php">
<div class="input-group mb-3">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" class="form-control" placeholder="輸入帳號" name="username">
</div>
<div class="input-group mb-4">
<span class="input-group-addon"><i class="fa fa-lock"></i></span>
<input type="password" class="form-control" placeholder="輸入密碼" name="password">
</div>
<div class="row">
<div class="col-6">
<button type="submit"  class="submit_bt">登入</button>
</form>
</div>
<div class="col-6 text-right">
</div>
</div>


</div>
</div>
<div class="register-container" style="width:44%;">          
<div class="card-body text-center" style="position:relative;top:1.2cm;">
<div>
<h2>註冊帳號</h2>
<p>若您還沒有帳號，請先來這裡註冊</p>
<a href="register_page.php"><button type="button"  class="register_button">註冊</button></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>

<script type="text/javascript">
        $(document).ready(function() {
            // 啟動輪播效果
            $('#backgroundCarousel').carousel({
                interval: 3000 // 設定輪播間隔時間（5秒）
            });
        });
    </script>
</body>
</html>

<!-- class="card text-white bg-primary py-5 d-md-down-none" 141行-->