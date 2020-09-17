</div>
<?php
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

<?php $floor4 = 0 ?>
<?php $floor5 = 0 ?>
<?php $floor6 = 0 ?>
<?php $floor7 = 0 ?>
<?php $floor8 = 0 ?>
<?php $floor9 = 0 ?>
<?php $floor10 = 0 ?>
<?php $floor11 = 0 ?>
<?php $floor12 = 0 ?>
<?php $floor13 = 0 ?>
<?php $floor14 = 0 ?>
<?php $floor15 = 0 ?>
<?php $floor16 = 0 ?>
<?php $floor17 = 0 ?>
<?php $floor18 = 0 ?>
<?php $floor19 = 0 ?>
<?php $floor20 = 0 ?>
<?php $floor21 = 0 ?>
<?php $floor22 = 0 ?>
<?php $floor23 = 0 ?>
<?php $floor24 = 0 ?>
<?php $floor25 = 0 ?>
<?php $floor26 = 0 ?>
<?php $floor27 = 0 ?>
<?php $floor28 = 0 ?>
<?php $floor29 = 0 ?>
<?php $floor30 = 0 ?>
<?php $floor31 = 0 ?>
<?php $floor32 = 0 ?>
<?php $floor33 = 0 ?>
<?php $floor34 = 0 ?>
<?php $floor35 = 0 ?>
<?php $floor36 = 0 ?>
<?php $floor37 = 0 ?>
<?php $floor38 = 0 ?>
<?php $floor39 = 0 ?>
<?php $floor40 = 0 ?>

<?php  foreach ($apartments as $apartment): ?>
    <?php if ($apartment->floorid == 4 && $apartment->status == 1):  ?><?php $floor4 = $floor4 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 5 && $apartment->status == 1):  ?><?php $floor5 = $floor5 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 6 && $apartment->status == 1):  ?><?php $floor6 = $floor6 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 7 && $apartment->status == 1):  ?><?php $floor7 = $floor7 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 8 && $apartment->status == 1):  ?><?php $floor8 = $floor8 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 9 && $apartment->status == 1):  ?><?php $floor9 = $floor9 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 10 && $apartment->status == 1):  ?><?php $floor10 = $floor10 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 11 && $apartment->status == 1):  ?><?php $floor11 = $floor11 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 12 && $apartment->status == 1):  ?><?php $floor12 = $floor12 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 13 && $apartment->status == 1):  ?><?php $floor13 = $floor13 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 14 && $apartment->status == 1):  ?><?php $floor14 = $floor14 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 15 && $apartment->status == 1):  ?><?php $floor15 = $floor15 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 16 && $apartment->status == 1):  ?><?php $floor16 = $floor16 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 17 && $apartment->status == 1):  ?><?php $floor17 = $floor17 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 18 && $apartment->status == 1):  ?><?php $floor18 = $floor18 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 19 && $apartment->status == 1):  ?><?php $floor19 = $floor19 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 20 && $apartment->status == 1):  ?><?php $floor20 = $floor20 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 21 && $apartment->status == 1):  ?><?php $floor21 = $floor21 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 22 && $apartment->status == 1):  ?><?php $floor22 = $floor22 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 23 && $apartment->status == 1):  ?><?php $floor23 = $floor23 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 24 && $apartment->status == 1):  ?><?php $floor24 = $floor24 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 25 && $apartment->status == 1):  ?><?php $floor25 = $floor25 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 26 && $apartment->status == 1):  ?><?php $floor26 = $floor26 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 27 && $apartment->status == 1):  ?><?php $floor27 = $floor27 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 28 && $apartment->status == 1):  ?><?php $floor28 = $floor28 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 29 && $apartment->status == 1):  ?><?php $floor29 = $floor29 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 30 && $apartment->status == 1):  ?><?php $floor30 = $floor30 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 31 && $apartment->status == 1):  ?><?php $floor31 = $floor31 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 32 && $apartment->status == 1):  ?><?php $floor32 = $floor32 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 33 && $apartment->status == 1):  ?><?php $floor33 = $floor33 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 34 && $apartment->status == 1):  ?><?php $floor34 = $floor34 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 35 && $apartment->status == 1):  ?><?php $floor35 = $floor35 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 36 && $apartment->status == 1):  ?><?php $floor36 = $floor36 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 37 && $apartment->status == 1):  ?><?php $floor37 = $floor37 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 38 && $apartment->status == 1):  ?><?php $floor38 = $floor38 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 39 && $apartment->status == 1):  ?><?php $floor39 = $floor39 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 40 && $apartment->status == 1):  ?><?php $floor40 = $floor40 + 1 ?><?php endif;  ?>
<?php  endforeach; ?>

<?php $bfloor4 = 0 ?>
<?php $bfloor5 = 0 ?>
<?php $bfloor6 = 0 ?>
<?php $bfloor7 = 0 ?>
<?php $bfloor8 = 0 ?>
<?php $bfloor9 = 0 ?>
<?php $bfloor10 = 0 ?>
<?php $bfloor11 = 0 ?>
<?php $bfloor12 = 0 ?>
<?php $bfloor13 = 0 ?>
<?php $bfloor14 = 0 ?>
<?php $bfloor15 = 0 ?>
<?php $bfloor16 = 0 ?>
<?php $bfloor17 = 0 ?>
<?php $bfloor18 = 0 ?>
<?php $bfloor19 = 0 ?>
<?php $bfloor20 = 0 ?>
<?php $bfloor21 = 0 ?>
<?php $bfloor22 = 0 ?>
<?php $bfloor23 = 0 ?>
<?php $bfloor24 = 0 ?>
<?php $bfloor25 = 0 ?>
<?php $bfloor26 = 0 ?>
<?php $bfloor27 = 0 ?>
<?php $bfloor28 = 0 ?>
<?php $bfloor29 = 0 ?>
<?php $bfloor30 = 0 ?>
<?php $bfloor31 = 0 ?>
<?php $bfloor32 = 0 ?>
<?php $bfloor33 = 0 ?>
<?php $bfloor34 = 0 ?>
<?php $bfloor35 = 0 ?>
<?php $bfloor36 = 0 ?>
<?php $bfloor37 = 0 ?>
<?php $bfloor38 = 0 ?>
<?php $bfloor39 = 0 ?>
<?php $bfloor40 = 0 ?>

