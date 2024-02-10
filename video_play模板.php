<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>profile videos - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style type="text/css">
    	body{
    background: #eaeaea;
    margin-top:20px;
}
    body.white-theme {
      background-color: #ffffff;
      color: #000000;
    }

    body.dark-theme {
      background-color: #666666;
      color: #ffffff;
    }
.profile-info-list {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.profile-info-list > li.title {
    font-size: 0.625rem;
    font-weight: 700;
     color: #8a8a8f; 
    padding: 0 0 0.3125rem;
}
.profile-info-list > li + li.title {
    padding-top: 1.5625rem;
}
.profile-info-list > li {
    padding: 0.625rem 0;
}
.profile-info-list > li .field {
    font-weight: 700;
}
/* .profile-info-list > li .value {
     color: #666; 
} */
.profile-info-list > li.img-list a {
    display: inline-block;
}
.profile-info-list > li.img-list a img {
    max-width: 2.25rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    border-radius: 2.5rem;
}
.coming-soon-cover img,
.email-detail-attachment .email-attachment .document-file img,
.email-sender-img img,
.friend-list .friend-img img,
.profile-header-img img {
    max-width: 100%;
}
.table.table-profile th {
    border: none;
    /* color: #000; */
    padding-bottom: 0.3125rem;
    padding-top: 0;
}
.table.table-profile td {
    border-color: #c8c7cc;
}
.table.table-profile tbody + thead > tr > th {
    padding-top: 1.5625rem;
}
.table.table-profile .field {
    /* color: #666; */
    font-weight: 600;
    width: 25%;
    text-align: right;
}
.table.table-profile .value {
    font-weight: 500;
}
.profile-header {
    position: relative;
    overflow: hidden;
}
.profile-header .profile-header-cover {
    background: url(https://bootdey.com/img/Content/bg1.jpg) center no-repeat;
    background-size: 100% auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.profile-header .profile-header-cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0, rgba(0, 0, 0, 0.85) 100%);
}
.profile-header .profile-header-content,
.profile-header .profile-header-tab,
.profile-header-img,
body .fc-icon {
    position: relative;
}
.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -1.25rem 0 0;
    padding: 0 0 0 8.75rem;
    border-bottom: 1px solid #c8c7cc;
    white-space: nowrap;
}
.profile-header .profile-header-tab > li {
    display: inline-block;
    margin: 0;
}
.profile-header .profile-header-tab > li > a {
    display: block;
    /* color: #000; */
    line-height: 1.25rem;
    padding: 0.625rem 1.25rem;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.75rem;
    border: none;
}

.profile-header .profile-header-content:after,
.profile-header .profile-header-content:before {
    content: "";
    display: table;
    clear: both;
}
.profile-header .profile-header-content {
    /* color: #fff; */
    padding: 1.25rem;
}

