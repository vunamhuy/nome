<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo $base; ?>"/>
    <?php if ($description) { ?>
        <meta name="description" content="<?php echo $description; ?>"/>
    <?php } ?>
    <?php if ($keywords) { ?>
        <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <?php } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if ($icon) { ?>
        <link href="<?php echo $icon; ?>" rel="icon"/>
    <?php } ?>

    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


    <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="catalog/view/theme/<?php echo $theme_path; ?>/stylesheet/magnificent.css" rel="stylesheet">
    <link href="catalog/view/theme/<?php echo $theme_path; ?>/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
    <link href="catalog/view/theme/<?php echo $theme_path; ?>/stylesheet/photoswipe.css" rel="stylesheet">
    <link href="catalog/view/theme/<?php echo $theme_path; ?>/js/fancybox/jquery.fancybox.css" rel="stylesheet">
    <?php foreach ($styles as $style) { ?>
        <link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>"
              media="<?php echo $style['media']; ?>"/>
    <?php } ?>
    <script src="catalog/view/theme/<?php echo $theme_path; ?>/js/common.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>


    <!--custom script-->
    <?php foreach ($scripts as $script) { ?>
        <?php if (strcmp($script, 'catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') != 0) { ?>
            <script src="<?php echo $script; ?>" type="text/javascript"></script>
        <?php } ?>
    <?php } ?>
    <script src="catalog/view/theme/<?php echo $theme_path; ?>/js/device.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
            src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
            height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div><![endif]-->
    <?php echo $google_analytics; ?>
    <link href="catalog/view/theme/<?php echo $theme_path; ?>/stylesheet/stylesheet.css" rel="stylesheet">
</head>
<body class="<?php echo $class; ?>">
<p id="gl_path" class="hidden"><?php echo $theme_path; ?></p>
<!-- swipe menu -->
<div class="swipe">
    <div class="swipe-menu">
        <?php if ($categories_tm) {
			echo $categories_tm;
		} ?>
    </div>
</div>
<div id="page">
    <div class="shadow"></div>
    <div class="toprow-1">
        <a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>
    </div>

    <header class="header">
        <div id="stuck" class="stuck-menu">
            <div class="container logo-block">
                <div class="fleft">
                    <div id="logo" class="logo">
                        <?php if ($logo) { ?>
                            <a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>"
                             alt="<?php echo $name; ?>" class="img-responsive"/></a>
                        <?php } else { ?>
                            <h1>
                                <a href="<?php echo $home; ?>"><?php echo $name; ?></a>
                            </h1>
                        <?php } ?>
                    </div>
                    <?php echo $search; ?>
                </div>
            </div>
        </div>

        <!--
        <?php if ($categories) { ?>
            <div class="container">
                <div id="menu-gadget" class="menu-gadget">
                    <div id="menu-icon" class="menu-icon"><?php echo $text_category; ?></div>
                    <?php if ($categories_tm) {
                        echo $categories_tm;
                    } ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($categories) { ?>
            <div id="tm_menu" class="nav__primary">
                <div class="container">
                    <?php if ($categories_tm) {
                        echo $categories_tm;
                    } ?>
                    <div class="clear"></div>
                </div>
            </div>
        <?php } ?>
        -->
    </header>
	
	<?php if ($categories) { ?>
            <div id="tm_menu" class="nav__primary">
                <div class="container">
                    <?php if ($categories_tm) {
                        echo $categories_tm;
                    } ?>
                    <div class="clear"></div>
                </div>
            </div>
        <?php } ?>