<?php  foreach ($bapartments as $bapartment): ?>
    <?php if ($bapartment->floorid == 4 && $bapartment->status == 1):  ?><?php $bfloor4 = $bfloor4 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 5 && $bapartment->status == 1):  ?><?php $bfloor5 = $bfloor5 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 6 && $bapartment->status == 1):  ?><?php $bfloor6 = $bfloor6 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 7 && $bapartment->status == 1):  ?><?php $bfloor7 = $bfloor7 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 8 && $bapartment->status == 1):  ?><?php $bfloor8 = $bfloor8 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 9 && $bapartment->status == 1):  ?><?php $bfloor9 = $bfloor9 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 10 && $bapartment->status == 1):  ?><?php $bfloor10 = $bfloor10 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 11 && $bapartment->status == 1):  ?><?php $bfloor11 = $bfloor11 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 12 && $bapartment->status == 1):  ?><?php $bfloor12 = $bfloor12 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 13 && $bapartment->status == 1):  ?><?php $bfloor13 = $bfloor13 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 14 && $bapartment->status == 1):  ?><?php $bfloor14 = $bfloor14 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 15 && $bapartment->status == 1):  ?><?php $bfloor15 = $bfloor15 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 16 && $bapartment->status == 1):  ?><?php $bfloor16 = $bfloor16 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 17 && $bapartment->status == 1):  ?><?php $bfloor17 = $bfloor17 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 18 && $bapartment->status == 1):  ?><?php $bfloor18 = $bfloor18 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 19 && $bapartment->status == 1):  ?><?php $bfloor19 = $bfloor19 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 20 && $bapartment->status == 1):  ?><?php $bfloor20 = $bfloor20 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 21 && $bapartment->status == 1):  ?><?php $bfloor21 = $bfloor21 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 22 && $bapartment->status == 1):  ?><?php $bfloor22 = $bfloor22 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 23 && $bapartment->status == 1):  ?><?php $bfloor23 = $bfloor23 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 24 && $bapartment->status == 1):  ?><?php $bfloor24 = $bfloor24 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 25 && $bapartment->status == 1):  ?><?php $bfloor25 = $bfloor25 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 26 && $bapartment->status == 1):  ?><?php $bfloor26 = $bfloor26 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 27 && $bapartment->status == 1):  ?><?php $bfloor27 = $bfloor27 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 28 && $bapartment->status == 1):  ?><?php $bfloor28 = $bfloor28 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 29 && $bapartment->status == 1):  ?><?php $bfloor29 = $bfloor29 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 30 && $bapartment->status == 1):  ?><?php $bfloor30 = $bfloor30 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 31 && $bapartment->status == 1):  ?><?php $bfloor31 = $bfloor31 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 32 && $bapartment->status == 1):  ?><?php $bfloor32 = $bfloor32 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 33 && $bapartment->status == 1):  ?><?php $bfloor33 = $bfloor33 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 34 && $bapartment->status == 1):  ?><?php $bfloor34 = $bfloor34 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 35 && $bapartment->status == 1):  ?><?php $bfloor35 = $bfloor35 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 36 && $bapartment->status == 1):  ?><?php $bfloor36 = $bfloor36 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 37 && $bapartment->status == 1):  ?><?php $bfloor37 = $bfloor37 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 38 && $bapartment->status == 1):  ?><?php $bfloor38 = $bfloor38 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 39 && $bapartment->status == 1):  ?><?php $bfloor39 = $bfloor39 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 40 && $bapartment->status == 1):  ?><?php $bfloor40 = $bfloor40 + 1 ?><?php endif;  ?>
<?php  endforeach; ?>

<div id="main-preloader" class="main-preloader semi-dark-background">
    <div class="main-preloader-inner center">
        <h1 class="preloader-percentage center" style="font-size: 12px;">
            Black Sea Towers
        </h1>
        <div class="center" style="background-color: #484848;">
            <img src="/public/images/gallery/logo.png" alt="">
        </div>
        <div class="preloader-bar-outer">
            <div class="preloader-bar"></div>
        </div>
    </div>
</div>
<a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
    <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> Do you want to call you<br>back at a convenient time? <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
                <polyline fill="#B3B3B3" points="17.977,0 0.083,0 17.977,13.927 "></polyline>
              </svg>
    </div>
    <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
        <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
            </svg>
    <div id="bingc-phone-button-icon-text" class="bingc-phone-button-icon-text"><span>Contact<br>button</span></div>
    <svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 16.877 16.877" xml:space="preserve">
              <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039 c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938 c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457 c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176 c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001 C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666 l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51 C16.93,13.729,16.935,13.352,16.702,13.119z"></path>
            </svg>
</a>
<div id="call-back" class="zoom-anim-dialog mfp-hide">
    <p class="call-back--header"><b>Contact</b></p>
    <span>+995 577 22 47 47</span>
    <span>+995 514 67 47 47</span>
    <span>+995 514 65 47 47</span>
    <span>realpalace2012@gmail.com</span>
    <p class="call-back--header"><b>We call you</b></p>
    <h6 class="callsuccess dark-background">Thanks, we call you</h6>
    <h6 class="callerror red-text"></h6>
    <form id="call-form">
        <input id="phone" name="phone" type="tel" placeholder="Mobile number" required>
        <button type="submit" value="Send">CALL ME</button>
    </form>
</div>
<!-- Start: Side Navbar  Area
============================= -->
<div id="fp-nav" class="left">
    <div id="fp-nolink">
        <div class="logo-outer">
            <a href="#1"><img src="/public/images/gallery/logo.png" alt="" class="img-responsive"></a>
        </div>
        <ul>
            <li></li>
            <li>
                <a href="#2" class="">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file-alt" class="svg-inline--fa fa-file-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path></svg>
                            </span>
                </a>
            </li>
            <li>
                <a href="#3" class="">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="brush" class="svg-inline--fa fa-brush fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M352 0H32C14.33 0 0 14.33 0 32v224h384V32c0-17.67-14.33-32-32-32zM0 320c0 35.35 28.66 64 64 64h64v64c0 35.35 28.66 64 64 64s64-28.65 64-64v-64h64c35.34 0 64-28.65 64-64v-32H0v32zm192 104c13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24s-24-10.75-24-24c0-13.26 10.75-24 24-24z"></path></svg>
                            </span>
                </a>
            </li>
            <li>
                <a href="#4" class="">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="photo-video" class="svg-inline--fa fa-photo-video fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M608 0H160a32 32 0 0 0-32 32v96h160V64h192v320h128a32 32 0 0 0 32-32V32a32 32 0 0 0-32-32zM232 103a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm352 208a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm-168 57H32a32 32 0 0 0-32 32v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zM96 224a32 32 0 1 1-32 32 32 32 0 0 1 32-32zm288 224H64v-32l64-64 32 32 128-128 96 96z"></path></svg>
                            </span>
                </a>
            </li>
            <li>
                <a href="#5" class="">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg>
                            </span>
                </a>
            </li>
            <li>
                <a href="#6" class="">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
                            </span>
                </a>
            </li>
            <li>
                <a href="#7" class="">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                            </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="nav-bottom">
        <div class="livecams">
            <div class="real-videos">
                <a class="popup-cam-1" href="https://www.ipcamlive.com/player/player.php?alias=5edfd00ed0cba&autoplay=1&token=<?php echo $token1; ?>">
                    <img src="/public/images/gallery/live1.png" alt="">
                </a>
                <a class="popup-cam-2" href="https://www.ipcamlive.com/player/player.php?alias=5ee1f7e469e75&autoplay=1&token=<?php echo $token1; ?>">
                    <img src="/public/images/gallery/live2.png" alt="">
                </a>
            </div>
        </div>
        <div class="soc-buttons">
            <a target="_blank" href="https://www.facebook.com/BuildingCompanyREALPALACE/">
                <i class="icon icon-social-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/black_sea_towers/">
                <i class="icon icon-social-instagram"></i></a>
        </div>
        <div class="pick-language">
            <a href="/ka">
                <img src="/public/images/gallery/GE.png" alt="">
            </a>
            <a href="/ru">
                <img src="/public/images/gallery/RU.png" alt="">
            </a>
            <a href="/en">
                <img src="/public/images/gallery/EN.png" alt="">
            </a>
        </div>
    </div>