.profile-header-img {
    float: left;
    width: 7.5rem;
    height: 7.5rem;
    overflow: hidden;
    z-index: 10;
    margin: 0 1.25rem -1.25rem 0;
    padding: 0.1875rem;
    -webkit-border-radius: 0.25rem;
    -moz-border-radius: 0.25rem;
    border-radius: 0.25rem;
    background: #fff;
}
.profile-header-info h4 {
    font-weight: 500;
    margin-bottom: 0.3125rem;
}
.profile-container {
    padding: 1.5625rem;
}
@media (max-width: 967px) {
    .profile-header-img {
        width: 5.625rem;
        height: 5.625rem;
        margin: 0;
    }
    .profile-header-info {
        margin-left: 6.5625rem;
        padding-bottom: 0.9375rem;
    }
    .profile-header .profile-header-tab {
        padding-left: 0;
    }
}
@media (max-width: 767px) {
    .profile-header .profile-header-cover {
        background-position: top;
    }
    .profile-header-img {
        width: 3.75rem;
        height: 3.75rem;
        margin: 0;
    }
    .profile-header-info {
        margin-left: 4.6875rem;
        padding-bottom: 0.9375rem;
    }
    .profile-header-info h4 {
        margin: 0 0 0.3125rem;
    }
    .profile-header .profile-header-tab {
        white-space: nowrap;
        overflow: scroll;
        padding: 0;
    }
    .profile-container {
        padding: 0.9375rem 0.9375rem 3.6875rem;
    }
    .friend-list > li {
        float: none;
        width: auto;
    }
}
.profile-info-list {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.profile-info-list > li.title {
    font-size: 0.625rem;
    font-weight: 700;
    /* color: #8a8a8f; */
    padding: 0 0 0.3125rem;
}
.profile-info-list > li + li.title {
    padding-top: 1.5625rem;
}
.profile-info-list > li {
    padding: 0.625rem 0;
}
.profile-info-list > li .field {
    font-weight: 700;
}
/* .profile-info-list > li .value {
     color: #666; 
} */
.profile-info-list > li.img-list a {
    display: inline-block;
}
.profile-info-list > li.img-list a img {
    max-width: 2.25rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    border-radius: 2.5rem;
}
.coming-soon-cover img,
.email-detail-attachment .email-attachment .document-file img,
.email-sender-img img,
.friend-list .friend-img img,
.profile-header-img img {
    max-width: 100%;
}
.table.table-profile th {
    border: none;
    color: #000;
    padding-bottom: 0.3125rem;
    padding-top: 0;
}
.table.table-profile td {
    border-color: #c8c7cc;
}
.table.table-profile tbody + thead > tr > th {
    padding-top: 1.5625rem;
}
.table.table-profile .field {
    color: #666;
    font-weight: 600;
    width: 25%;
    text-align: right;
}
.table.table-profile .value {
    font-weight: 500;
}
.row.row-space-2 {
    margin: 0 -1px;
}
.m-b-2 {
    margin-bottom: 2px!important;
}
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}
.row.row-space-2>[class*=col-] {
    padding: 0 1px;
}
.My_value{
    font-size:20px;
    transform: scale(1);
    width:300px;
}
.My_value:hover{
    font-size:20px;
    transform: scale(1.2);
}
    </style>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'white-theme'; ?>">
<div class="container">
<div id="content" class="content p-0">

<div class="profile-container">
<div class="row row-space-20">
<div class="col-md-8">
<div class="tab-content p-0">
<div class="tab-pane active show" id="profile-videos">
<div class="m-b-10"><h1>影片 (16)</h1></div>
<div class="row row-space-2">
<div class="col-sm-8">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PB4gId2mPNc"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ohwiy6CfzGc"></iframe>
</div>
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dXV4qzQ0ZYs"></iframe>
</div>
</div>
</div>
<div class="row row-space-2">
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oWOx7Ogex1A"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JYIbZLXwBes"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a4L0iB04yqI"></iframe>
</div>
</div>
</div>
<div class="row row-space-2">
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/be9hxbpd4hA"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Sy2sX-QyHCg"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z3UYgpFNcbQ"></iframe>
</div>
</div>
</div>
<div class="row row-space-2">
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8etudHk--vc"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OhPyurx8-N0"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Rn6a5Im0FRU"></iframe>
</div>
</div>
</div>
<div class="row row-space-2">
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zF378T75GvE"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NxY8kjv-l8A"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Tb4herBVRGY"></iframe>
</div>
</div>
<div class="col-sm-4">
<div class="embed-responsive embed-responsive-16by9 m-b-2">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q5_DwWYaQR8"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 hidden-xs hidden-sm">
<ul class="profile-info-list">
<li class="title"></li>
<li>
<div class="field">連結格式:</div>
<div class="My_value">https://www.youtube.com/embed/影片ID</div>
</li>
<li>
<div class="field">解說:</div>
<div class="My_value">embed部分是指將該影片以嵌入式方式嵌入到其他網頁的格式，這種格式是為了方便開發者在網頁上嵌入YouTube影片而設計的</div>
</li>

<!-- <a href="#" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt /></a> -->

</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>