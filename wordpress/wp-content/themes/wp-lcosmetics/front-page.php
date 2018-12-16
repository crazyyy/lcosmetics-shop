<?php /* Template Name: Demo Page Template */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1260">
    <title>Document</title>

    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
    <![endif]-->
    <!-- css + javascript -->
    <?php wp_head(); ?>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/megamenu.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/themeglobal.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/notify.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tinycarousel.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>
    <!--
    ##############################
    - ACTIVATE THE BANNER HERE -
    ##############################
    -->
    <script type="text/javascript">
    var api;
    jQuery(document).ready(function() {
    api = jQuery('.slider-1').revolution({
    delay: 7000,
    startheight: 600,
    startwidth: 1200,
    onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off
    thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
    thumbHeight: 50,
    thumbAmount: 3,
    hideThumbs: 0,
    navigationType: "bullet", //bullet, thumb, none, both  (No Shadow in Fullwidth Version !)
    navigationArrows: "none", //nexttobullets, verticalcentered, none
    navigationStyle: "round", //round,square,navbar
    touchenabled: "on", // Enable Swipe Function : on/off
    navOffsetHorizontal: 0,
    navOffsetVertical: 20,
    stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
    stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
    hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
    hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
    hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
    fullWidth: "on",
    shadow: 0 //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
    });
    });
    </script>
    <script type="text/javascript">
    $(".block").hover(
    function() {
    $(this).find(".featuredcart").fadeIn('normal');
    }
    );
    $(".block").mouseleave(
    function() {
    $(this).find(".featuredcart").fadeOut('normal');
    }
    );
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('.tg-featured').tinycarousel({
    axis: 'x', // vertical or horizontal scroller? ( x || y ).
    interval: true, // move to another block on intervals.
    intervaltime: 4000, // interval time in milliseconds.
    rewind: false, // If interval is true and rewind is true it will play in reverse if the last slide is reached.
    animation: true, // false is instant, true is animate.
    duration: 1000, // how fast must the animation move in ms?
    });
    });
    </script>
    <script type="text/javascript">
    <!--
    $(document).ready(function() {
    $('#slideshow0').nivoSlider();
    });
    -->
    </script>
    <script type="text/javascript">
    $(".block").hover(
    function() {
    $(this).find(".cart").fadeIn('normal');
    }
    );
    $(".block").mouseleave(
    function() {
    $(this).find(".cart").fadeOut('normal');
    }
    );
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#featurcateg0 li a:first').addClass('selected');
    });
    $(function() {
    var tabContainers = $('#tg_hazumi_featured_category > div');
    tabContainers.hide().filter(':first').show();
    $('#featurcateg0 a').click(function() {
    tabContainers.hide();
    tabContainers.filter(this.hash).fadeIn('slow');
    tabContainers.filter(this.hash).show();
    $('#featurcateg0 a').removeClass('selected');
    $(this).addClass('selected');
    return false;
    })
    });
    $(document).ready(function() {
    $('.tabpro').tinycarousel({
    axis: 'x', // vertical or horizontal scroller? ( x || y ).
    interval: true, // move to another block on intervals.
    intervaltime: 4000, // interval time in milliseconds.
    rewind: false, // If interval is true and rewind is true it will play in reverse if the last slide is reached.
    animation: true, // false is instant, true is animate.
    duration: 1000, // how fast must the animation move in ms?
    });
    });
    </script>
    <script type="text/javascript">
    $(".block").hover(
    function() {
    $(this).find(".bestsellercart").fadeIn('normal');
    }
    );
    $(".block").mouseleave(
    function() {
    $(this).find(".bestsellercart").fadeOut('normal');
    }
    );
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('.tg-featured').tinycarousel({
    axis: 'x', // vertical or horizontal scroller? ( x || y ).
    interval: true, // move to another block on intervals.
    intervaltime: 4000, // interval time in milliseconds.
    rewind: false, // If interval is true and rewind is true it will play in reverse if the last slide is reached.
    animation: true, // false is instant, true is animate.
    duration: 1000, // how fast must the animation move in ms?
    });
    });
    </script>
    <script type="text/javascript">
    $(".block").hover(
    function() {
    $(this).find(".specialcart").fadeIn('normal');
    }
    );
    $(".block").mouseleave(
    function() {
    $(this).find(".specialcart").fadeOut('normal');
    }
    );
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('.tg-featured').tinycarousel({
    axis: 'x', // vertical or horizontal scroller? ( x || y ).
    interval: true, // move to another block on intervals.
    intervaltime: 4000, // interval time in milliseconds.
    rewind: false, // If interval is true and rewind is true it will play in reverse if the last slide is reached.
    animation: true, // false is instant, true is animate.
    duration: 1000, // how fast must the animation move in ms?
    });
    });
    </script>
  </head>
  <body>
    <div id="container-header">
      <div id="header">
        <div id="logo">
          <a href="http://lcosmetics-shop.ru/index.php?route=common/home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo 2-.png" title="L'Cosmetics " alt="L'Cosmetics "></a>
        </div>
        <div class="menu-holder">
          <div class="megamenu-pattern">
            <div class="container">
              <ul class="megamenu">
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59"><span>Мыло</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_64" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_64';">Мыло натуральное 100 г (20)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_98" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_98';">Мыло натуральное 1000 г (31)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_62" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_62';">Мыло парфюмированное, 1000 г (16)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_63" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_63';">Мыло с глиной 1000 г (7)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_60" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_60';">Мыло с люфой 1000 г (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_146" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_146';">Мыло холодного приготовления (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59_134" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=59_134';">Мыло ручной работы в подарочной упаковке (4)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65"><span>Для лица</span></a>
                  <div class="sub-menu" style="width: 500px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-6">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_144" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_144';">Крем для лица 100 мл (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_132" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_132';">Крем для лица 50 гр (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_69" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_69';">Крем для лица 60 гр (0)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_67" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_67';">Крем-масло 150 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_68" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_68';">Маска-пилинг 150 мл (4)</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_125" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_125';">Маски для лица и тела 150 мл (10)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_66" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_66';">Мыло-мороженое 150 гр (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_145" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_145';">Тоник 200 мл (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=65_128" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=65_128';">Жидкое крем-мыло 450 мл (4)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=70"><span>Для рук</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=70_129" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=70_129';">Жидкое крем-мыло 450 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=70_71" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=70_71';">Крема для рук (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=70_72" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=70_72';">Масляно-соленой шарик для маникюра и педикюра (6)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73"><span>Для тела</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_143" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_143';">Гели для душа 200 мл (8)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_151" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_151';">Гели для душа 250 мл (6)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_137" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_137';">Гели для душа Provence 250 мл (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_119" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_119';">Жидкое крем-мыло 450 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_79" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_79';">Крем-масло 150 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_139" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_139';">Лосьон - Молочко для тела 200 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_77" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_77';">Маски для тела 150 мл (8)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_106" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_106';">Масла для тела 200 г (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_78" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_78';">Массажные плитки 60 гр (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_99" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_99';">Скрабы сахарные (контейнер 1000 г) (9)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_76" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_76';">Скрабы сахарные 300 г (8)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_100" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_100';">Скрабы соляные (контейнер 1100 г) (6)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_75" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_75';">Скрабы соляные 350 г (6)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_107" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_107';">Скрабы-пудинги 200 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_152" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_152';">Сливочный крем 150 мл (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_105" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=73_105';">Увлажняющие коктейли для тела 200 мл (5)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80"><span>Для волос</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_126" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_126';">Бальзам 250 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_150" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_150';">Бальзам Classic 250 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_138" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_138';">Бальзам Provence 250 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_123" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_123';">Жидкие шампуни 250 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_149" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_149';">Жидкие шампуни Classic 250 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_136" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_136';">Жидкие шампуни Provence 250 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_127" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_127';">Маски для волос 250 мл (4)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_82" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_82';">Твердый шампунь-кондиционер 2 в 1 (упаковка крафт) (6)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_81" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_81';">Твердый шампунь-кондиционер 2 в 1 (упаковка соусница) (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_83" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=80_83';">Жидкие шампуни 350 мл (0)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=101"><span>Для ног</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=101_117" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=101_117';">Крем для ног (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=101_118" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=101_118';">Крем-скраб для ног  (2)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=101_116" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=101_116';">Масляно-соленой шарик для педикюра (6)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84"><span>Для ванны</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_86" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_86';">Бурлящие шарики 130 г (24)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_85" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_85';">Йогрут - пены для ванны 500 мл (5)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_88" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_88';">Морская соль мертвого моря 1000 г (5)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_115" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_115';">Морская соль мертвого моря 350 гр (5)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_148" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_148';">Морская соль с сухоцветами 300 г (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_87" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_87';">Сухое молочко 250 мл (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=84_103" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=84_103';">Сухое молочко 900 г (3)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=89"><span>Для мужчин</span></a>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=110"><span>Для детей</span></a>
                  <div class="sub-menu" style="width: 100%">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-3">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=110_112" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=110_112';">Бурлящие шарики «Смешарики» (6)</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=110_113" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=110_113';">Наборы мыловарения «Смешарики» (4)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="with-sub-menu hover">
                  <p class="close-menu"></p>
                  <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=153"><span>Fresh Time</span></a>
                  <div class="sub-menu" style="width: 220px">
                    <div class="content">
                      <div class="row hover-menu">
                        <div class="col-sm-12">
                          <div class="menu">
                            <ul>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=153_157" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=153_157';">Для волос FT (5)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=153_160" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=153_160';">Для лица FT (3)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=153_158" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=153_158';">Для тела FT (1)</a></li>
                              <li><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=153_114" onclick="window.location = 'http://lcosmetics-shop.ru/index.php?route=product/category&path=153_114';">Шоу-бокс мыло ручной работы Fresh Time (0)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="setting-holder">
          <div id="welcome">
            <a href="http://lcosmetics-shop.ru/index.php?route=account/login">Войти</a> или <a href="http://lcosmetics-shop.ru/index.php?route=account/register">зарегистрироваться</a>. </div>
            <div id="cart">
              <div class="heading">
                <a><span id="cart-total">0.00<font class="ruble">₽</font><div class="cart-icon"></div></span></a></div>
                <div class="content">
                  <div class="empty">Ваша корзина пуста!</div>
                </div>
              </div>
              <div id="tg-setting">
                <div class="content">
                  <form action="http://lcosmetics-shop.ru/index.php?route=module/language" method="post" enctype="multipart/form-data">
                    <div id="language">Язык
                      <br>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/ru.png" alt="Русский" title="Русский" onclick="$('input[name=\'language_code\']').attr('value', 'ru'); $(this).parent().parent().submit();">
                      <input type="hidden" name="language_code" value="">
                      <input type="hidden" name="redirect" value="http://lcosmetics-shop.ru/index.php?route=common/home">
                    </div>
                  </form>
                  <form action="http://lcosmetics-shop.ru/index.php?route=module/currency" method="post" enctype="multipart/form-data">
                    <div id="currency">Валюта
                      <br>
                      <a title="Euro" onclick="$('input[name=\'currency_code\']').attr('value', 'EUR'); $(this).parent().parent().submit();">
                        <font class="ruble">€</font>
                      </a>
                      <a title="US Dollar" onclick="$('input[name=\'currency_code\']').attr('value', 'USD'); $(this).parent().parent().submit();">$</a>
                      <a title="Гривна" onclick="$('input[name=\'currency_code\']').attr('value', 'UAH'); $(this).parent().parent().submit();">
                        <font class="ruble"> грн.</font>
                      </a>
                      <a title="Рубль"><b><font class="ruble">₽</font></b></a>
                      <input type="hidden" name="currency_code" value="">
                      <input type="hidden" name="redirect" value="http://lcosmetics-shop.ru/index.php?route=common/home">
                    </div>
                  </form>
                </div>
              </div>
              <div id="tg-links">
                <div class="content">
                  <ul>
                    <li><a href="http://lcosmetics-shop.ru/index.php?route=common/home">Главная</a></li>
                    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/wishlist" id="wishlist-total">Закладки (0)</a></li>
                    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/account">Моя информация</a></li>
                    <li><a href="http://lcosmetics-shop.ru/index.php?route=checkout/cart">Корзина</a></li>
                    <li><a href="http://lcosmetics-shop.ru/index.php?route=checkout/checkout">Оформление заказа</a></li>
                  </ul>
                </div>
              </div>
              <div id="search">
                <div class="button-search"></div>
                <input type="text" name="search" placeholder="Поиск" value="">
              </div>
            </div>
          </div>
        </div>
        <!-- Slider -->


        <div id="slider" class="slider-holder">
          <div class="background">
            <div class="shadow"></div>
            <div class="pattern">
              <div class="container">
                <div class="fullwidthbanner-container slider-container-1" style="overflow: visible;">
                  <div class="fullwidthbanner slider-1 revslider-initialised tp-simpleresponsive" id="revslider-355" style="height: 600px;">
                    <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: 600px;">
                      <li data-transition="slidevertical" data-slotamount="10" data-masterspeed="300" data-link="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_136" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
                        <div class="slotholder"><img src="<?php echo get_template_directory_uri(); ?>/img/New1-1.jpg" data-fullwidthcentering="on" class="defaultimg" style="width: 1250px; height: 625px; position: absolute; left: -25px; top: -22.5px; opacity: 0;"></div>
                        <div class="caption new_element_1_1 sfl tp-caption start" data-x="120" data-y="20" data-speed="600" data-start="500" data-easing="easeInQuart" data-endspeed="600" data-endeasing="easeInQuad" style="font-size: 12px; padding: 0px; margin: 0px; border-width: 0px; line-height: 15px; white-space: nowrap; min-width: 0px; min-height: 0px; transform: scale(1, 1) rotate(0deg); opacity: 0; left: 70px; top: 20px; visibility: visible;"></div>
                        <div class="tp-caption sft slidelink" style="z-index: 2; cursor: pointer; font-size: 12px; padding: 0px; margin: 0px; border-width: 0px; line-height: 0px; white-space: nowrap; min-width: 0px; min-height: 0px; transform: scale(1, 1) rotate(0deg); opacity: 0; left: 0px; top: -50px; visibility: visible;" data-x="0" data-y="0" data-linktoslide="no" data-start="0">
                          <a target="_self" href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_136">
                            <div></div>
                          </a>
                        </div>
                      </li>
                      <li data-transition="slidevertical" data-slotamount="10" data-masterspeed="300" data-link="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_137" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 1;">
                        <div class="slotholder"><img src="<?php echo get_template_directory_uri(); ?>/img/New2-1.jpg" data-fullwidthcentering="on" class="defaultimg" style="width: 1250px; height: 625px; position: absolute; left: -25px; top: -22.5px; opacity: 0;"></div>
                        <div class="tp-caption sft slidelink" style="z-index: 2; cursor: pointer; font-size: 12px; padding: 0px; margin: 0px; border-width: 0px; line-height: 0px; white-space: nowrap; min-width: 0px; min-height: 0px; transform: scale(1, 1) rotate(0deg); opacity: 0; left: 0px; top: -50px; visibility: visible;" data-x="0" data-y="0" data-linktoslide="no" data-start="0">
                          <a target="_self" href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_137">
                            <div></div>
                          </a>
                        </div>
                      </li>
                      <li data-transition="slidevertical" data-slotamount="10" data-masterspeed="300" data-link="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_138" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
                        <div class="slotholder"><img src="<?php echo get_template_directory_uri(); ?>/img/New3-1.jpg" data-fullwidthcentering="on" class="defaultimg" style="width: 1250px; height: 625px; position: absolute; left: -25px; top: -22.5px; opacity: 1;"></div>
                        <div class="tp-caption sft slidelink" style="z-index: 2; cursor: pointer; font-size: 12px; padding: 0px; margin: 0px; border-width: 0px; line-height: 0px; white-space: nowrap; min-width: 0px; min-height: 0px; transform: scale(1, 1) rotate(0deg); opacity: 1; left: 0px; top: 0px; visibility: visible;" data-x="0" data-y="0" data-linktoslide="no" data-start="0">
                          <a target="_self" href="http://lcosmetics-shop.ru/index.php?route=product/category&path=80_138">
                            <div></div>
                          </a>
                        </div>
                      </li>
                      <li data-transition="slidevertical" data-slotamount="10" data-masterspeed="300" data-link="http://lcosmetics-shop.ru/index.php?route=product/category&path=59" style="width: 100%; height: 100%; overflow: hidden;">
                        <div class="slotholder"><img src="<?php echo get_template_directory_uri(); ?>/img/New4.jpg" data-fullwidthcentering="on" class="defaultimg" style="width: 1250px; height: 625px; position: absolute; left: -25px; top: -22.5px; opacity: 0;"></div>
                        <div class="tp-caption sft slidelink" style="z-index:2;" data-x="0" data-y="0" data-linktoslide="no" data-start="0">
                          <a target="_self" href="http://lcosmetics-shop.ru/index.php?route=product/category&path=59">
                            <div></div>
                          </a>
                        </div>
                      </li>
                      <li data-transition="slidevertical" data-slotamount="10" data-masterspeed="300" data-link="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_139" style="width: 100%; height: 100%; overflow: hidden;">
                        <div class="slotholder"><img src="<?php echo get_template_directory_uri(); ?>/img/New5.jpg" data-fullwidthcentering="on" class="defaultimg" style="width: 1250px; height: 625px; position: absolute; left: -25px; top: -22.5px; opacity: 0;"></div>
                        <div class="tp-caption sft slidelink" style="z-index:2;" data-x="0" data-y="0" data-linktoslide="no" data-start="0">
                          <a target="_self" href="http://lcosmetics-shop.ru/index.php?route=product/category&path=73_139">
                            <div></div>
                          </a>
                        </div>
                      </li>
                      <li data-transition="slidevertical" data-slotamount="10" data-masterspeed="300" data-link="http://lcosmetics-shop.ru/index.php?route=product/category&path=70_72" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 18; opacity: 0;">
                        <div class="slotholder"><img src="<?php echo get_template_directory_uri(); ?>/img/New6.jpg" data-fullwidthcentering="on" class="defaultimg" style="width: 1250px; height: 625px; position: absolute; left: -25px; top: -22.5px; opacity: 0;"></div>
                        <div class="tp-caption sft slidelink" style="z-index: 2;" data-x="0" data-y="0" data-linktoslide="no" data-start="0">
                          <a target="_self" href="http://lcosmetics-shop.ru/index.php?route=product/category&path=70_72">
                            <div></div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="tp-loader" style="display: none;"></div>
                    <div class="tp-bannertimer" style="visibility: hidden; width: 84.9855%; overflow: hidden;"></div>
                  </div>
                  <div class="tp-bullets simplebullets round" style="bottom: 20px; left: 50%; margin-left: 0px;">
                    <div class="bullet first"></div>
                    <div class="bullet"></div>
                    <div class="bullet selected"></div>
                    <div class="bullet"></div>
                    <div class="bullet"></div>
                    <div class="bullet last"></div>
                    <div class="tpclear"></div>
                  </div>
                  <div style="visibility: hidden;" class="tp-leftarrow tparrows round"></div>
                  <div style="visibility: hidden;" class="tp-rightarrow tparrows round"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="container">
          <div id="notification"></div>
          <div id="content">
            <div class="clearfix"></div>
            <div class="welcome">Добро пожаловать в L'Cosmetics </div>
            <p style="text-align: center;"><span style="font-size:12px;"><strong><span style="color:#cc0000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=91_93">Аксессуары</a></span><span style="color:#cc0000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=120"><span style="color:#cc0000;">Новинки</span></a><span style="color:#cc0000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=91_92"><span style="color:#cc0000;">Основа для мыловарения</span></a><span style="color:#cc0000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color:#cc0000;"><a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=91_94">Подарочные наборы</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong>
          </span>
        </p>
        <p style="text-align: center;">
          <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=91_93"><img alt="" height="214" src="<?php echo get_template_directory_uri(); ?>/img/Acses.jpg" width="285"></a>&nbsp;
          <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=120"><img alt="" height="214" src="<?php echo get_template_directory_uri(); ?>/img/New.jpg" width="285"></a>&nbsp;
          <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=91_92"><img alt="" height="214" src="<?php echo get_template_directory_uri(); ?>/img/Osnova.jpg" width="285"></a>&nbsp;
          <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=91_94"><img alt="" height="214" src="<?php echo get_template_directory_uri(); ?>/img/Skit.jpg" width="285"></a>
        </p>
        <p style="text-align: center;"><span style="font-size:14px;"><span style="color:#cc0000;"><span style="font-family: arial, sans-serif; line-height: 18.2px;">Важно! Пожалуйста,&nbsp;</span><span style="font-weight: bold; font-family: arial, sans-serif; line-height: 18.2px;">перед оплатой уточняйте наличие товара</span><span style="font-family: arial, sans-serif; line-height: 18.2px;">&nbsp;на складе по телефону: +7 (981) 880-95-55</span></span>
      </span>
    </p>
    <div class="box">
      <div class="box-heading">Рекомендуем</div>
    </div>
    <div class="tg_category_tab">
      <div id="tgfeaturedslide" class="tg-featured">
        <a class="arr2buttons next" href="http://lcosmetics-shop.ru/#">right</a>
        <a class="arr2buttons prev" href="http://lcosmetics-shop.ru/#">left</a>
        <div class="viewport">
          <div class="overview" style="width: 3248px; left: -1160px;">
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=464"><img src="<?php echo get_template_directory_uri(); ?>/img/Man-225x169_0.jpg" alt="NATURE'S DREAM MAN " title="NATURE'S DREAM MAN "></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=464">NATURE'S DREAM MAN ...</a></div>
              <div class="price">
                700.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('464');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('464');"></a>
                </div>
                <a onclick="themeglobal_addToCart('464');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=462"><img src="<?php echo get_template_directory_uri(); ?>/img/-кофейный-225x169_0.jpg" alt="NATURE'S DREAM WOMEN - Молочно-кофейный" title="NATURE'S DREAM WOMEN - Молочно-кофейный"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=462">NATURE'S DREAM WOMEN - Молочно...</a></div>
              <div class="price">
                700.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('462');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('462');"></a>
                </div>
                <a onclick="themeglobal_addToCart('462');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=463"><img src="<?php echo get_template_directory_uri(); ?>/img/Fruct-225x169_0.jpg" alt="NATURE'S DREAM WOMEN - Фруктовый" title="NATURE'S DREAM WOMEN - Фруктовый"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=463">NATURE'S DREAM WOMEN - Фруктов...</a></div>
              <div class="price">
                700.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('463');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('463');"></a>
                </div>
                <a onclick="themeglobal_addToCart('463');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=451"><img src="<?php echo get_template_directory_uri(); ?>/img/Morskaya_sol_lavanda-225x169_0.jpg" alt="Морская соль «Лаванда антистресс» с пеной 350 гр" title="Морская соль «Лаванда антистресс» с пеной 350 гр"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=451">Морская соль «Лаванда антистре...</a></div>
              <div class="price">
                342.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('451');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('451');"></a>
                </div>
                <a onclick="themeglobal_addToCart('451');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=98"><img src="<?php echo get_template_directory_uri(); ?>/img/Kozyemoloko1000x750-225x169_0.jpg" alt="Козье молоко" title="Козье молоко"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=98">Козье молоко...</a></div>
              <div class="price">
                1134.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('98');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('98');"></a>
                </div>
                <a onclick="themeglobal_addToCart('98');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=53"><img src="<?php echo get_template_directory_uri(); ?>/img/Premium «Интенсивное питание»-225x169_0.jpg" alt="Подарочный набор Premium «Интенсивное питание»" title="Подарочный набор Premium «Интенсивное питание»"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=53">Подарочный набор Premium «Инте...</a></div>
              <div class="price">
                990.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('53');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('53');"></a>
                </div>
                <a onclick="themeglobal_addToCart('53');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=54"><img src="<?php echo get_template_directory_uri(); ?>/img/-набор Premium «Интенсивное увлажнение»-225x169_0.jpg" alt="Подарочный набор Premium «Интенсивное увлажнение»" title="Подарочный набор Premium «Интенсивное увлажнение»"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=54">Подарочный набор Premium «Инте...</a></div>
              <div class="price">
                990.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('54');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('54');"></a>
                </div>
                <a onclick="themeglobal_addToCart('54');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=492"><img src="<?php echo get_template_directory_uri(); ?>/img/-купаж-225x169_0.jpg" alt="Подарочный набор Luxe  «Ягодный купаж»" title="Подарочный набор Luxe  «Ягодный купаж»"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=492">Подарочный набор Luxe  «Ягодны...</a></div>
              <div class="price">
                1332.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('492');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('492');"></a>
                </div>
                <a onclick="themeglobal_addToCart('492');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=529"><img src="<?php echo get_template_directory_uri(); ?>/img/L-225x169_0.jpg" alt="Морская соль для ванны c лавандой" title="Морская соль для ванны c лавандой"></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=529">Морская соль для ванны c лаван...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('529');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('529');"></a>
                </div>
                <a onclick="themeglobal_addToCart('529');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=528"><img src="<?php echo get_template_directory_uri(); ?>/img/RO-225x169_0.jpg" alt="Морская соль для ванны c розой" title="Морская соль для ванны c розой"></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=528">Морская соль для ванны c розой...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('528');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('528');"></a>
                </div>
                <a onclick="themeglobal_addToCart('528');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=530"><img src="<?php echo get_template_directory_uri(); ?>/img/R-225x169_0.jpg" alt="Морская соль для ванны с ромашкой" title="Морская соль для ванны с ромашкой"></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=530">Морская соль для ванны с ромаш...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('530');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('530');"></a>
                </div>
                <a onclick="themeglobal_addToCart('530');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=514"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2515 копия-225x169_0.jpg" alt="Вербена (Мыло на маслах)" title="Вербена (Мыло на маслах)"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=514">Вербена (Мыло на маслах)...</a></div>
              <div class="price">
                1350.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('514');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('514');"></a>
                </div>
                <a onclick="themeglobal_addToCart('514');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=515"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2528 копия-225x169_0.jpg" alt="Кофе. Мыло со скрабирующими частичками (Мыло на маслах)" title="Кофе. Мыло со скрабирующими частичками (Мыло на маслах)"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=515">Кофе. Мыло со скрабирующими ча...</a></div>
              <div class="price">
                1350.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('515');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('515');"></a>
                </div>
                <a onclick="themeglobal_addToCart('515');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=513"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2518 копия-225x169_0.jpg" alt="Лаванда (Мыло на маслах)" title="Лаванда (Мыло на маслах)"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=513">Лаванда (Мыло на маслах)...</a></div>
              <div class="price">
                1350.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="featuredcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('513');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('513');"></a>
                </div>
                <a onclick="themeglobal_addToCart('513');" class="addtocart" title="Купить"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slideshow">
      <div id="slideshow0" class="nivoSlider" style="width: 1155px; height: 400px; position: relative; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g1-1155x400_0.jpg&quot;) no-repeat;">
        <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=130" class="nivo-imageLink" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/img/g1-1155x400_0.jpg" alt="Наконец-то можем представить нашу новую серию на основе глины." style="display: none;"></a>
        <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=130" class="nivo-imageLink" style="display: block;"><img src="<?php echo get_template_directory_uri(); ?>/img/g2-1155x400_0.jpg" alt="Маска для лица" style="display: none;"></a>
        <a href="http://lcosmetics-shop.ru/index.php?route=product/category&path=130" class="nivo-imageLink" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/img/g3-1155x400_0.jpg" alt="Маска для лица" style="display: none;"></a>
        <div class="nivo-caption" style="opacity: 0;">
          <p></p>
        </div>
        <div class="nivo-directionNav" style="display: none;"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>
        <div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control active" rel="1">2</a><a class="nivo-control" rel="2">3</a></div>
        <div class="nivo-box" style="opacity: 1; left: 0px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) 0px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 144px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -144px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 288px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -288px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 432px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -432px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 576px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -576px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 720px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -720px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 864px; top: 0px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -864px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 1008px; top: 0px; width: 147px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -1008px 0px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 0px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) 0px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 144px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -144px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 288px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -288px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 432px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -432px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 576px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -576px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 720px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -720px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 864px; top: 100px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -864px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 1008px; top: 100px; width: 147px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -1008px -100px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 0px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) 0px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 144px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -144px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 288px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -288px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 432px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -432px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 576px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -576px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 720px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -720px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 864px; top: 200px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -864px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 1008px; top: 200px; width: 147px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -1008px -200px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 0px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) 0px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 144px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -144px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 288px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -288px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 432px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -432px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 576px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -576px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 720px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -720px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 864px; top: 300px; width: 144px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -864px -300px no-repeat;"></div>
        <div class="nivo-box" style="opacity: 1; left: 1008px; top: 300px; width: 147px; height: 100px; background: url(&quot;http://lcosmetics-shop.ru/image/cache/data/Product/Glina/baner/g2-1155x400_0.jpg&quot;) -1008px -300px no-repeat;"></div>
      </div>
    </div>
    <p>
      <a href="http://lcosmetics-shop.ru/index.php?route=blog/news&blid=71"><img alt="" height="183" src="<?php echo get_template_directory_uri(); ?>/img/b1.jpg" width="558"></a>&nbsp;
      <a href="http://lcosmetics-shop.ru/index.php?route=blog/news&blid=69"><img alt="" height="183" src="<?php echo get_template_directory_uri(); ?>/img/b2.jpg" width="596"></a>
    </p>
    <p><span style="font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 21px;">Приглашаем всех на премьеру нашего ролика о том, как создается мыло ручной работы.</span></p>

    <p><a href="http://lcosmetics-shop.ru/index.php?route=blog/article&blid=69&article_id=185">подробнее о ролике</a>&nbsp;&gt;&gt;&gt;</p>
    <div id="wrapper">
      <div class="tg_category_tab" id="tg_hazumi_featured_category">
        <ul class="tg_tab" id="featurcateg0">
          <li><a href="http://lcosmetics-shop.ru/#tg_hazumi_featured_category-00" class="selected">Продукты на натуральной глине</a></li>
          <li><a href="http://lcosmetics-shop.ru/#tg_hazumi_featured_category-10">Маски для тела 150 мл</a></li>
          <li><a href="http://lcosmetics-shop.ru/#tg_hazumi_featured_category-20">Скрабы сахарные 300 г</a></li>
          <li><a href="http://lcosmetics-shop.ru/#tg_hazumi_featured_category-30">Йогрут - пены для ванны 500 мл</a></li>
        </ul>
        <div id="tg_hazumi_featured_category-00" style="display: block;">
          <div class="box-content">
            <div id="horizslide" class="tabpro">
              <a class="arr2buttons next" href="http://lcosmetics-shop.ru/#">right</a>
              <a class="arr2buttons prev" href="http://lcosmetics-shop.ru/#">left</a>
              <div class="viewport">
                <div class="overview" style="width: 1624px; left: -232px;">
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=457"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2205-225x170_0.jpg" alt="Маска для волос  &quot;Витаминизированная&quot; для сильно поврежденных волос" title="Маска для волос  &quot;Витаминизированная&quot; для сильно поврежденных волос"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=457">Маска для волос  "Витаминизиро...</a></div>
                    <div class="price">
                      315.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('457');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('457');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('457');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=444"><img src="<?php echo get_template_directory_uri(); ?>/img/-для лица. Увлажнение и регенерация. Белая глина с огурцом и авокадо.-225x170_0.jpg" alt="Маска для лица «Очищение и обновление» Голубая кембрийская глина" title="Маска для лица «Очищение и обновление» Голубая кембрийская глина"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=444">Маска для лица «Очищение и обн...</a></div>
                    <div class="price">
                      333.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-5"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('444');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('444');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('444');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=443"><img src="<?php echo get_template_directory_uri(); ?>/img/-для лица. Очищение и обновление. Голубая кембрийская глина.-225x170_0.jpg" alt="Маска для лица «Увлажнение и регенерация» Белая глина с огурцом и авокадо" title="Маска для лица «Увлажнение и регенерация» Белая глина с огурцом и авокадо"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=443">Маска для лица «Увлажнение и р...</a></div>
                    <div class="price">
                      340.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('443');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('443');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('443');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=501"><img src="<?php echo get_template_directory_uri(); ?>/img/-для лица-225x170_0.jpg" alt="Маска для лица «Увлажнение и регенерация» Белая глина с огурцом и авокадо" title="Маска для лица «Увлажнение и регенерация» Белая глина с огурцом и авокадо"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=501">Маска для лица «Увлажнение и р...</a></div>
                    <div class="price">
                      340.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('501');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('501');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('501');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=502"><img src="<?php echo get_template_directory_uri(); ?>/img/Mask-225x170_0.jpg" alt="Маска для лица «Увлажнение и регенерация» Белая глина с огурцом и авокадо" title="Маска для лица «Увлажнение и регенерация» Белая глина с огурцом и авокадо"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=502">Маска для лица «Увлажнение и р...</a></div>
                    <div class="price">
                      340.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('502');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('502');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('502');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=447"><img src="<?php echo get_template_directory_uri(); ?>/img/-для тела с глиной и морскими водорослями.-225x170_0.jpg" alt="Обертывание для тела с глиной и минералами Мертвого моря" title="Обертывание для тела с глиной и минералами Мертвого моря"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=447">Обертывание для тела с глиной ...</a></div>
                    <div class="price">
                      405.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('447');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('447');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('447');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=446"><img src="<?php echo get_template_directory_uri(); ?>/img/-для тела с глиной и минералами Мертвого моря.-225x170_0.jpg" alt="Обертывание для тела с глиной и морскими водорослями." title="Обертывание для тела с глиной и морскими водорослями."></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=446">Обертывание для тела с глиной ...</a></div>
                    <div class="price">
                      396.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('446');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('446');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('446');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end div box content -->
        </div>
        <div id="tg_hazumi_featured_category-10" style="display: none;">
          <div class="box-content">
            <div id="horizslide" class="tabpro">
              <a class="arr2buttons next" href="http://lcosmetics-shop.ru/#">right</a>
              <a class="arr2buttons prev disable" href="http://lcosmetics-shop.ru/#">left</a>
              <div class="viewport">
                <div class="overview" style="width: 1856px; left: 0px;">
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=226"><img src="<?php echo get_template_directory_uri(); ?>/img/-дл ялица и тела белый шоколад 2-225x170_0.jpg" alt="Маска для лица и тела «Белый шоколад» Питательный 150 мл" title="Маска для лица и тела «Белый шоколад» Питательный 150 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=226">Маска для лица и тела «Белый ш...</a></div>
                    <div class="price">
                      396.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('226');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('226');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('226');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=228"><img src="<?php echo get_template_directory_uri(); ?>/img/Maska_gray-225x170_0.jpg" alt="Маска для лица и тела «Грейпфрут» Питательный 150 мл" title="Маска для лица и тела «Грейпфрут» Питательный 150 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=228">Маска для лица и тела «Грейпфр...</a></div>
                    <div class="price">
                      313.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('228');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('228');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('228');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=225"><img src="<?php echo get_template_directory_uri(); ?>/img/Maski-225x170_0.jpg" alt="Маска для лица и тела «Медовая» Объем 150 мл" title="Маска для лица и тела «Медовая» Объем 150 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=225">Маска для лица и тела «Медовая...</a></div>
                    <div class="price">
                      333.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('225');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('225');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('225');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=229"><img src="<?php echo get_template_directory_uri(); ?>/img/-для лица и тела с антицеллюлитным эффектом 2-225x170_0.jpg" alt="Маска для лица и тела «Шоколадная» с антицеллюлитным эффектом 150 мл" title="Маска для лица и тела «Шоколадная» с антицеллюлитным эффектом 150 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=229">Маска для лица и тела «Шоколад...</a></div>
                    <div class="price">
                      333.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-5"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('229');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('229');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('229');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=230"><img src="<?php echo get_template_directory_uri(); ?>/img/2-225x170_0.jpg" alt="Маска для лица и тела «Шоколадная» с лифтинг-эффектом 150 мл" title="Маска для лица и тела «Шоколадная» с лифтинг-эффектом 150 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=230">Маска для лица и тела «Шоколад...</a></div>
                    <div class="price">
                      333.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('230');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('230');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('230');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=227"><img src="<?php echo get_template_directory_uri(); ?>/img/Maska_kofeinaya-225x170_0.jpg" alt="Маска-пилинг для тела «Кофейная» Объем 150 мл" title="Маска-пилинг для тела «Кофейная» Объем 150 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=227">Маска-пилинг для тела «Кофейна...</a></div>
                    <div class="price">
                      313.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('227');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('227');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('227');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=447"><img src="<?php echo get_template_directory_uri(); ?>/img/-для тела с глиной и морскими водорослями.-225x170_0.jpg" alt="Обертывание для тела с глиной и минералами Мертвого моря" title="Обертывание для тела с глиной и минералами Мертвого моря"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=447">Обертывание для тела с глиной ...</a></div>
                    <div class="price">
                      405.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('447');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('447');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('447');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=446"><img src="<?php echo get_template_directory_uri(); ?>/img/-для тела с глиной и минералами Мертвого моря.-225x170_0.jpg" alt="Обертывание для тела с глиной и морскими водорослями." title="Обертывание для тела с глиной и морскими водорослями."></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=446">Обертывание для тела с глиной ...</a></div>
                    <div class="price">
                      396.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('446');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('446');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('446');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end div box content -->
        </div>
        <div id="tg_hazumi_featured_category-20" style="display: none;">
          <div class="box-content">
            <div id="horizslide" class="tabpro">
              <a class="arr2buttons next" href="http://lcosmetics-shop.ru/#">right</a>
              <a class="arr2buttons prev disable" href="http://lcosmetics-shop.ru/#">left</a>
              <div class="viewport">
                <div class="overview" style="width: 1856px; left: 0px;">
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=243"><img src="<?php echo get_template_directory_uri(); ?>/img/Apelsinskoricei1000x750-225x170_0.jpg" alt="Скраб для тела сахарный «Апельсин с корицей» с корицей 300 гр" title="Скраб для тела сахарный «Апельсин с корицей» с корицей 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=243">Скраб для тела сахарный «Апель...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('243');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('243');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('243');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=257"><img src="<?php echo get_template_directory_uri(); ?>/img/klubnika1000x750-225x170_0.jpg" alt="Скраб для тела сахарный «Клубника в сливках» 300 гр" title="Скраб для тела сахарный «Клубника в сливках» 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=257">Скраб для тела сахарный «Клубн...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('257');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('257');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('257');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=258"><img src="<?php echo get_template_directory_uri(); ?>/img/kozemoloko1000x750-225x170_0.jpg" alt="Скраб для тела сахарный «Козье молоко» 300 гр" title="Скраб для тела сахарный «Козье молоко» 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=258">Скраб для тела сахарный «Козье...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('258');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('258');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('258');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=247"><img src="<?php echo get_template_directory_uri(); ?>/img/kofe 1000x750-225x170_0.jpg" alt="Скраб для тела сахарный «Кофе» 300 гр" title="Скраб для тела сахарный «Кофе» 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=247">Скраб для тела сахарный «Кофе»...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('247');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('247');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('247');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=249"><img src="<?php echo get_template_directory_uri(); ?>/img/molochniyshokolad1000x750-225x170_0.jpg" alt="Скраб для тела сахарный «Молочный шоколад» 300 гр" title="Скраб для тела сахарный «Молочный шоколад» 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=249">Скраб для тела сахарный «Молоч...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('249');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('249');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('249');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=250"><img src="<?php echo get_template_directory_uri(); ?>/img/raiskiycitrus1000x750-225x170_0.jpg" alt="Скраб для тела сахарный «Райский цитрус» (с эфирным маслом грейпфрута) 300 гр" title="Скраб для тела сахарный «Райский цитрус» (с эфирным маслом грейпфрута) 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=250">Скраб для тела сахарный «Райск...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('250');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('250');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('250');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=251"><img src="<?php echo get_template_directory_uri(); ?>/img/Marokanglina-225x170_0.jpg" alt="Скраб для тела сахарный «С марокканской глиной» 300 гр" title="Скраб для тела сахарный «С марокканской глиной» 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=251">Скраб для тела сахарный «С мар...</a></div>
                    <div class="price">
                      342.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('251');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('251');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('251');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=254"><img src="<?php echo get_template_directory_uri(); ?>/img/socharbuz-225x170_0.jpg" alt="Скраб для тела сахарный «Сочный арбуз» 300 гр" title="Скраб для тела сахарный «Сочный арбуз» 300 гр"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=254">Скраб для тела сахарный «Сочны...</a></div>
                    <div class="price">
                      297.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-5"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('254');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('254');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('254');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end div box content -->
        </div>
        <div id="tg_hazumi_featured_category-30" style="display: none;">
          <div class="box-content">
            <div id="horizslide" class="tabpro">
              <a class="arr2buttons next disable" href="http://lcosmetics-shop.ru/#">right</a>
              <a class="arr2buttons prev" href="http://lcosmetics-shop.ru/#">left</a>
              <div class="viewport">
                <div class="overview" style="width: 1160px; left: -232px;">
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=327"><img src="<?php echo get_template_directory_uri(); ?>/img/Pena_dlya_vann_graphruct 2-225x170_0.jpg" alt="Грейпфрут и лемонграсс 500 мл" title="Грейпфрут и лемонграсс 500 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=327">Грейпфрут и лемонграсс 500 мл...</a></div>
                    <div class="price">
                      270.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('327');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('327');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('327');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=328"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_5558 копия-225x170_0.jpg" alt="Земляника со сливками 500 мл" title="Земляника со сливками 500 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=328">Земляника со сливками 500 мл...</a></div>
                    <div class="price">
                      270.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('328');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('328');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('328');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=325"><img src="<?php echo get_template_directory_uri(); ?>/img/Pena_dlya_vann_lavanda_1-225x170_0.jpg" alt="Лаванда и вербена 500 мл" title="Лаванда и вербена 500 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=325">Лаванда и вербена 500 мл...</a></div>
                    <div class="price">
                      270.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('325');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('325');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('325');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=326"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_5560 копия-225x170_0.jpg" alt="СПА с морскими водорослями и минералами 500 мл" title="СПА с морскими водорослями и минералами 500 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=326">СПА с морскими водорослями и м...</a></div>
                    <div class="price">
                      270.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('326');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('326');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('326');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                  <div class="item block">
                    <div class="image">
                      <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=324"><img src="<?php echo get_template_directory_uri(); ?>/img/Pena_dlya_vann_shokolad_i_moloko-225x170_0.jpg" alt="Шоколад с молоком 500 мл" title="Шоколад с молоком 500 мл"></a>
                    </div>
                    <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=324">Шоколад с молоком 500 мл...</a></div>
                    <div class="price">
                      270.00
                      <font class="ruble">₽</font>
                    </div>
                    <div class="rating">
                      <div class="tg-rating-0"></div>
                    </div>
                    <div class="cart hide-phone">
                      <div class="wishlist">
                        <a title="В закладки" onclick="themeglobal_addToWishList('324');"></a>
                      </div>
                      <div class="compare">
                        <a title="В сравнение" onclick="themeglobal_addToCompare('324');"></a>
                      </div>
                      <a onclick="themeglobal_addToCart('324');" class="addtocart" title="Купить"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end div box content -->
        </div>
      </div>
    </div>
    <div class="box">
      <div class="box-heading">Лидеры продаж</div>
    </div>
    <div class="tg_category_tab">
      <div id="tgfeaturedslide" class="tg-featured">
        <a class="arr2buttons next" href="http://lcosmetics-shop.ru/#">right</a>
        <a class="arr2buttons prev" href="http://lcosmetics-shop.ru/#">left</a>
        <div class="viewport">
          <div class="overview" style="width: 3480px; left: -1160px;">
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=236"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2602-400x400_0.jpg" alt="Твердый шампунь-кондиционер «Репейник объем»" title="Твердый шампунь-кондиционер «Репейник объем»"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=236">Твердый шампунь-кондиционер «Р...</a></div>
              <div class="price">
                216.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-5"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('236');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('236');"></a>
                </div>
                <a onclick="themeglobal_addToCart('236');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=233"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2603-400x400_0.jpg" alt="Твердый шампунь-кондиционер «Хмель» укрепление и стимуляция" title="Твердый шампунь-кондиционер «Хмель» укрепление и стимуляция"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=233">Твердый шампунь-кондиционер «Х...</a></div>
              <div class="price">
                216.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('233');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('233');"></a>
                </div>
                <a onclick="themeglobal_addToCart('233');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=237"><img src="<?php echo get_template_directory_uri(); ?>/img/Idealform-400x400_0.jpg" alt="Массажная плитка «Идеальная форма» с экстрактом кофе и кофейными зернами 60 гр" title="Массажная плитка «Идеальная форма» с экстрактом кофе и кофейными зернами 60 гр"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=237">Массажная плитка «Идеальная фо...</a></div>
              <div class="price">
                216.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('237');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('237');"></a>
                </div>
                <a onclick="themeglobal_addToCart('237');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=240"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2576-400x400_0.jpg" alt="Массажная плитка «Секрет Клеопатры» интенсивное питание 60 гр" title="Массажная плитка «Секрет Клеопатры» интенсивное питание 60 гр"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=240">Массажная плитка «Секрет Клеоп...</a></div>
              <div class="price">
                216.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('240');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('240');"></a>
                </div>
                <a onclick="themeglobal_addToCart('240');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=198"><img src="<?php echo get_template_directory_uri(); ?>/img/-масло 3-1-400x400_0.jpg" alt="Крем-масло «Интенсивное питание» 150 мл" title="Крем-масло «Интенсивное питание» 150 мл"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=198">Крем-масло «Интенсивное питани...</a></div>
              <div class="price">
                396.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-5"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('198');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('198');"></a>
                </div>
                <a onclick="themeglobal_addToCart('198');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=229"><img src="<?php echo get_template_directory_uri(); ?>/img/-для лица и тела с антицеллюлитным эффектом 2-400x400_0.jpg" alt="Маска для лица и тела «Шоколадная» с антицеллюлитным эффектом 150 мл" title="Маска для лица и тела «Шоколадная» с антицеллюлитным эффектом 150 мл"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=229">Маска для лица и тела «Шоколад...</a></div>
              <div class="price">
                333.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-5"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('229');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('229');"></a>
                </div>
                <a onclick="themeglobal_addToCart('229');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=254"><img src="<?php echo get_template_directory_uri(); ?>/img/socharbuz-400x400_0.jpg" alt="Скраб для тела сахарный «Сочный арбуз» 300 гр" title="Скраб для тела сахарный «Сочный арбуз» 300 гр"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=254">Скраб для тела сахарный «Сочны...</a></div>
              <div class="price">
                297.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-5"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('254');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('254');"></a>
                </div>
                <a onclick="themeglobal_addToCart('254');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=238"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2573-400x400_0.jpg" alt="Массажная плитка «Клубничный соблазн» со вкусом клубники 60 гр" title="Массажная плитка «Клубничный соблазн» со вкусом клубники 60 гр"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=238">Массажная плитка «Клубничный с...</a></div>
              <div class="price">
                216.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('238');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('238');"></a>
                </div>
                <a onclick="themeglobal_addToCart('238');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=202"><img src="<?php echo get_template_directory_uri(); ?>/img/Maska_piling_vinograd i beliy chay-400x400_0.jpg" alt="Маска-пилинг «Виноград и белый чай»" title="Маска-пилинг «Виноград и белый чай»"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=202">Маска-пилинг «Виноград и белый...</a></div>
              <div class="price">
                333.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('202');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('202');"></a>
                </div>
                <a onclick="themeglobal_addToCart('202');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=200"><img src="<?php echo get_template_directory_uri(); ?>/img/-масло 1-2-400x400_0.jpg" alt="Крем-масло «Интенсивное восстановление» 150 мл" title="Крем-масло «Интенсивное восстановление» 150 мл"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=200">Крем-масло «Интенсивное восста...</a></div>
              <div class="price">
                396.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('200');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('200');"></a>
                </div>
                <a onclick="themeglobal_addToCart('200');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=225"><img src="<?php echo get_template_directory_uri(); ?>/img/Maski-400x400_0.jpg" alt="Маска для лица и тела «Медовая» Объем 150 мл" title="Маска для лица и тела «Медовая» Объем 150 мл"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=225">Маска для лица и тела «Медовая...</a></div>
              <div class="price">
                333.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('225');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('225');"></a>
                </div>
                <a onclick="themeglobal_addToCart('225');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=126"><img src="<?php echo get_template_directory_uri(); ?>/img/Klibnika_vYougorte1000x750-400x400_0.jpg" alt="Клубника в йогурте" title="Клубника в йогурте"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=126">Клубника в йогурте...</a></div>
              <div class="price">
                113.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('126');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('126');"></a>
                </div>
                <a onclick="themeglobal_addToCart('126');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=461"><img src="<?php echo get_template_directory_uri(); ?>/img/4-400x400_0.jpg" alt="Крем для лица «Anti age» с маслом жожоба и коллагеном" title="Крем для лица «Anti age» с маслом жожоба и коллагеном"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=461">Крем для лица «Anti age» с мас...</a></div>
              <div class="price">
                351.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('461');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('461');"></a>
                </div>
                <a onclick="themeglobal_addToCart('461');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=230"><img src="<?php echo get_template_directory_uri(); ?>/img/2-400x400_0.jpg" alt="Маска для лица и тела «Шоколадная» с лифтинг-эффектом 150 мл" title="Маска для лица и тела «Шоколадная» с лифтинг-эффектом 150 мл"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=230">Маска для лица и тела «Шоколад...</a></div>
              <div class="price">
                333.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('230');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('230');"></a>
                </div>
                <a onclick="themeglobal_addToCart('230');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=127"><img src="<?php echo get_template_directory_uri(); ?>/img/Kozyemoloko1000x750-400x400_0.jpg" alt="Козье молоко" title="Козье молоко"></a>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=127">Козье молоко...</a></div>
              <div class="price">
                113.00
                <font class="ruble">₽</font>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="bestsellercart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('127');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('127');"></a>
                </div>
                <a onclick="themeglobal_addToCart('127');" class="addtocart" title="Купить"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="box-heading">Акции</div>
    </div>
    <div class="tg_category_tab">
      <div id="tgfeaturedslide" class="tg-featured">
        <a class="arr2buttons next" href="http://lcosmetics-shop.ru/#">right</a>
        <a class="arr2buttons prev" href="http://lcosmetics-shop.ru/#">left</a>
        <div class="viewport">
          <div class="overview" style="width: 6264px; left: -1160px;">
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=356"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0571-225x169_0.jpg" alt="Brilliant SLS Free 1 кг" title="Brilliant SLS Free 1 кг"></a>
                <span class="sale">28%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=356">Brilliant SLS Free 1 кг...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">230.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('356');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('356');"></a>
                </div>
                <a onclick="themeglobal_addToCart('356');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=355"><img src="<?php echo get_template_directory_uri(); ?>/img/wва-225x169_0.jpg" alt="Brilliant SLS Free 10 кг" title="Brilliant SLS Free 10 кг"></a>
                <span class="sale">28%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=355">Brilliant SLS Free 10 кг...</a></div>
              <div class="price">
                <span class="price-old">3200.00<font class="ruble">₽</font></span> <span class="price-new">2300.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('355');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('355');"></a>
                </div>
                <a onclick="themeglobal_addToCart('355');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=358"><img src="<?php echo get_template_directory_uri(); ?>/img/white IMG_8322 web-225x169_0.jpg" alt="Brilliant SLS Free white 10 кг" title="Brilliant SLS Free white 10 кг"></a>
                <span class="sale">28%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=358">Brilliant SLS Free white 10 кг...</a></div>
              <div class="price">
                <span class="price-old">3200.00<font class="ruble">₽</font></span> <span class="price-new">2300.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('358');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('358');"></a>
                </div>
                <a onclick="themeglobal_addToCart('358');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=359"><img src="<?php echo get_template_directory_uri(); ?>/img/wIMG_0571-225x169_0.jpg" alt="Brilliant SLS Free white1 кг" title="Brilliant SLS Free white1 кг"></a>
                <span class="sale">28%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=359">Brilliant SLS Free white1 кг...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">230.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('359');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('359');"></a>
                </div>
                <a onclick="themeglobal_addToCart('359');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=75"><img src="<?php echo get_template_directory_uri(); ?>/img/TLASLENTA8-225x169_0.jpg" alt="Атласная лента 0,6 см для набора 200 см" title="Атласная лента 0,6 см для набора 200 см"></a>
                <span class="sale">28%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=75">Атласная лента 0,6 см для набо...</a></div>
              <div class="price">
                <span class="price-old">40.00<font class="ruble">₽</font></span> <span class="price-new">29.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('75');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('75');"></a>
                </div>
                <a onclick="themeglobal_addToCart('75');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=351"><img src="<?php echo get_template_directory_uri(); ?>/img/TLASLENTAmen-225x169_0.jpg" alt="Атласная лента 2,5 см для набора 169 см" title="Атласная лента 2,5 см для набора 169 см"></a>
                <span class="sale">36%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=351">Атласная лента 2,5 см для набо...</a></div>
              <div class="price">
                <span class="price-old">45.00<font class="ruble">₽</font></span> <span class="price-new">29.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('351');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('351');"></a>
                </div>
                <a onclick="themeglobal_addToCart('351');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=352"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_1282-225x169_0.jpg" alt="Бумага упаковочная (бумага тишью) цветная " title="Бумага упаковочная (бумага тишью) цветная "></a>
                <span class="sale">33%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=352">Бумага упаковочная (бумага тиш...</a></div>
              <div class="price">
                <span class="price-old">40.00<font class="ruble">₽</font></span> <span class="price-new">27.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('352');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('352');"></a>
                </div>
                <a onclick="themeglobal_addToCart('352');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=383"><img src="<?php echo get_template_directory_uri(); ?>/img/4-225x169_0.jpg" alt="Крем-мыло Savon à La Crème. Perfume for men 450 мл" title="Крем-мыло Savon à La Crème. Perfume for men 450 мл"></a>
                <span class="sale">5%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=383">Крем-мыло Savon à La Crème. Pe...</a></div>
              <div class="price">
                <span class="price-old">265.00<font class="ruble">₽</font></span> <span class="price-new">252.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('383');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('383');"></a>
                </div>
                <a onclick="themeglobal_addToCart('383');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=384"><img src="<?php echo get_template_directory_uri(); ?>/img/1-225x169_0.jpg" alt="Крем-мыло Savon à La Crème. Perfume for woman 450 мл" title="Крем-мыло Savon à La Crème. Perfume for woman 450 мл"></a>
                <span class="sale">5%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=384">Крем-мыло Savon à La Crème. Pe...</a></div>
              <div class="price">
                <span class="price-old">265.00<font class="ruble">₽</font></span> <span class="price-new">252.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('384');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('384');"></a>
                </div>
                <a onclick="themeglobal_addToCart('384');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=385"><img src="<?php echo get_template_directory_uri(); ?>/img/3-225x169_0.jpg" alt="Крем-мыло Китайская мудрость с экстрактом зеленого чая и женьшеня 450 мл" title="Крем-мыло Китайская мудрость с экстрактом зеленого чая и женьшеня 450 мл"></a>
                <span class="sale">5%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=385">Крем-мыло Китайская мудрость с...</a></div>
              <div class="price">
                <span class="price-old">265.00<font class="ruble">₽</font></span> <span class="price-new">252.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('385');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('385');"></a>
                </div>
                <a onclick="themeglobal_addToCart('385');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=386"><img src="<?php echo get_template_directory_uri(); ?>/img/2-225x169_0.jpg" alt="Крем-мыло Козье молоко гипоаллергенное с экстрактом хлопка 450 мл" title="Крем-мыло Козье молоко гипоаллергенное с экстрактом хлопка 450 мл"></a>
                <span class="sale">5%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=386">Крем-мыло Козье молоко гипоалл...</a></div>
              <div class="price">
                <span class="price-old">265.00<font class="ruble">₽</font></span> <span class="price-new">252.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('386');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('386');"></a>
                </div>
                <a onclick="themeglobal_addToCart('386');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=431"><img src="<?php echo get_template_directory_uri(); ?>/img/Maski_dlya_volos_granat-225x169_0.jpg" alt="Маска для волос «Гранат и ши» Сила и рост  объем 250 мл" title="Маска для волос «Гранат и ши» Сила и рост  объем 250 мл"></a>
                <span class="sale">18%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=431">Маска для волос «Гранат и ши» ...</a></div>
              <div class="price">
                <span class="price-old">353.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('431');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('431');"></a>
                </div>
                <a onclick="themeglobal_addToCart('431');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=432"><img src="<?php echo get_template_directory_uri(); ?>/img/Maski_dlya_volos_zalenni_cay-225x169_0.jpg" alt="Маска для волос «Зеленый чай и пшеница» Восстановление объем 250 мл" title="Маска для волос «Зеленый чай и пшеница» Восстановление объем 250 мл"></a>
                <span class="sale">18%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=432">Маска для волос «Зеленый чай и...</a></div>
              <div class="price">
                <span class="price-old">353.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('432');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('432');"></a>
                </div>
                <a onclick="themeglobal_addToCart('432');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=433"><img src="<?php echo get_template_directory_uri(); ?>/img/Maski_dlya_volos_mango_2-225x169_0.jpg" alt="Маска для волос «Манго и соя» Питание и защита объем 250 мл" title="Маска для волос «Манго и соя» Питание и защита объем 250 мл"></a>
                <span class="sale">18%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=433">Маска для волос «Манго и соя» ...</a></div>
              <div class="price">
                <span class="price-old">353.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('433');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('433');"></a>
                </div>
                <a onclick="themeglobal_addToCart('433');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=522"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2856 копия-225x169_0.jpg" alt="Массажер деревянный со щеткой" title="Массажер деревянный со щеткой"></a>
                <span class="sale">6%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=522">Массажер деревянный со щеткой...</a></div>
              <div class="price">
                <span class="price-old">520.00<font class="ruble">₽</font></span> <span class="price-new">487.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('522');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('522');"></a>
                </div>
                <a onclick="themeglobal_addToCart('522');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=529"><img src="<?php echo get_template_directory_uri(); ?>/img/L-225x169_0.jpg" alt="Морская соль для ванны c лавандой" title="Морская соль для ванны c лавандой"></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=529">Морская соль для ванны c лаван...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('529');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('529');"></a>
                </div>
                <a onclick="themeglobal_addToCart('529');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=528"><img src="<?php echo get_template_directory_uri(); ?>/img/RO-225x169_0.jpg" alt="Морская соль для ванны c розой" title="Морская соль для ванны c розой"></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=528">Морская соль для ванны c розой...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('528');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('528');"></a>
                </div>
                <a onclick="themeglobal_addToCart('528');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=530"><img src="<?php echo get_template_directory_uri(); ?>/img/R-225x169_0.jpg" alt="Морская соль для ванны с ромашкой" title="Морская соль для ванны с ромашкой"></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=530">Морская соль для ванны с ромаш...</a></div>
              <div class="price">
                <span class="price-old">320.00<font class="ruble">₽</font></span> <span class="price-new">288.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('530');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('530');"></a>
                </div>
                <a onclick="themeglobal_addToCart('530');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=74"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_9847-225x169_0.jpg" alt="Натуральные наполнители (сено)" title="Натуральные наполнители (сено)"></a>
                <span class="sale">40%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=74">Натуральные наполнители (сено)...</a></div>
              <div class="price">
                <span class="price-old">90.00<font class="ruble">₽</font></span> <span class="price-new">54.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('74');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('74');"></a>
                </div>
                <a onclick="themeglobal_addToCart('74');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=73"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_1283-225x169_0.jpg" alt="Подарочная коробка с золотым конгривом и прозрачным окном " title="Подарочная коробка с золотым конгривом и прозрачным окном "></a>
                <span class="sale">10%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=73">Подарочная коробка с золотым к...</a></div>
              <div class="price">
                <span class="price-old">180.00<font class="ruble">₽</font></span> <span class="price-new">162.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('73');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('73');"></a>
                </div>
                <a onclick="themeglobal_addToCart('73');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=508"><img src="<?php echo get_template_directory_uri(); ?>/img/Paket-225x169_0.jpg" alt="Подарочный пакет «LʼСosmetics» натурель с ручками" title="Подарочный пакет «LʼСosmetics» натурель с ручками"></a>
                <span class="sale">55%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=508">Подарочный пакет «LʼСosmetics»...</a></div>
              <div class="price">
                <span class="price-old">80.00<font class="ruble">₽</font></span> <span class="price-new">36.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('508');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('508');"></a>
                </div>
                <a onclick="themeglobal_addToCart('508');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=421"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_1376 копия-225x169_0.jpg" alt="Сумка подарочная вертикальная" title="Сумка подарочная вертикальная"></a>
                <span class="sale">23%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=421">Сумка подарочная вертикальная...</a></div>
              <div class="price">
                <span class="price-old">95.00<font class="ruble">₽</font></span> <span class="price-new">73.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('421');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('421');"></a>
                </div>
                <a onclick="themeglobal_addToCart('421');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=69"><img src="<?php echo get_template_directory_uri(); ?>/img/paket s oknom-225x169_0.jpg" alt="Упаковочный пакет «LʼСosmetics» с прозрачным окном " title="Упаковочный пакет «LʼСosmetics» с прозрачным окном "></a>
                <span class="sale">84%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=69">Упаковочный пакет «LʼСosmetics...</a></div>
              <div class="price">
                <span class="price-old">45.00<font class="ruble">₽</font></span> <span class="price-new">7.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('69');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('69');"></a>
                </div>
                <a onclick="themeglobal_addToCart('69');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=531"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2497-225x169_0.jpg" alt="Шампунь Classic восстанавливающий «Зеленый чай и пшеница» 250 мл" title="Шампунь Classic восстанавливающий «Зеленый чай и пшеница» 250 мл"></a>
                <span class="sale">13%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=531">Шампунь Classic восстанавливаю...</a></div>
              <div class="price">
                <span class="price-old">350.00<font class="ruble">₽</font></span> <span class="price-new">306.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('531');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('531');"></a>
                </div>
                <a onclick="themeglobal_addToCart('531');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=532"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2473 копия-225x169_0.jpg" alt="Шампунь Classic для окрашенных волос «Гранат и ши» 250 мл" title="Шампунь Classic для окрашенных волос «Гранат и ши» 250 мл"></a>
                <span class="sale">13%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=532">Шампунь Classic для окрашенных...</a></div>
              <div class="price">
                <span class="price-old">350.00<font class="ruble">₽</font></span> <span class="price-new">306.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('532');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('532');"></a>
                </div>
                <a onclick="themeglobal_addToCart('532');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=535"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2477-225x169_0.jpg" alt="Шампунь Classic мужской 2 в 1 для волос и тела «Манго» 250 мл" title="Шампунь Classic мужской 2 в 1 для волос и тела «Манго» 250 мл"></a>
                <span class="sale">13%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=535">Шампунь Classic мужской 2 в 1 ...</a></div>
              <div class="price">
                <span class="price-old">350.00<font class="ruble">₽</font></span> <span class="price-new">306.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('535');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('535');"></a>
                </div>
                <a onclick="themeglobal_addToCart('535');" class="addtocart" title="Купить"></a>
              </div>
            </div>
            <div class="item block">
              <div class="image">
                <a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=534"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2489 копия-225x169_0.jpg" alt="Шампунь Classic укрепляющий «Мёд и молоко» 250 мл" title="Шампунь Classic укрепляющий «Мёд и молоко» 250 мл"></a>
                <span class="sale">13%</span>
              </div>
              <div class="name"><a href="http://lcosmetics-shop.ru/index.php?route=product/product&product_id=534">Шампунь Classic укрепляющий «М...</a></div>
              <div class="price">
                <span class="price-old">350.00<font class="ruble">₽</font></span> <span class="price-new">306.00<font class="ruble">₽</font></span>
              </div>
              <div class="rating">
                <div class="tg-rating-0"></div>
              </div>
              <div class="specialcart">
                <div class="wishlist">
                  <a title="В закладки" onclick="themeglobal_addToWishList('534');"></a>
                </div>
                <div class="compare">
                  <a title="В сравнение" onclick="themeglobal_addToCompare('534');"></a>
                </div>
                <a onclick="themeglobal_addToCart('534');" class="addtocart" title="Купить"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p><span style="font-size:16px;"><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=25"><span style="color:#ff0033;"><strong>ПРОМО СТРАНИЦА:</strong></span></a>
  </span>
</p>
<div>

</div>
<div>
  <p style="line-height: 20.7999992370605px;">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;

  </p>
</div>
<h1 style="display: none;">L'Cosmetics официальный интернет магазин</h1>
</div>
<div id="footer">
<div class="column">
  <h3>Информация</h3>
  <ul>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=4">О нас</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=5">Правила и условия</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=11">Доставка и оплата</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=10">Сертификаты и документы</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=12">Инструкция к интернет магазину</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=3">Политика конфиденциальности</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=25">Промо</a></li>
  </ul>
</div>
<div class="column">
  <h3>Служба поддержки</h3>
  <ul>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/contact">Связаться с нами</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/return/insert">Возврат товара</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=information/sitemap">Карта сайта</a></li>
  </ul>
</div>
<div class="column">
  <h3>Дополнительно</h3>
  <ul>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=product/manufacturer">Производители (бренды)</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/voucher">Подарочные сертификаты</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=affiliate/account">Партнёрская программа</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=product/special">Акции</a></li>
  </ul>
</div>
<div class="column">
  <h3>Личный Кабинет</h3>
  <ul>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/account">Личный Кабинет</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/order">История заказов</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/wishlist">Закладки</a></li>
    <li><a href="http://lcosmetics-shop.ru/index.php?route=account/newsletter">Рассылка</a></li>
  </ul>
</div>
<div class="column">
  <h3 style="line-height: 1.2;">Наши контакты</h3>
  <ul style="font-size: 13px;">
    <li>&nbsp;<span style="position: relative; outline: none; display: inline-block; line-height: 0;" tabindex="-1"><img alt="" data-widget="image" height="20" src="<?php echo get_template_directory_uri(); ?>/img/mobile.png" width="10"><span style="position: absolute; width: 15px; height: 0px; left: -9999px; opacity: 0.75; transition: height 0s 0.2s; -webkit-transition: height 0s 0.2s; line-height: 0; background: url(http://lcosmetics-shop.ru/admin/view/javascript/ckeditor/plugins/widget/images/handle.png) rgba(220, 220, 220, 0.498039);"><img alt="" draggable="true" height="15" src="data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw%3D%3D" style="cursor: move; width: 15px; height: 15px; display: inline-block;" title="Нажмите и перетащите" width="15"></span></span>&nbsp; &nbsp; &nbsp;+7 (981) 880 9555 &nbsp;</li>
    <li><span style="position: relative; outline: none; display: inline-block; line-height: 0;" tabindex="-1"><img alt="" data-widget="image" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" style="width: 15px; height: 11px; line-height: 14px;"><span style="position: absolute; width: 15px; height: 0px; left: -9999px; opacity: 0.75; transition: height 0s 0.2s; -webkit-transition: height 0s 0.2s; line-height: 0; background: url(http://lcosmetics-shop.ru/admin/view/javascript/ckeditor/plugins/widget/images/handle.png) rgba(220, 220, 220, 0.498039);"><img alt="" draggable="true" height="15" src="data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw%3D%3D" style="cursor: move; width: 15px; height: 15px; display: inline-block;" title="Нажмите и перетащите" width="15"></span></span>&nbsp; &nbsp; &nbsp;<span style="line-height: 20.8px;">+7 (981) 880 9555</span></li>
    <li><span style="position: relative; outline: none; display: inline-block; line-height: 0;" tabindex="-1"><img alt="" data-widget="image" src="<?php echo get_template_directory_uri(); ?>/img/email.png" style="width: 16px; height: 10px;"><span style="position: absolute; width: 15px; height: 0px; left: -9999px; opacity: 0.75; transition: height 0s 0.2s; -webkit-transition: height 0s 0.2s; line-height: 0; background: url(http://lcosmetics-shop.ru/admin/view/javascript/ckeditor/plugins/widget/images/handle.png) rgba(220, 220, 220, 0.498039);"><img alt="" draggable="true" height="15" src="data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw%3D%3D" style="cursor: move; width: 15px; height: 15px; display: inline-block;" title="Нажмите и перетащите" width="15"></span></span>&nbsp; &nbsp; info@lcosmetics-shop.ru</li>
    <li><span style="position: relative; outline: none; display: inline-block; line-height: 0;" tabindex="-1"><img alt="" data-widget="image" src="<?php echo get_template_directory_uri(); ?>/img/skype.png" style="width: 16px; height: 14px;"><span style="position: absolute; width: 15px; height: 0px; left: -9999px; opacity: 0.75; transition: height 0s 0.2s; -webkit-transition: height 0s 0.2s; line-height: 0; background: url(http://lcosmetics-shop.ru/admin/view/javascript/ckeditor/plugins/widget/images/handle.png) rgba(220, 220, 220, 0.498039);"><img alt="" draggable="true" height="15" src="data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw%3D%3D" style="cursor: move; width: 15px; height: 15px; display: inline-block;" title="Нажмите и перетащите" width="15"></span></span>&nbsp;&nbsp;&nbsp; lcosmetics</li>
  </ul>
</div>
<div class="column">
  <h3 style="line-height: 1.2;">Социальные сети</h3>
  <ul style="font-size: 13px;">
    <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100005543268104" title="facebook">в&nbsp;Facebook</a></li>
    <li><a class="twitter" href="http://vk.com/lcosmeticsshop" title="vk.com">в Контакте</a></li>
    <li><a class="Instagram" href="http://instagram.com/" title="Instagram">в instagram</a></li>
  </ul>
</div>
</div>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
<div id="powered">
<span style="text-align: right;">    <p style="text-align: center;">2014 - 2015 © <a href="http://lavco.ru/">LAVCO.RU</a> - Косметика ручной работы<span style="font-size: 13px;">&nbsp;&nbsp; &nbsp;&nbsp;</span><a href="http://lcosmetics-shop.ru/index.php?route=information/information&information_id=8" style="font-size: 13px;">Все права защищены.&nbsp;правила копирования и использования материалов сайта.</a><span style="color:#A9A9A9;"><span style="font-size: 13px;">&nbsp;</span></span>
<br>
<br>
<span style="color:#ff0033;"><span style="font-size:8px;"><span style="font-family: Arial, sans-serif; line-height: 16.8999996185303px;">ООО "Натур Косметикс"оставляет за собой право изменять публикуемые на сайте материалы в любое время без предварительного уведомления<br>
  <br>
  <a href="http://www.yell.ru/spb/com/lcosmetics_11756186/"><img alt="Написать отзыв" height="34" src="<?php echo get_template_directory_uri(); ?>/img/widget_write_review.png" width="164"></a></span></span>
</span>
</p>
<div style="float:right;display:block;">
<a href="http://lcosmetics-shop.ru/#" title="visa"><img alt="visa" src="<?php echo get_template_directory_uri(); ?>/img/payment_1.png" style="width: 39px; height: 18px;" title="visa"></a>
<a href="http://lcosmetics-shop.ru/#" title="mastercard"><img alt="mastercard" src="<?php echo get_template_directory_uri(); ?>/img/payment_2.png" style="width: 27px; height: 18px;" title="mastercard"></a>
<a href="http://lcosmetics-shop.ru/#" title="express"><img alt="express" src="<?php echo get_template_directory_uri(); ?>/img/payment_3.png" style="width: 16px; height: 18px;" title="express"></a>
<a href="http://lcosmetics-shop.ru/#" title="paypal"><img alt="paypal" src="<?php echo get_template_directory_uri(); ?>/img/payment_4.png" style="width: 60px; height: 18px;" title="paypal"></a>
<a href="http://lcosmetics-shop.ru/#" title="skrill"><img alt="skrill" src="<?php echo get_template_directory_uri(); ?>/img/payment_5.png" style="width: 48px; height: 18px;" title="skrill"></a>
</div>
</span>
</div>
</div>
</body>
</html>
