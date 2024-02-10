<!DOCTYPE html>
<html lang="en">
    <head itemscope itemtype="http://schema.org/WebSite">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title itemprop="name">註冊</title>
        <meta name="description" itemprop="description" content="Preview bootstrap html snippet. bs4 sign up page. Copy and paste the html, css and js code for save time, build your app faster and responsive">
        <meta name="keywords" content="html, css, javascript, themes, templates, code snippets, ui examples, react js, react-native, plagraounds, cards, front-end, profile, invoice, back-end, web-designers, web-developers">
        <link itemprop="sameAs" href="https://www.facebook.com/bootdey">
        <link itemprop="sameAs" href="https://twitter.com/bootdey">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" type="image/x-icon" href="/img/bootdey_favicon.ico">
        <link rel="apple-touch-icon" sizes="135x140" href="/img/bootdey_135x140.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/bootdey_76x76.png">
        <link rel="canonical" href="https://bootdey.com/snippets/view/bs4-sign-up-page" itemprop="url">
        <meta property="twitter:account_id" content="2433978487" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@bootdey">
        <meta name="twitter:creator" content="@bootdey">
        <meta name="twitter:title" content="Preview bootstrap html snippet. bs4 sign up page">
        <meta name="twitter:description" content="Preview bootstrap html snippet. bs4 sign up page. Copy and paste the html, css and js code for save time, build your app faster and responsive">
        <meta name="twitter:image" content="https://bootdey.com/files/SnippetsImages/bootstrap-snippets-912.png">
        <meta name="twitter:url" content="https://bootdey.com/snippets/preview/bs4-sign-up-page">
        <meta property="og:title" content="Preview bootstrap html snippet. bs4 sign up page">
        <meta property="og:url" content="https://bootdey.com/snippets/preview/bs4-sign-up-page">
        <meta property="og:image" content="https://bootdey.com/files/SnippetsImages/bootstrap-snippets-912.png">
        <meta property="og:description" content="Preview bootstrap html snippet. bs4 sign up page. Copy and paste the html, css and js code for save time, build your app faster and responsive">
        <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" /> <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript">
        <link rel="icon" type="image/x-icon" href="picture\網站標籤.ico" />


        </script> 
        </head>
        <style >
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
            body{
                margin-top:20px;
                background-color: #f2f3f8;
                font-family:DFKai-SB;
            }
            .card {
                margin-bottom: 1.5rem;
                box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
            }

            .card {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid #e5e9f2;
                border-radius: .2rem;
            }

            .form_submit{
                position:relative;
                left:5cm;
            }
            .form_submit:hover{
                background-color: black;
                color:#fff;
            }
            .My-h2{
                color:#e5e9f2;
            }
</style>
<body>
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
            <div id="snippetContent">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css"> 
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script> 
                <div class="container h-100"><div class="row h-100"><div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="My-h2">註冊帳號</h1>
                            <p class="My-h2"> 填入您的基本資料</p>
                        </div>
                            <div class="card"><div class="card-body"><div class="m-sm-4">

                            <form action="website_register_function.php" method="post">
                                <div class="form-group"> <label>帳戶名稱</label> 
                                <input class="form-control form-control-lg" type="text" name="account" placeholder="帳戶名稱" required></div>
                                <div class="form-group"> <label>姓名</label> 
                                <input class="form-control form-control-lg" type="text" name="name" placeholder="姓名" required></div>
                                <div class="form-group"> <label>電子郵件</label> 
                                <input class="form-control form-control-lg" type="text" name="email" placeholder="電子郵件" required></div>
                                <div class="form-group"> <label>電話</label> 
                                <input class="form-control form-control-lg" type="text" name="phone" placeholder="電話" required></div>
                                <div class="form-group"> <label>生日</label> 
                                <input class="form-control form-control-lg" type="date" name="birthday" placeholder="生日" required></div>
                                <div class="form-group"> <label>密碼</label> 
                                <input class="form-control form-control-lg" type="password" name="password" placeholder="輸入密碼" required></div>
                                <div class="form-group"> <label>確認密碼</label> 
                                <input class="form-control form-control-lg" type="password" name="password2" placeholder="確認密碼" required></div>
                                <button type="submit" name="submit" class="form_submit">註冊</button>
                            </form>


                            </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>

<script type="text/javascript"></script> </div> <script async src="https://www.googletagmanager.com/gtag/js?id=G-F1RTS0P1CD"></script> <script>window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F1RTS0P1CD');
</script> 
<script type="text/javascript">
        $(document).ready(function() {
            // 啟動輪播效果
            $('#backgroundCarousel').carousel({
                interval: 3000 
            });
        });
    </script>
</body>
</html>