<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>タブ切り替え</title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<div class="container">        <!-- 全体を囲むコンテナ -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
        <span class="sr-only">ナビゲーション</span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php bloginfo('template_url'); ?>/index.html" class="navbar-brand">My room</a>
    </div>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="nav navbar-nav">
        <li class="nav navbar-nav">
          <a href="<?php bloginfo('template_url'); ?>/page.html"><span class="glyphicon glyphicon-home"></span>ホーム</a>
        </li>
     </ul>
      <ul class="active">
        <li><a href="<?php bloginfo('template_url'); ?>/page1.html">連絡</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron"
     style="color:#FFF; text-shadow: 2px 2px 4px #666; 
            height:230px; background:url(<?php bloginfo('template_url'); ?>/photo/top.jpg); background-size:cover;">
  <span class="h2">たかしの部屋</span>
  <p style="font-size:16px"></p>
</div>


<br>

<h1 class="page-header">吉岡孝</h1>
<p></p>

<h3 class="page-header">ＦＢ</h3>
<div class="row">
  <div class="col-xs-12 col-sm-5">
    <img src="<?php bloginfo('template_url'); ?>/photo/fb.png" class="img-responsive">
  </div>
  <div class="col-xs-12 col-sm-7">
    <div class="visible-xs" style="height:10px;"></div>
    <p>facebook.com/takagotch<br></p>
  </div>
</div>

<h3 class="page-header">Twitter</h3>
<div class="row">
  <div class="col-xs-12 col-sm-5">
    <img src="<?php bloginfo('template_url'); ?>/photo/tw.png" class="img-responsive">
  </div>
  <div class="col-xs-12 col-sm-7">
    <div class="visible-xs" style="height:10px;"></div>
    <p linkrel>twitter.com/takagotch<br>
</p>
  </div>
</div>

<h3 class="page-header">Youtube</h3>
<div class="row">
  <div class="col-xs-12 col-sm-5">
    <img src="<?php bloginfo('template_url'); ?>/photo/youtube.png" class="img-responsive">
  </div>
  <div class="col-xs-12 col-sm-7">
    <div class="visible-xs" style="height:10px;"></div>
    <p>Youtube.com/takagotch<br>

</p>
  </div>
</div>

<br><br>

</div>        <!-- 全体を囲むコンテナ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
