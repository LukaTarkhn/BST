﻿<?php 
function Parse($p1, $p2, $p3){
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1); 
    return substr(strip_tags(substr($num2, 0, strpos($num2, $p3))), -9);
}

$video1 = file_get_contents('https://www.ipcamlive.com/5edfd00ed0cba'); 
$token1 = Parse($video1,'var token',';');
$video2 = file_get_contents('https://www.ipcamlive.com/5ee1f7e469e75'); 
$token2 = Parse($video1,'var token',';');
?>
<div class="EN">
    <!-- NAVIGATION -->
    <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

        <div class="container">
            <div class="navbar-header">

                <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Navigation</span>
                    <span class="icon icon-menu"></span>
                </button>

                <!-- LOGO -->
                <a href="/en">
                    <img src="/images/logo.png" alt="LOGO" class="main-logo">
                </a>


                <div class="langdropdown" style="position: absolute; right: 10px; top: 20px; ">
                    <button onclick="changeLang()" class="langdropbtn drp">
                        <img src="/images/favicons/en.png" alt="UK flag" class="flags drp">
                    </button>
                    <div id="langDrop" class="langdropdown-content">
                        <a href="/ka">
                            <img src="/images/favicons/ka.png" alt="Georgia flag" class="flags">
                        </a>
                        <a href="/ru">
                            <img src="/images/favicons/ru.png" alt="Russia flag" class="flags">
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <!-- NAVIGATION LINK -->
                <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                    <li><a href="#home" class="MTRegular" style="padding-left: 2px">Home</a>
                    </li>
                    <li><a href="#section1" class="MTRegular" style="padding-left: 2px">About us</a>
                    </li>
                    <li><a href="#section2" class="MTRegular" style="padding-left: 2px">Apartments</a>
                    </li>
                    <li><a href="#section3" class="MTRegular" style="padding-left: 2px">Our projects</a>
                    </li>
                    <li><a href="#section8" class="MTRegular" style="padding-left: 2px">Why us?</a>
                    </li>
                    <?php if ($currentWorks):  ?>
                        <li><a href="#section9" class="MTRegular" style="padding-left: 2px">Ongoing work</a>
                        </li>
                    <?php endif; ?>
                    <li><a href="#section10" class="MTRegular" style="padding-left: 2px">Contact</a>
                    </li>
                </ul>

            </div>

        </div>
        <!-- /END CONTAINER -->
    </div>
    <!-- /END NAIVATION -->
    <div class="headcontent">
        <section class="home fixed-bg" id="home">
            <div class="color-overlay-home">
                <!-- COLOR OVERLAY -->
                <a id="play-btn" class="play-btn" href="https://www.youtube.com/watch?v=FBpnK_Z8Fsw"></a>
                <div class="container">
                    <!-- CALL TO ACTION -->
                    <div class="cta smooth-scroll" style="top: 130px">
                        <div class="social-btns">
                            <a class="btn_ facebook tooltip" href="#section2" title="Apartments">
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </a>
                            <a class="btn_ google tooltip" id="stream-button" href='https://www.ipcamlive.com/player/player.php?alias=5edfd00ed0cba&autoplay=1&token=<?php echo $token1; ?>  style="margin-top: 15px;" title="Building in live">
                                <i class="fa fa-video" aria-hidden="true" style="margin-left:5px; margin-top: -1px;"></i>
                            </a>
                            <a class="btn_ skype tooltip" href="#section11"  style="margin-top: 15px;" title="We call you">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($offers):  ?>
                <div class="offerblock smooth-scroll">
                    <a href="#section6" title="Offers">
                        <img class="offerimg" src="/images/favicons/engoffer.png" alt="">
                    </a>
                </div>
            <?php endif;  ?>

            <div class="conditions">
                <a href="/en/condition" title="APARTMENT HANDOVER CONDITIONS">
                    <img class="conditionimg" src="/images/floors/apartments/key.png" alt="">
                </a>
            </div>
        </section>
    </div>

    <!-- =========================
     SECTION: ABOUT US
    ============================== -->
    <section class="about-us" id="section1">

        <div class="container">
            <div class="row">

                <!-- FEATURED IMAGE AREA -->
                <div class="col-lg-6 visible-lg">
                    <div class="featured-image red-gradient-overlay">
                        <img src="images/aboutus.jpg" alt="">
                        <!-- ABOUT US FEATURED IMAGE -->
                        <div class="image-border">

                        </div>
                    </div>
                </div>

                <!-- ABOUT US BOX -->
                <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                    <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <img src="images/aboutus2.jpg" alt="" class="aboutimageM">
                        <div class="about-content">

                            <!-- SECTION HEADING -->
                            <h3 class="section-heading text-left MTMedium">About us</h3>

                            <!-- PARAGRAPH -->
                            <?php if ($aboutus):  ?>
                                <?php foreach ($aboutus as $about):  ?>
                                    <div class="NusRegular">
                                        <p class="text-left"><?=$about->content_eng?></p>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;  ?>
                        </div>

                        <div class="four-lines">
                            <div class="line red-line-bottom">
                            </div>
                            <div class="line green-line-bottom">
                            </div>
                            <div class="line purple-line-bottom">
                            </div>
                            <div class="line yellow-line-bottom">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: SERVICES
    ============================== -->
    <section class="our-focus bgcolor-2" id="section2">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">Apartments</h3>
                <div class="sub-heading">
                    <span class="NusRegular">Choose your apartment</span>
                </div>
            </div>

            <div class="row focuses">
                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <img src="images/forsell/forsell.png" alt="" class="floorsImage">
                    </div>
                </div>
                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-12 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig">
                    <div class="sub-heading">
                        <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Choose floor</span>
                        <hr>
                    </div>
                    <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                        <?php  foreach ($floors as $floor): ?>
                            <?php if ($floor->parking != 1):  ?>
                                <a href="/en/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                    <div class="onHoverImage"><img src="images/floors/<?=$floor->img?>" style="width: 100%" /></div>
                                    Floor <?=$floor->floor?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php $parkingfloor = 0 ?>
                        <?php  foreach ($floors as $floor): ?>
                            <?php $parkingfloor = $parkingfloor + 1 ?>
                            <?php if ($floor->parking == 1):  ?>
                                <a href="/en/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                    <div class="onHoverImage"><img src="images/floors/parking/<?=$floor->img?>" style="width: 100%" /></div>
                                    Parking <?=$parkingfloor?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </section>

    <!-- =========================
     SECTION: VIDEO SECTION
    ============================== -->

    <section id="section4" class="video-play fixed-bg">
        <div class="color-overlay">

            <!-- HEADING -->
            <h3 class="white-text wow fadeInLeft MTMedium" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Building in live video</h3>

            <div class="row collapse" id="video-expand">
                <div class="col-md-8 col-md-offset-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- EMBED VIDEO -->
                        <iframe class="embed-responsive-item" src='https://www.ipcamlive.com/player/player.php?alias=5ee1f7e469e75&autoplay=1&token=<?php echo $token2; ?> width="800px" height="450px" 
                                frameborder="0" allowfullscreen></iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->
                    </div>
                </div>
            </div>

            <!-- PLAY BUTTON -->
            <a class="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

            <!-- TEXT -->
            <div class="play-text text white-text wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <span class="click-play show NusMedium">Click to play</span>
            </div>

        </div>
    </section>

    <!-- =========================
     SECTION: FINISHED PROJECTS
    ============================== -->
    <?php if ($finishedProjects):  ?>
        <section class="portfolio white-bg" id="section3">

            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Our projects</h3>
                    <div class="sub-heading NusRegular">
                        List of projects we have completed
                    </div>
                </div>

                <div class="row">
                    <!-- PROJECTS -->
                    <div class="col-lg-12" id="portfolio-list">
                        <div class="portfolio-items grid">

                            <!-- SINGLE PROJECT -->
                            <?php foreach ($finishedProjects as $finishedProject):  ?>
                                <figure class="effect-zoe wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                    <!-- PROJECT IMAGE and LINK -->
                                    <a href="/en/project/<?=$finishedProject->id?>" title="Click to view details">
                                        <img src="images/<?=$finishedProject->img?>" alt="">
                                        <p class="description">
                                            <span class="fa fa-eye"></span>
                                        </p>
                                    </a>

                                    <figcaption>
                                        <div class="four-lines">
                                            <div class="line red-line-bottom">
                                            </div>
                                            <div class="line green-line-bottom">
                                            </div>
                                            <div class="line purple-line-bottom">
                                            </div>
                                            <div class="line yellow-line-bottom">
                                            </div>
                                        </div>

                                        <div class="caption-text">
                                            <h6 class="dark-text NusMedium"><?=$finishedProject->title_eng?></h6>	<!-- PROJECT TITLE -->
                                        </div>
                                    </figcaption>
                                </figure>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;  ?>

    <!-- =========================
     SECTION: STATS
    ============================== -->
    <section class="stats fixed-bg">
        <div class="color-overlay">
            <div class="container">
                <div class="row">

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <div class="stats-icon red-text">
                            <span class="icon icon-cloud"></span>
                        </div>

                        <h5 class="white-text">6</h5>
                        <div class="stats-text MTRegular">
                            Completed projects
                        </div>

                        <div class="bottom-icon red-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">

                        <div class="stats-icon green-text">
                            <span class="icon icon-way"></span>
                        </div>

                        <h5 class="white-text">2</h5>
                        <div class="stats-text MTRegular">
                            Ongoing projects
                        </div>

                        <div class="bottom-icon green-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                        <div class="stats-icon purple-text">
                            <span class="icon icon-graph-regular"></span>
                        </div>

                        <h5 class="white-text">1000+</h5>
                        <div class="stats-text MTRegular">
                            Sold apartments
                        </div>

                        <div class="bottom-icon purple-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="1s">

                        <div class="stats-icon green-text">
                            <span class="icon icon-like"></span>
                        </div>

                        <h5 class="white-text">500+</h5>
                        <div class="stats-text MTRegular">
                            Number of employees
                        </div>

                        <div class="bottom-icon green-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- =========================
    SECTION: PRICING
    ============================== -->
    <section class="pricing bgcolor-2" id="section6">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">Offers</h3>
                <div class="sub-heading NusRegular">
                    Hurry up and take advantage of our special offers
                </div>
            </div>
            <?php if ($offers):  ?>
                <div class="row packages">
                    <?php foreach ($offers as $offer):  ?>
                        <!-- SINGLE PACKAGE -->
                        <div class="col-lg-4 col-md-4">
                            <div class="single-package red-line-top white-bg diffuse-shadow wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                <h5 class="MTRegular"><?=$offer->title_eng?></h5>

                                <div class="price-circle-red">
                                    <h4 class="white-text NusMedium">-<?=$offer->sale?>%</h4>
                                    <!-- PRICE -->
                                    <div class="extra-small-text white-text NusMedium">
                                        SALE
                                    </div>
                                </div>

                                <ul class="feature-list">
                                    <li><span class="strong NusMedium" style="padding: 10px; color: #f05b42"><?=$offer->text_eng?></span></li>
                                </ul>

                                <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact</a>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif;  ?>


        </div>
    </section>

    <!-- =========================
     SECTION: WORK STEPS
    ============================== -->
    <section class="work-steps" id="section5">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">Working steps</h3>
                <div class="sub-heading NusRegular">
                    We always achieve the highest quality
                </div>
            </div>

            <div class="row steps">
                <div class="col-lg-6 col-lg-offset-3">

                    <!-- STEP 1 -->
                    <div class="step step-1-image clearfix">
                        <div class="step-box-left diffuse-shadow red-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="step-number">
                                01
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">Exploring the area</h5>
                                <p class="text-left NusRegular">
                                    Investigate the area and determine the measures to be taken to avoid unforeseen occurrences.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="step step-2-image clearfix">
                        <div class="step-box-right diffuse-shadow green-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">

                            <div class="step-number">
                                02
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">to create a project</h5>
                                <p class="text-left NusRegular">
                                    The project is planned with great care, taking into account all the nuances. All necessary competent persons are involved in project planning.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="step step-3-image clearfix">
                        <div class="step-box-left diffuse-shadow purple-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.35s">

                            <div class="step-number">
                                03
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">Plan and project design</h5>
                                <p class="text-left NusRegular">
                                    We create a building, floor, and apartment project to create a 3D model of complex. High-level specialists are also involved in this activity
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="step step-4-image clearfix">
                        <div class="step-box-right diffuse-shadow yellow-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                            <div class="step-number">
                                04
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">Construction</h5>
                                <p class="text-left NusRegular">
                                    Construction begins after all stages have been successfully completed, starting construction is a guarantee of high quality and timely delivery.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: TESTIMONIALS
    ============================== -->
    <section class="testimonials fixed-bg" id="section7">
        <div class="color-overlay">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <div class="sub-heading white-text" style="font-family: 'ArchyEDT-Bold', sans-serif; letter-spacing: 2px; color: orange">
                        We build with the latest technologies and with the best materials
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: FEATURES / WHY SELECT US
    ============================== -->
    <section class="features" id="section8">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">Why us?</h3>
                <div class="sub-heading NusMedium">
                    We consider the requirements and wishes of the client in construction
                </div>
            </div>

            <div class="row feature-grid wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon red-text">
                                <span class="icon icon-graph2"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">Highest quality of construction</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            Using new technologies and adhering to new regulations.
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon green-text">
                                <span class="icon icon-edit"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">Balcony for all apartments</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            All apartments have balconies with beautiful sea and mountain views
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon purple-text">
                                <span class="icon icon-exapnd2"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">Recreational Area</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            2000 m / sq recreational zone
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon yellow-text">
                                <span class="icon icon-display1"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">Biggest Parking</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            6-level parking, designed for 410 cars
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon red-text">
                                <span class="icon icon-date"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">Sport</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            Own tennis courts, mini football field, children's playground, fitness center and pool.
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon green-text">
                                <span class="icon icon-medal"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">An elite class</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            Elite class residential complex, not a hotel!
                        </p>
                    </div>
                </div>

            </div>

            <!-- CALL TO ACTION -->
            <div class="row cta-bottom">
                <div class="col-lg-12">

                    <!-- HEADING -->
                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Buy your new apartment with us</h4>

                    <!-- BUTTON -->
                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact</a>

                </div>
            </div>


        </div>
    </section>

    <!-- =========================
     SECTION: BLOG
    ============================== -->
    <?php if ($currentWorks):  ?>
        <section class="blog bgcolor-2" id="section9">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Ongoing work</h3>
                    <div class="sub-heading NusMedium">
                        You will always be informed about current work
                    </div>
                </div>

                <div class="row blog-posts">
                    <?php foreach ($currentWorks as $currentWork):  ?>
                        <!-- REGULAR POSTS -->
                        <div class="col-lg-6 col-md-6" style="display: flex; flex-wrap: wrap">
                            <!-- SINGLE POST -->
                            <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="width: 100%; min-height: 270px;">

                                <!-- POST TITLE AND DETAILS -->
                                <div class="post-content">
                                    <img style="height: 130px; width: 100%;" src="images/<?=$currentWork->img?>" alt="">
                                    <a href="/en/current/<?=$currentWork->id?>">
                                        <h6 class="post-title MTMedium"><?=$currentWork->title_eng?></h6>
                                    </a>
                                    <div>
                                        <span class="NusRegular"><?=substr($currentWork->content_eng, 0, 500)?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- SINGLE POST -->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif;  ?>
</div>