</div>
<nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
    <div class="container relative">
        <div id="fp-nolink">
            <!-- Left Side Navigation Button -->
            <div style="position: absolute;" >
                <a href="#1">
                    <img style="width: 60px; padding: 4px" src="/public/images/gallery/logo.png" alt="">
                </a>
            </div>
            <div class="navbar-header">
                <!-- Menu Button show Mobile view -->
                <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                    <span aria-hidden="true" class="icon"></span>
                </button>
            </div>

            <!-- Main Menu List -->
            <div class="navbar-collapse" id="js-navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li></li>
                    <li><a class="btn-nav" href="#2">About complex</a></li>
                    <li><a class="btn-nav" href="#3">Apartments</a></li>
                    <li><a class="btn-nav" href="#4">MEDIA</a></li>
                    <li><a class="btn-nav" href="#5">Questions</a></li>
                    <li><a class="btn-nav" href="#6">Staff</a></li>
                    <li><a class="btn-nav" href="#7">Contacts</a></li>
                </ul>
            </div>
        </div>


        <!-- Right Side Navigation Button -->
        <div class="navbar-collapse-right" >
            <ul class="nav navbar-nav navbar-right" style="width: 90px;">
                <li style="width: 100%;">
                    <div class="pick-language" style="align-items: center; height: 70px;">
                        <a href="/ka">
                            <img src="/public/images/gallery/GE.png" alt="">
                        </a>
                        <a href="/ru">
                            <img src="/public/images/gallery/RU.png" alt="">
                        </a>
                        <a href="/en">
                            <img src="/public/images/gallery/EN.png" alt="">
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- End: Navbar Area
============================= -->
<section class="content-area" id="fullpage">
    <div class="container-fluid">
        <div class="row">
            <!--Start: 1st Page Slider Section
                - HOME PAGE
            ====================================-->
            <div class="section section-item home-section overflow hide-overlay overlay-color bg-image-1" data-heading="">
                <div class="inner-container ">
                    <div class="footer-button">
                        <a href="#" class="btn">
                            <p class="icon">
                                <i class="icon icon-arrow-carrot-down"></i>
                                Select floor
                                <i class="icon icon-arrow-carrot-down"></i>
                            </p>
                        </a>
                    </div>
                    <div class="floor-pick">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2639 2129">
                            <image width="2639" height="2129" xlink:href="/public/images/gallery/rescropedtowers.png"/>
                            <a href="/en/floor/10">
                                <polygon id="<?php if ($floor4 < 16): ?>Floor&nbsp;4<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor4 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1733.5 1471 1709.5 1644.91 1815.5 1950.5 1815.5 1950.5 1851.5 1645.91 1855.5 1471 1733.5"/>
                            </a>
                            <a href="/en/floor/11">
                                <polygon id="<?php if ($floor5 < 16): ?>Floor&nbsp;5<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1695.5 1471 1668.5 1644.91 1766.5 1950.5 1766.5 1950.5 1802.5 1645.91 1806.5 1471 1695.5"/>
                            </a>
                            <a href="/en/floor/12">
                                <polygon id="<?php if ($floor6 < 16): ?>Floor&nbsp;6<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor6 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1655.5 1471 1628.5 1643.9 1720.5 1950.5 1720.5 1950.5 1756.5 1645.91 1760.5 1471 1655.5"/>
                            </a>
                            <a href="/en/floor/14">
                                <polygon id="<?php if ($floor7 < 16): ?>Floor&nbsp;7<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor7 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472 1616.5 1472 1593.5 1644.9 1673.5 1951.5 1673.5 1951.5 1709.5 1646.91 1713.5 1472 1616.5"/>
                            </a>
                            <a href="/en/floor/15">
                                <polygon id="<?php if ($floor8 < 16): ?>Floor&nbsp;8<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor8 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472 1577.5 1472 1554.5 1644.9 1626.5 1951.5 1626.5 1951.5 1662.5 1646.91 1666.5 1472 1577.5"/>
                            </a>
                            <a href="/en/floor/16">
                                <polygon id="<?php if ($floor9 < 16): ?>Floor&nbsp;9<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor9 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472 1537.5 1472 1511.5 1644.9 1579.5 1951.5 1579.5 1951.5 1615.5 1646.91 1619.5 1472 1537.5"/>
                            </a>
                            <a href="/en/floor/17">
                                <polygon id="<?php if ($floor10 < 16): ?>Floor&nbsp;10<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor10 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472 1497.5 1472 1473.5 1644.9 1531.5 1951.5 1531.5 1951.5 1567.5 1646.91 1571.5 1472 1497.5"/>
                            </a>
                            <a href="/en/floor/18">
                                <polygon id="<?php if ($floor11 < 16): ?>Floor&nbsp;11<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor11 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1458.5 1471 1432.5 1644.62 1482.5 1952.5 1482.5 1952.5 1518.5 1646.64 1522.5 1471 1458.5"/>
                            </a>
                            <a href="/en/floor/19">
                                <polygon id="<?php if ($floor12 < 16): ?>Floor&nbsp;12<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor12 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1418.5 1471 1394.5 1644.62 1433.5 1952.5 1433.5 1952.5 1469.5 1646.64 1473.5 1471 1418.5"/>
                            </a>
                            <a href="/en/floor/20">
                                <polygon id="<?php if ($floor13 < 16): ?>Floor&nbsp;13<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor13 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1381.5 1471 1359.5 1644.62 1387.5 1952.5 1387.5 1952.5 1423.5 1646.64 1427.5 1471 1381.5"/>
                            </a>
                            <a href="/en/floor/21">
                                <polygon id="<?php if ($floor14 < 16): ?>Floor&nbsp;14<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor14 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471 1340.5 1471 1319.5 1644.62 1340.5 1952.5 1340.5 1952.5 1376.5 1647.65 1378.5 1471 1340.5"/>
                            </a>
                            <a href="/en/floor/22">
                                <polygon id="<?php if ($floor15 < 16): ?>Floor&nbsp;15<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor15 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1303.5 1471.5 1278.5 1644.62 1292.5 1952.5 1292.5 1952.5 1332.5 1648.87 1332.5 1471.5 1303.5"/>
                            </a>
                            <a href="/en/floor/23">
                                <polygon id="<?php if ($floor16 < 16): ?>Floor&nbsp;16<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor16 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1262.5 1471.5 1236.5 1644.62 1243.5 1952.5 1243.5 1952.5 1283.5 1648.87 1283.5 1471.5 1262.5"/>
                            </a>
                            <a href="/en/floor/24">
                                <polygon id="<?php if ($floor17 < 16): ?>Floor&nbsp;17<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor17 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1222.5 1471.5 1198.5 1644.62 1197.5 1952.5 1197.5 1952.5 1236.5 1650.87 1236.5 1471.5 1222.5"/>
                            </a>
                            <a href="/en/floor/25">
                                <polygon id="<?php if ($floor18 < 16): ?>Floor&nbsp;18<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor18 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1183.5 1471.5 1157.5 1647.35 1150.5 1953 1150.5 1953 1189.5 1653.56 1189.5 1471.5 1183.5"/>
                            </a>
                            <a href="/en/floor/26">
                                <polygon id="<?php if ($floor19 < 16): ?>Floor&nbsp;19<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor19 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1144.5 1471.5 1122.5 1647.35 1102.5 1953 1102.5 1953 1141.5 1653.56 1141.5 1471.5 1144.5"/>
                            </a>
                            <a href="/en/floor/27">
                                <polygon id="<?php if ($floor20 < 16): ?>Floor&nbsp;20<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor20 < 19): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1105.5 1471.5 1080.5 1647.35 1054.5 1953 1054.5 1953 1093.5 1644.5 1092.5 1471.5 1105.5"/>
                            </a>
                            <a href="/en/floor/28">
                                <polygon id="<?php if ($floor21 < 19): ?>Floor&nbsp;21<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor21 < 19): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1068.5 1471.5 1043.5 1642.5 1007.5 1953 1007.5 1953 1046.5 1644.5 1042.5 1471.5 1068.5"/>
                            </a>
                            <a href="/en/floor/29">
                                <polygon id="<?php if ($floor22 < 19): ?>Floor&nbsp;22<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor22 < 19): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 1027.5 1471.5 1003.5 1642.5 961.5 1953 961.5 1953 1000.5 1644.5 996.5 1471.5 1027.5"/>
                            </a>
                            <a href="/en/floor/30">
                                <polygon id="<?php if ($floor23 < 19): ?>Floor&nbsp;23<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor23 < 19): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 987.5 1471.5 964.5 1646.5 911.5 1953.5 911.5 1953.5 949.5 1644.5 948.5 1471.5 987.5"/>
                            </a>
                            <a href="/en/floor/31">
                                <polygon id="<?php if ($floor24 < 19): ?>Floor&nbsp;24<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor24 < 19): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 949.5 1471.5 927.5 1646.5 862.5 1953.5 866.5 1953.5 904.5 1643.5 898.5 1471.5 949.5"/>
                            </a>
                            <a href="/en/floor/32">
                                <polygon id="<?php if ($floor25 < 19): ?>Floor&nbsp;25<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor25 < 19): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 909.5 1471.5 885.5 1646.5 816.5 1953.5 820.5 1953.5 858.5 1643.5 852.5 1471.5 909.5"/>
                            </a>
                            <a href="/en/floor/33">
                                <polygon id="<?php if ($floor26 < 16): ?>Floor&nbsp;26<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor26 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 870.5 1471.5 847.5 1646.5 770.5 1953.5 770.5 1953.5 810.5 1643.5 806.5 1471.5 870.5"/>
                            </a>
                            <a href="/en/floor/34">
                                <polygon id="<?php if ($floor27 < 16): ?>Floor&nbsp;27<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor27 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 831.5 1471.5 805.5 1647.05 723.5 1955 723.5 1955 763.5 1644.04 759.5 1471.5 831.5"/>
                            </a>
                            <a href="/en/floor/35">
                                <polygon id="<?php if ($floor28 < 16): ?>Floor&nbsp;28<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor28 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 792.5 1471.5 770.5 1646.6 672.5 1955 676.5 1955 716.5 1642.62 712.5 1471.5 792.5"/>
                            </a>
                            <a href="/en/floor/36">
                                <polygon id="<?php if ($floor29 < 16): ?>Floor&nbsp;29<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor29 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 753.5 1471.5 729.5 1646.6 625.5 1955 629.5 1955 669.5 1642.62 665.5 1471.5 753.5"/>
                            </a>
                            <a href="/en/floor/37">
                                <polygon id="<?php if ($floor30 < 16): ?>Floor&nbsp;30<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor30 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 714.5 1471.5 692.5 1646.6 577.5 1955 581.5 1955 621.5 1642.62 617.5 1471.5 714.5"/>
                            </a>
                            <a href="/en/floor/38">
                                <polygon id="<?php if ($floor31 < 16): ?>Floor&nbsp;31<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor31 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1470.5 677.5 1470.5 654.5 1645.96 530.5 1955 534.5 1955 574.5 1641.97 570.5 1470.5 677.5"/>
                            </a>
                            <a href="/en/floor/39">
                                <polygon id="<?php if ($floor32 < 16): ?>Floor&nbsp;32<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor32 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1470.5 638.5 1470.5 612.5 1645.96 481.5 1955 485.5 1955 525.5 1641.97 521.5 1470.5 638.5"/>
                            </a>
                            <a href="/en/floor/40">
                                <polygon id="<?php if ($floor33 < 16): ?>Floor&nbsp;33<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor33 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1470.5 600.5 1470.5 573.5 1645.96 434.5 1955 438.5 1955 478.5 1641.97 474.5 1470.5 600.5"/>
                            </a>
                            <a href="/en/floor/41">
                                <polygon id="<?php if ($floor34 < 16): ?>Floor&nbsp;34<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor34 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 560.5 1471.5 534.5 1646.96 385.5 1956 389.5 1956 429.5 1642.97 425.5 1471.5 560.5"/>
                            </a>
                            <a href="/en/floor/42">
                                <polygon id="<?php if ($floor35 < 16): ?>Floor&nbsp;35<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor35 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1470.5 517.5 1470.5 497.5 1646.32 338.5 1956 342.5 1956 382.5 1642.32 378.5 1470.5 517.5"/>
                            </a>
                            <a href="/en/floor/43">
                                <polygon id="<?php if ($floor36 < 16): ?>Floor&nbsp;36<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor36 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 481.5 1471.5 459.5 1647.32 291.5 1957 295.5 1957 335.5 1643.32 331.5 1471.5 481.5"/>
                            </a>
                            <a href="/en/floor/44">
                                <polygon id="<?php if ($floor37 < 16): ?>Floor&nbsp;37<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor37 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1471.5 440.5 1471.5 418.5 1647.32 243.5 1957 247.5 1957 287.5 1643.32 283.5 1471.5 440.5"/>
                            </a>
                            <a href="/en/floor/45">
                                <polygon id="<?php if ($floor38 < 16): ?>Floor&nbsp;38<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor38 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472.5 402.5 1472.5 375.5 1648.32 197.5 1958 201.5 1958 241.5 1644.32 237.5 1472.5 402.5"/>
                            </a>
                            <a href="/en/floor/46">
                                <polygon id="<?php if ($floor39 < 16): ?>Floor&nbsp;39<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor39 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472.5 361.5 1472.5 334.5 1648.32 148.5 1958 152.5 1958 192.5 1644.32 188.5 1472.5 361.5"/>
                            </a>
                            <a href="/en/floor/47">
                                <polygon id="<?php if ($floor40 < 16): ?>Floor&nbsp;40<?php else: ?>Sold<?php endif; ?>" class="<?php if ($floor40 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="1472.5 320.5 1472.5 294.5 1648.32 101.5 1958 105.5 1958 145.5 1644.32 141.5 1472.5 320.5"/>
                            </a>
                            
                            <!-- B block -->
                            <a href="/en/bfloor/3">              
                                <polygon id="<?php if ($bfloor4 < 13): ?>Floor&nbsp;4<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor4 < 13): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" points="653.5 1836.5 1006.5 1836.5 1006.5 1874.5 653.5 1878.5 653.5 1836.5"/>
                            </a>
                            <a href="/en/bfloor/4">     
                                <rect id="<?php if ($bfloor5 < 10): ?>Floor&nbsp;5<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor5 < 10): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1786.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/5">     
                                <rect id="<?php if ($bfloor6 < 18): ?>Floor&nbsp;6<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor6 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1736.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/6">     
                                <rect id="<?php if ($bfloor7 < 18): ?>Floor&nbsp;7<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor7 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1685.5" width="353" height="48"/>
                            </a>
                            <a href="/en/bfloor/7">     
                                <rect id="<?php if ($bfloor8 < 18): ?>Floor&nbsp;8<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor8 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1634.5" width="353" height="48"/>
                            </a>
                            <a href="/en/bfloor/8">     
                                <rect id="<?php if ($bfloor9 < 18): ?>Floor&nbsp;9<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor9 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1588.5" width="353" height="43"/>
                            </a>
                            <a href="/en/bfloor/9">     
                                <rect id="<?php if ($bfloor10 < 18): ?>Floor&nbsp;10<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor10 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1538.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/10">     
                                <rect id="<?php if ($bfloor11 < 18): ?>Floor&nbsp;11<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor11 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1489.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/11">     
                                <rect id="<?php if ($bfloor12 < 18): ?>Floor&nbsp;12<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor12 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1440.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/12">     
                                <rect id="<?php if ($bfloor13 < 18): ?>Floor&nbsp;13<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor13 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1391.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/13">     
                                <rect id="<?php if ($bfloor14 < 18): ?>Floor&nbsp;14<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor14 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1342.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/14">     
                                <rect id="<?php if ($bfloor15 < 18): ?>Floor&nbsp;15<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor15 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1293.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/15">     
                                <rect id="<?php if ($bfloor16 < 18): ?>Floor&nbsp;16<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor16 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1245.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/16">     
                                <rect id="<?php if ($bfloor17 < 18): ?>Floor&nbsp;17<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor17 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1197.5" width="353" height="44"/>
                            </a>
                            <a href="/en/bfloor/17">     
                                <rect id="<?php if ($bfloor18 < 18): ?>Floor&nbsp;18<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor18 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1146.5" width="353" height="48"/>
                            </a>
                            <a href="/en/bfloor/18">     
                                <rect id="<?php if ($bfloor19 < 18): ?>Floor&nbsp;19<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor19 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1099.5" width="353" height="44"/>
                            </a>
                            <a href="/en/bfloor/19">     
                                <rect id="<?php if ($bfloor20 < 18): ?>Floor&nbsp;20<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor20 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1050.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/20">     
                                <rect id="<?php if ($bfloor21 < 18): ?>Floor&nbsp;21<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor21 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="1002.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/21">     
                                <rect id="<?php if ($bfloor22 < 18): ?>Floor&nbsp;22<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor22 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="952.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/22">     
                                <rect id="<?php if ($bfloor23 < 18): ?>Floor&nbsp;23<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor23 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="903.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/23">     
                                <rect id="<?php if ($bfloor24 < 18): ?>Floor&nbsp;24<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor24 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="854.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/24">     
                                <rect id="<?php if ($bfloor25 < 18): ?>Floor&nbsp;25<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor25 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="806.5" width="353" height="44"/>
                            </a>
                            <a href="/en/bfloor/25">     
                                <rect id="<?php if ($bfloor26 < 18): ?>Floor&nbsp;26<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor26 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="750.5" width="353" height="51"/>
                            </a>
                            <a href="/en/bfloor/26">     
                                <rect id="<?php if ($bfloor27 < 18): ?>Floor&nbsp;27<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor27 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="697.5" width="353" height="49"/>
                            </a>
                            <a href="/en/bfloor/27">     
                                <rect id="<?php if ($bfloor28 < 18): ?>Floor&nbsp;28<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor28 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="648.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/28">     
                                <rect id="<?php if ($bfloor29 < 18): ?>Floor&nbsp;29<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor29 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="599.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/29">     
                                <rect id="<?php if ($bfloor30 < 18): ?>Floor&nbsp;30<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor30 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="550.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/30">     
                                <rect id="<?php if ($bfloor31 < 18): ?>Floor&nbsp;31<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor31 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="500.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/31">     
                                <rect id="<?php if ($bfloor32 < 18): ?>Floor&nbsp;32<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor32 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="450.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/32">     
                                <rect id="<?php if ($bfloor33 < 18): ?>Floor&nbsp;33<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor33 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="400.5" width="353" height="46"/>
                            </a>
                            <a href="/en/bfloor/33">     
                                <rect id="<?php if ($bfloor34 < 18): ?>Floor&nbsp;34<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor34 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="352.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/34">     
                                <rect id="<?php if ($bfloor35 < 18): ?>Floor&nbsp;35<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor35 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="304.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/35">     
                                <rect id="<?php if ($bfloor36 < 18): ?>Floor&nbsp;36<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor36 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="254.5" width="353" height="47"/>
                            </a>
                            <a href="/en/bfloor/36">     
                                <rect id="<?php if ($bfloor37 < 18): ?>Floor&nbsp;37<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor37 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="206.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/37">     
                                <rect id="<?php if ($bfloor38 < 18): ?>Floor&nbsp;38<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor38 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="158.5" width="353" height="44"/>
                            </a>
                            <a href="/en/bfloor/38">     
                                <rect id="<?php if ($bfloor39 < 18): ?>Floor&nbsp;39<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor39 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="109.5" width="353" height="45"/>
                            </a>
                            <a href="/en/bfloor/39">     
                                <rect id="<?php if ($bfloor40 < 18): ?>Floor&nbsp;40<?php else: ?>Sold<?php endif; ?>" class="<?php if ($bfloor40 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="653.5" y="60.5" width="353" height="46"/>
                            </a>
                        </svg>
                        <div class="description"></div>
                    </div> <!-- End: .container -->
                </div> <!-- End: .inner-container -->
            </div>
            <!--End: 1st Page Slider Section
                - HOME PAGE
            ====================================-->

            <!--Start: 2nd Page Slider Section
                - SERVICES PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

                <div class="inner-container services-section " id="services">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Section Heading -->
                            <div class="section-header col-sm-8 col-sm-offset-2">
                                <div class="overflow">
                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer m-b-15">
                                        <p class="sub-heading">About complex</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">Black Sea Towers</h2>
                                        <h3 class="section-heading min-heder">
                                        Elite residential complex from the developer <a href="https://realpalace.ge">Real Palace</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="info-block">
                                        <div class="overflow">
                                            <div class="title-outer">
                                                            <span><strong>Black Sea Towers</strong> - a new high-rise residential complex of premium class in the center of business Batumi. The complex is located near the sea on the Alley of Heroes opposite the UEFA stadium. It offers wonderful panoramic views of the city, mountains and sea. The builder and developer of the project is Real Palace. <br>
                                                                <strong>Black Sea Towers</strong> has modern architecture and classical forms, consists of two high-rise buildings of 40 floors each, in which customers are offered 557 apartments of various formats ranging from 29 to 97 sq. m.
                                                            </span>
                                                <div class="real-videos">
                                                    <a class="popup-youtube-1" href="https://www.youtube.com/watch?v=1Lx22eauXKA">
                                                        <img src="/public//images/gallery/play-button.png" alt="">
                                                    </a>
                                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=yEOFdEDAAhQ">
                                                        <img src="/public//images/gallery/play-button.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-block">
                                        <img src="/public/images/gallery/1.1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="overflow m-t-30 middle-objects" style="padding-bottom: 30px; border-bottom: 1px solid #484848;">
                                    <div class="btn-form-outer">
                                        <a href="/images/gallery/media/engppt.pdf" target="_blank" class="btn right-icon btn-mask">Download presentation <i class="icon icon-icon-floppy-alt"></i></a>
                                    </div>
                                    <div class="btn-form-outer">  <!-- Button Area -->
                                        <a href="#towers-more-info" class="btn right-icon btn-services btn-mask">More <i class="icon icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="btn-form-outer">
                                    <div class="number-info">
                                        <div class="number-info--block">
                                            <span>557</span>
                                            <span>Apartments</span>
                                        </div>
                                        <div class="number-info--block">
                                            <span>40</span>
                                            <span>Floors</span>
                                        </div>
                                        <div class="number-info--block">
                                            <span>1630 GEL</span>
                                            <span>Minimal price</span>
                                        </div>
                                        <div class="number-info--block">
                                            <?php $sold = 0 ?>
                                            <?php foreach ($apartments as $apartment): ?>
                                                <?php if ($apartment['status'] == 1): ?>
                                                    <?php $sold = $sold + 1 ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <span><?=$sold?></span>
                                            <span>Sold</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->

                            <div class="services-full-view">
                                <div class="services-details" id="towers-more-info">
                                    <div class="services-inner relative overflow">
                                        <!-- Content Area -->
                                        <div class="col-xs-12">
                                            <div class="services-content-outer">
                                                <div class="line-outer" style="margin-left: 50%;">
                                                    <div class="line"></div>
                                                </div>
                                                <div class="head-image">
                                                    <img src="/public/images/gallery/1.1-scale.jpg" alt="">
                                                    <div class="logo">
                                                        <img src="/public/images/gallery/logo.png" alt="">
                                                    </div>
                                                    <div class="back-button-outer overflow" style="background-color: rgba(28, 9, 9, 0.80); border-radius: 10px;padding: 10px;">
                                                        <a href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                                                    </div>
                                                </div>
                                                <div class="middle-block">
                                                    <div class="text-block">
                                                        <div class="overflow">
                                                            <div class="pera-outer">
                                                                <p><strong>Black Sea Towers</strong> - a new high-rise residential complex of premium class in the center of business Batumi. The complex is located near the sea on the Alley of Heroes opposite the UEFA stadium. It offers wonderful panoramic views of the city, mountains and sea. The builder and developer of the project is Real Palace. <br>
                                                                    <strong>Black Sea Towers</strong> has modern architecture and classical forms, consists of two high-rise buildings of 40 floors each, in which customers are offered 557 apartments of various formats ranging from 29 to 97 sq. m.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="overflow">
                                                            <div class="pera-outer">
                                                                <p><strong>Black Sea Towers Batumi</strong> “Real Palace” LLC was founded in 2011. For a short period of time, the company has accumulated vast experience in the construction industry. We have all the necessary resources for the implementation of construction work: from project development to commissioning. Our company is also an importer of high-quality building materials, which has a positive effect on the quality and cost of housing, which makes the company stand out in the market by the ratio of optimal prices and high quality construction. The company cooperates with the best architects of Georgia. For many years of our work, we have successfully and successfully implemented 10 multifunctional housing and hotel projects / complexes in Batumi.</p>
                                                                <p>Currently the company has 2 ongoing projects in Batumi and 1 in Tbilisi. In our projects we are trying to reunite quality and convenience, so that everyone has the opportunity to live in a healthy environment, which is facilitated by well-maintained and landscaped courtyards, which occupy 1/3 of our completed territories.</p>
                                                                <p>The priority of our company is not only the creation of decent and comfortable conditions, but also the establishment of long-term partnership with our customers.</p>
                                                            </div>
                                                        </div>

                                                        <div class="overflow m-t-15">
                                                            <div class="list-outer">
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Highest quality of construction
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Balcony for all apartments
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Recreational Area
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Biggest Parking
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Sport
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> An elite class
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="overflow">
                                                        <div class="title-outer">
                                                            <div class="zoom-gallery">
                                                                <a href="/public/images/gallery/1.jpg" title="Black Sea Towers">
                                                                    <img src="/public/images/gallery/1.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/5.jpg" title="Black Sea Towers Apartment">
                                                                    <img src="/public/images/gallery/5.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/7.jpg" title="Black Sea Towers Apartment">
                                                                    <img src="/public/images/gallery/7.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/2.jpg" title="Black Sea Towers">
                                                                    <img src="/public/images/gallery/2.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/3.jpg" title="Black Sea Towers">
                                                                    <img src="/public/images/gallery/3.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/6.jpg" title="Black Sea Towers">
                                                                    <img src="/public/images/gallery/6.jpg" width="180" height="180">
                                                                </a>
                                                            </div>
                                                            <div class="real-videos">
                                                                <a class="popup-youtube-1" style="margin: 0; margin-bottom: 5px;" href="https://www.youtube.com/watch?v=1Lx22eauXKA">
                                                                    <img src="/public/images/gallery/play-button.png" alt="">
                                                                </a>
                                                                <a class="popup-youtube-2" style="margin: 0; margin-left: 5px;" href="https://www.youtube.com/watch?v=yEOFdEDAAhQ">
                                                                    <img src="/public/images/gallery/play-button.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- End: .services-content-outer -->
                                        </div> <!-- End: Content Area -->
                                    </div> <!-- End: .services-inner -->
                                </div> <!-- End: .services-details -->
                            </div> <!-- End: .services-full-view -->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 2nd Page Slider Section
                - Services PAGE
            ====================================-->

            <!--Start: 3nd Page Slider Section
                - SERVICES PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

                <div class="inner-container services-section " id="services">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Section Heading -->
                            <div class="section-header col-sm-8 col-sm-offset-2">
                                <div class="overflow">
                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer m-b-15">
                                        <p class="sub-heading">Apartments</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">APARTMENT HANDOVER CONDITIONS</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="info-block" style="width: 80%">
                                        <div class="overflow">
                                            <div class="title-outer">
                                                <div class="js-img-compare">
                                                    <div style="display: none;">
                                                        <span class="images-compare-label">TURNKEY</span>
                                                        <img src="/public/images/gallery/complete.jpg" alt="Before">
                                                    </div>
                                                    <div>
                                                        <span class="images-compare-label">FINE FINISH</span>
                                                        <img src="/public/images/gallery/whitecarcase.jpg" alt="After">
                                                    </div>
                                                </div>

                                                <div style="display: flex; justify-content: center;">
                                                    <button class="js-front-btn remont-btn">TURNKEY</button>
                                                    <button class="js-back-btn remont-btn">FINE FINISH</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-block" style="width: 20%">
                                        <div class="real-videos" style="flex-direction: column; flex-wrap: nowrap">
                                            <a class="popup-360-1" style="margin: 0; margin-bottom: 5px; border-radius: 4px;" href="https://kuula.co/share/79Ml2?fs=1&vr=0&sd=1&autorotate=0.59&thumbs=1&chromeless=0&logo=0">
                                                <img src="/public/images/gallery/360-camera.png" alt="">
                                            </a>
                                            <a class="popup-360-2" style="margin: 0; margin-bottom: 5px; border-radius: 4px;" href="https://kuula.co/share/7FLRs?fs=1&vr=0&sd=1&autorotate=0.59&thumbs=1&chromeless=0&logo=0">
                                                <img src="/public/images/gallery/360-camera.png" alt="">
                                            </a>
                                            <a class="popup-360-3" style="margin: 0; margin-bottom: 5px; border-radius: 4px;" href="https://kuula.co/share/7Fps1?fs=1&vr=0&sd=1&autorotate=0.59&thumbs=1&chromeless=0&logo=0">
                                                <img src="/public/images/gallery/360-camera.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 3nd Page Slider Section
                - Services PAGE
            ====================================-->

            <!--Start: 4rd Page Slider Section
                - PORTFOLIO PAGE 1
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

                <div class="inner-container services-section " id="services">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Section Heading -->
                            <div class="section-header col-sm-8 col-sm-offset-2">
                                <div class="overflow">
                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer m-b-15">
                                        <p class="sub-heading">MEDIA</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">Black Sea Towers Media</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="image-block" style="margin-right: 20px;">
                                        <div class="overflow">
                                            <div class="title-outer head-image">
                                                <div style="background-color: rgba(28, 9, 9, 0.80); padding: 10px;">
                                                    <a href="/photos" class="btn">PHOTOS</a>
                                                </div>
                                                <img style="max-height: 380px;" src="/public/images/gallery/media-img.jpg" alt="">
                                                <div class="logo" style="display:flex; flex-direction: column;top: 40px;">
                                                    <img src="/public/images/gallery/logo.png" alt="">
                                                    <img src="/public/images/gallery/image-icon.png" alt="">
                                                </div>
                                                <div style="background-color: rgba(28, 9, 9, 0.80); padding: 10px;">
                                                    <a href="/photos" class="btn">See photos <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-block">
                                        <div class="overflow">
                                            <div class="title-outer head-image">
                                                <div class="back-button-outer overflow" style="background-color: rgba(28, 9, 9, 0.80); padding: 10px;">
                                                    <a href="#media-images" class="btn right-icon btn-services btn-mask">VIDEOS</a>
                                                </div>
                                                <img style="max-height: 380px;" src="/public/images/gallery/media-vde.jpg" alt="">
                                                <div class="logo" style="display:flex; flex-direction: column; top: 40px;">
                                                    <img src="/public/images/gallery/logo.png" alt="">
                                                    <img src="/public/images/gallery/video-icon.png" alt="">
                                                </div>
                                                <div class="back-button-outer overflow" style="background-color: rgba(28, 9, 9, 0.80); padding: 10px;">
                                                    <a href="#media-video" class="btn right-icon btn-services btn-mask">See videos <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->
                            <div class="services-full-view">
                                <div class="services-details" id="media-video">
                                    <div class="services-inner relative overflow">
                                        <!-- Content Area -->
                                        <div class="col-xs-12">
                                            <div class="middle-block">
                                                <div class="overflow" style="width: 100%">
                                                        <div class="title-outer" style="display: flex; justify-content: center; width:100%">
                                                            <div style="width: 80%; margin-top: 20%;">
                                                                <?php foreach ($media as $video): ?>
                                                                    <?php if ($video['video'] == ''): ?>
                                                                    <?php else: ?> 
                                                                        <iframe height="220" width="240"  
                                                                            src="https://www.youtube.com/embed/<?=$video['video']?>"> 
                                                                        </iframe>
                                                                    <?php endif; ?> 
                                                                <?php endforeach; ?>
                                                                <br>
                                                                <div style="background-color: rgba(28, 9, 9, 0.80); border-radius: 10px;padding: 10px;margin-bottom: 10px">
                                                                    <a style="width:100%;font-size:25px" href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> <!-- End: Content Area -->
                                    </div> <!-- End: .services-inner -->
                                </div> <!-- End: .services-details -->
                            </div> <!-- End: .services-full-view -->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 4rd Page Slider Section
                - PORTFOLIO PAGE 1
            ====================================-->



            <!--Start: 5th Page Slider Section
                - PORTFOLIO PAGE 2
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

                <div class="inner-container services-section " id="services">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Section Heading -->
                            <div class="section-header col-sm-8 col-sm-offset-2">
                                <div class="overflow">
                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer m-b-15">
                                        <p class="sub-heading">Frequently asked Questions</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">FAQ. QUESTION — ANSWER</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="image-block" style="margin-right: 20px;">
                                        <div class="overflow">
                                            <div class="title-outer">
                                                <div class="panel-group wrap" id="bs-collapse">

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-one">
                                                                Is it possible to change the apartment project?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-one" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            Yes
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-two">
                                                                Is there an installment plan?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-two" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            There is! With an initial payment of 20%, the company provides an internal interest-free installment plan for 30 months.
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-four">
                                                                Will there be apartment management?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-four" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            Black Sea Towers offers apartment management through a personal account: utility bills, income reporting, withdrawal of earnings, sources of customer acquisition, online synchronizer with apartment rental sites (Airbnb, Booking.com and more than a hundred sites around the world). All this information about your apartment will be transparent for you and available online.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-block">
                                        <div class="overflow">
                                            <div class="title-outer">
                                                <div class="panel-group wrap" id="bs-collapse">

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-five">
                                                                What is the condition of the apartments ?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-five" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            It's Black and White frame and "Turn key" Condition
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-six">
                                                                What documents must be provided by the client to purchase an apartment?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-six" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            Foreign citizens can acquire property in Georgia regardless of which country they are citizens of. The property right is secured by registering the contract with the House of Justice and guaranteed by the Constitution of Georgia. The real estate transaction is registered in the Public Register of Georgia. When buying, you only need to have a foreign passport. The deadline for registering a transaction in the register is from 1 hour to 4 working days with the payment of a state duty of 105 GEL.
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-tree">
                                                                    Does the project meet seismic resistance requirements?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-tree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            All projects under construction in Georgia meet the requirements of seismic resistance, otherwise the project cannot be coordinated with the municipality.
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->
                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 5th Page Slider Section
                - PORTFOLIO PAGE 2
            ====================================-->


            <!--Start: 8th Page Slider Section
                - OUR TEAM PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow dark-background" data-heading="">
                <div class="inner-container team-member dark-background" id="team">
                    <div class="container">
                        <div class="row section-separator sp-bottom">

                            <!-- Start: Section Heading -->
                            <div class="section-header col-sm-10 col-sm-offset-1">
                                <div class="overflow">
                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer m-b-15">
                                        <p class="sub-heading">Staff</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">BLACK SEA TOWERS Staff</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->

                            <div class="clearfix"></div>

                            <div class="col-sm-12 grid-item m-t-30">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 each-item overflow text-center relative">
                                        <div class="item-inner overflow absolute">

                                            <div class="profile-outer center">
                                                <div class="profile-image">
                                                    <img src="/public/images/gallery/logo.png" alt="Team Member" class="">
                                                </div>
                                                <div class="profile-content">
                                                    <span class="name" style="font-size: 13px;">Ednar Khimshiashvili</span>
                                                    <span class="position">Director</span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="content-detail">
                                                <p>Ednar Khimshiashvili CEO of the company real palaces.</p>
                                            </div>

                                        </div>
                                    </div> <!-- End: .each-item -->
                                    <div class="col-md-3 col-xs-6 each-item overflow text-center relative">
                                        <div class="item-inner overflow absolute">

                                            <div class="profile-outer center">
                                                <div class="profile-image">
                                                    <img src="/public/images/gallery/logo.png" alt="Team Member" class="">
                                                </div>
                                                <div class="profile-content">
                                                    <span class="name">Lasha Zoidze</span>
                                                    <span class="position">Commercial Director</span>
                                                    <span>+995 557 78 47 47</span>
                                                </div>
                                            </div>
                                            <div class="content-detail">
                                                <p>Lasha Zoidze Commercial Director</p>
                                            </div>

                                        </div>
                                    </div> <!-- End: .each-item -->
                                    <div class="col-md-3 col-xs-6 each-item overflow text-center relative">
                                        <div class="item-inner overflow absolute">

                                            <div class="profile-outer center">
                                                <div class="profile-image">
                                                    <img src="/public/images/gallery/logo.png" alt="Team Member" class="">
                                                </div>
                                                <div class="profile-content">
                                                    <span class="name">Leona Rizvadze</span>
                                                    <span class="position">Sales Manager</span>
                                                    <span>+995 514 67 47 47</span>
                                                </div>
                                            </div>
                                            <div class="content-detail">
                                                <p>Leona Rizvadze Sales Manager</p>
                                            </div>

                                        </div>
                                    </div> <!-- End: .each-item -->
                                    <div class="col-md-3 col-xs-6 each-item overflow text-center relative">
                                        <div class="item-inner overflow absolute">

                                            <div class="profile-outer center">
                                                <div class="profile-image">
                                                    <img src="/public/images/gallery/logo.png" alt="Team Member" class="">
                                                </div>
                                                <div class="profile-content">
                                                    <span class="name">Salome Zoidze</span>
                                                    <span class="position">Sales Manager</span>
                                                    <span>+995 577 22 47 47</span>
                                                </div>
                                            </div>
                                            <div class="content-detail">
                                                <p> Salome Zoidze Sales Manager</p>
                                            </div>

                                        </div>
                                    </div> <!-- End: .each-item -->
                                </div>
                            </div> <!-- End: .col-xs-12 -->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: .inner-container -->

            </div>
            <!--End: 8th Page Slider Section
                - OUR TEAM PAGE
            ====================================-->


            <!--Start: 9th Page Slider Section
                - CONTACT US PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow" data-heading="">
                <div class="overlay-color relative bg-image-2">

                    <div class="inner-container contact-us" id="contact">
                        <div class="container">
                            <div class="row">

                                <!-- Start: Section Heading -->
                                <div class="section-header col-sm-10 col-sm-offset-1">
                                    <div class="overflow">
                                        <div class="line-outer">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div class="overflow">
                                        <div class="section-heading-outer m-b-15">
                                            <p class="sub-heading">Contact</p>
                                        </div>
                                    </div>
                                    <div class="overflow">
                                        <div class="section-heading-outer p-l-50 p-r-50">
                                            <h2 class="section-heading">Contact us for consultation</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Section Heading -->

                                <div class="clearfix"></div>

                                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 overflow">
                                    <div class="row single-form-outer">
                                        <h6 class="success dark-background">Your message has been sent, we will reply to you soon</h6>
                                        <h6 class="error red-text"></h6>
                                        <form id="contact-form" method="post" class="dark-background single-form">

                                            <div class="col-xs-12">
                                                <div class="input-outer">
                                                    <div class="group relative">
                                                        <input name="phone" class="contact-name form-control" id="phone" type="text"  required="">
                                                        <label class="input-label" for="contact-name">
                                                            <span class="label-text">Mobile number</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12">
                                                <div class="input-outer ">
                                                    <div class="group relative">
                                                        <input name="email" class="contact-email form-control" id="email" type="email"  required="">
                                                        <label class="input-label" for="contact-email">
                                                            <span class="label-text">Email</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xs-12">
                                                <div class="input-outer ">
                                                    <div class="group relative">
                                                        <textarea class="contact-message form-control" name="message" id="message" rows="3" required=""></textarea>
                                                        <label class="input-label" for="contact-message">
                                                            <span class="label-text">Message</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Subject Button -->
                                            <div class="btn-form text-center col-xs-12">
                                                <div class="button-outer relative">
                                                    <button class="btn btn-fill right-icon">SEND <i class="icon icon-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div> <!-- /#testimonials-1 -->
                                </div> <!-- End: .col-xs-12 -->

                                <div class="clearfix"></div>

                                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contact-footer" style="background-color: #171717;">
                                    <div class="row">

                                        <div class="about col-sm-1 m-t-15">

                                            <div class="overflow">
                                                <div class="logo-outer">
                                                    <a href="https://realpalace.ge" class="logo-link">
                                                        <img src="/public/images/gallery/logo.png" alt="" class="img-responsive logo">
                                                    </a>
                                                </div>
                                            </div>

                                        </div> <!-- End: .about -->
                                        <div class="other-link col-sm-11">
                                            <div class="row">

                                                <div class="each-section col-sm-4 col-xs-12">

                                                    <div class="overflow">
                                                        <p class="title">Address</p>
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <span class="btn-mask">Batumi, Zh. Shartava str. 16</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div> <!-- End: .each-section -->
                                                <div class="each-section col-sm-4 col-xs-12">

                                                    <div class="overflow">
                                                        <p class="title">Contact us</p>
                                                    </div>
                                                    <ul class="nav">

                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="callto:+995577224747" class="btn-mask">+995 577 22 47 47</a>
                                                            </div>
                                                        </li>
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="callto:+995514674747" class="btn-mask">+995 514 67 47 47</a>
                                                            </div>
                                                        </li>
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="callto:+995514654747" class="btn-mask">+995 514 65 47 47</a>
                                                            </div>
                                                        </li>
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="mailto:realpalace2012@gmail.com" class="btn-mask">realpalace2012@gmail.com</a>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div> <!-- End: .each-section -->
                                                <div class="each-section col-sm-4 col-xs-12">

                                                    <div class="overflow">
                                                        <p class="title">Social networks</p>
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <ul class="nav social-icon">
                                                                    <li><a target="_blank" href="https://www.facebook.com/BuildingCompanyREALPALACE/"><i class="icon icon-social-facebook"></i></a></li>
                                                                    <li><a target="_blank" href="https://www.instagram.com/black_sea_towers/"><i class="icon icon-social-instagram"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div> <!-- End: .each-section -->

                                            </div>

                                        </div> <!-- End: .other-link -->
                                    </div> <!-- End: .row -->
                                </div> <!-- End: .contact-footer -->
                                <iframe src="https://www.google.com/maps/d/embed?mid=1bO6dhTL_dEHL-98Jm53cPaG6USeDrS46" width="100%" height="600"></iframe>
                            </div> <!-- End: .row -->
                        </div> <!-- End: .container -->
                    </div> <!-- End: .inner-container -->

                </div>
            </div>
            <!--End: 9th Page Slider Section
                - CONTACT US PAGE
            ====================================-->


        </div> <!-- End: .row -->
    </div> <!-- End: .container -->
</section>

