<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<?php wp_enqueue_script( 'jquery-ui-tabs' ); wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">        <!-- 全体を囲むコンテナ -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
        <span class="sr-only">ナビゲーション</span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo home_url('/'); ?>" class="navbar-brand">My room</a>
    </div>
	
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="<?php bloginfo('template_url'); ?>/page.html"><span class="glyphicon glyphicon-home"></span>ホーム</a>
        </li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php bloginfo('template_url'); ?>/page1.html">連絡</a></li>
      </ul>
    </div>
        <?php wp_nav_menu(array(
        'theme_location' => 'navigation',
        'menu_class'=> 'nav navbar-nav' ) );
        ?>
	</div>
</nav>





<?php
  if (is_front_page()) :
?>

<section id="branding">
  <img src="<?php bloginfo('template_url'); ?>/photo/fb.jpg" width="950" height="295" alt="" />
</section><!-- #branding end -->

<?php
  endif;
?>





<?php
  if (!is_front_page()) :
?>

<div class="jumbotron"
     style="color:#FFF; text-shadow: 2px 2px 4px #666; 
            height:230px; background:url(<?php bloginfo('template_url'); ?>/photo/top.JPG); background-size:cover;">
  <span class="h2"><?php bloginfo('description'); ?><?php bloginfo('name'); ?></span>
  <p style="font-size:16px"></p>
</div>
<?php
  endif;
?>