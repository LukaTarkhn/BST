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
<style>
    html,
    body,
    section,
    .inner-container {
        height: 100%;
        background: #202020;
    }
    .inner-container {
        display: flex; flex-direction: column;align-items: center;justify-content: center;

    }
    .apartment-pick {
        width: 80%;
    }
    .sub-heading {
        position: absolute;
        width: 100%;
        top:5%
    }
    .pick-heading {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        line-height: 40px;
        font-weight: 600;
        color: #f7ac54;
        text-transform: uppercase;
        margin-bottom: 0px;
    }
    .pick-heading, .sub-heading, html, body, h1, h2, span, p, small, div, a, h3, .btn, .right-icon, .btn-services, .btn-mask, .section-heading, .min-heder, #bingc-phone-button-tooltip {
    font-family: CITI-Nus-Regular;
}
</style>
<?php $items = array(); ?>
<?php  foreach ($apartments as $apartment): ?>
    <?php if ($floor->floor == $apartment->floorid):  ?>
        <?php $items[] = $apartment ?>
    <?php endif; ?>
<?php endforeach; ?>
<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <section>
        <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo.png" alt="">
            </a>
        </div>
        <div class="needed-btns" style="z-index: 9999">
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
        <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
            <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> დატოვეთ ნომერი და <br>ჩვენ გადმოგირეკავთ
            <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
                <polyline fill="#B3B3B3" points="17.977,0 0.083,0 17.977,13.927 "></polyline>
            </svg>
            </div>
            <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
                <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
            </svg>
            <div id="bingc-phone-button-icon-text" class="bingc-phone-button-icon-text"><span>დაკავშირება</span></div>
            <svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 16.877 16.877" xml:space="preserve">
                <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039 c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938 c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457 c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176 c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001 C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666 l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51 C16.93,13.729,16.935,13.352,16.702,13.119z"></path>
            </svg>
        </a>
        <div id="call-back" class="zoom-anim-dialog mfp-hide">
            <p class="call-back--header"><b>საკონტაქტო ინფორმაცია</b></p>
            <span>+995 577 22 47 47</span>
            <span>+995 514 67 47 47</span>
            <span>+995 514 65 47 47</span>
            <span>realpalace2012@gmail.com</span>
            <p class="call-back--header"><b>ჩვენ დაგირეკავთ</b></p>
            <h6 class="callsuccess dark-background">მადლობა, მალე დაგირეკავთ</h6>
            <h6 class="callerror red-text"></h6>
            <form id="call-form">
                <input id="phone" name="phone" type="tel" placeholder="თქვენი ტელეფონის ნომერი" required>
                <button type="submit" value="Send">დამირეკეთ</button>
            </form>
        </div>
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">სხვა სართულის არჩევა</p>
        </a>
        <p class="sub-heading" style="top: 2%">სართული <?=$floor->floor?></p>
        <div class="inner-container">
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">ზღვის ხედით</p>
            <div class="apartment-pick">
                <?php if ($floor->floor == 5):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2115 824.25">
                        <image width="2820" height="1099" transform="scale(0.75)" xlink:href="/public/images/gallery/5gegma.jpg"/>
                        
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="867 69 867 380 1073 380 1073 5 910 5 909 71 867 69"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1074.67 5 1075.67 380 1278.33 380 1281.33 5 1074.67 5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1073 448.33 1276.67 448.33 1276.67 813.67 1074.67 813.67 1073 448.33"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="867 448.33 1070 448.33 1070 813.67 867 811 867 448.33"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="714 448.33 864 448.33 864.5 810 714 810 714 448.33"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="554 448.33 711.5 448.33 712 813.67 558 813.67 554 448.33"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="319.13 448.33 550.67 448.33 554 813.67 319.13 813.67 319.13 448.33"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="236 448.33 316 448.33 316 813.67 7.33 810 7.33 415 234 412.5 236 448.33"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="7.33 412.5 235 410 235 383.5 319.5 383.5 318.5 4 7.33 4 7.33 412.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="321 4 322 383 556 383 552.83 4 321 4"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 4): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2058 912.75">
                        <image width="2744" height="1217" transform="scale(0.75)" xlink:href="/public/images/gallery/4gegma.jpg"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="960 81 1006 81 1006 8 1185 8 1185 424 960 424 960 81" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1187.25 8 1189.67 424 1412.33 424 1412.33 155 1554 155 1554 8 1187.25 8" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1555.25 8 1555.25 155.25 1691 155.25 1694.5 424 1971 424 1971 81 2054.5 80.5 2054.5 8 1555.25 8" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1696.03 899.08 2054.5 905 2054.5 830 1968 830 1968 496 1698 496 1696.03 899.08" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1411.67 496 1695 496 1693.5 902.5 1413.25 902.5 1411.67 496" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1409.33 496 1411.67 902.5 1189 902.5 1189 496 1409.33 496" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1187 496 1187 902.5 963.33 902.5 965 496 1187 496" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="962.25 496 959.75 902.5 792 902.5 792 496 962.25 496" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="619.75" y="496" width="170.25" height="406.5" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="615.5 496 616.5 902.5 357 902.5 357 496 615.5 496" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="267.63 496 350.12 496 353.67 902.5 11.14 902.5 11.14 459.67 265.67 459.67 267.63 496" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="11.14 8 11.14 456.5 263.5 456.5 263.5 427 353.67 427 353.67 8 11.14 8" />
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="356.25 8 357 426.25 616.5 426.25 613 8 356.25 8" />
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3442.76 1224">
                        <image width="3442" height="1224" transform="translate(0.76)" xlink:href="/public/images/gallery/bgegma.png"/>

                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1674.76 601 1995.76 601 2006.76 1069 1942.76 1069 1938.76 1188 1674.76 1188 1674.76 601"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1360.76 601 1669.76 601 1669.76 1188 1141.76 1188 1147.76 963 1347.76 961 1360.76 601"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="950.76 959 1141.76 966 1135.76 1188 1009.76 1183 990.76 1154 916.76 1154 916.76 1162 745.76 1161 778.76 601 961.76 601 950.76 959"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="579.76 601 772.76 601 745.76 1161 528.76 1161 579.76 601"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="476.76 601 476.76 681 567.76 681 528.76 1156 437.76 1156 165.76 1188 195.76 1065 0.76 1061 98.76 841 21.76 817 141.76 565 267.76 601 476.76 601"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="601.76 358 698.76 358 689.76 507.12 487.76 508 481.76 601 268.76 599 136.76 561.33 204.1 416 173.43 200.67 251.76 184 229.76 81 623.1 83 601.76 358"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="646.1 7 641.76 87 626.1 87 604.1 354.67 701.43 354.67 692.43 506.67 967.43 506.67 996.1 7 646.1 7"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="997.89 13.49 969.76 506.67 1171.26 506.67 1191.43 14.99 997.89 13.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1192.76 14.75 1173.26 506.67 1363.51 506.67 1376.76 14.75 1192.76 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1378.51 14.75 1366.26 506.67 1681.1 506.67 1681.1 14.75 1378.51 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1683.6 14.75 1682.76 506.67 1990.76 506.67 1985.1 14.75 1683.6 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1987.26 14.75 1994.76 506.67 2232.26 506.67 2216.26 14.75 1987.26 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2218.43 14.75 2235.1 506.67 2480.26 506.67 2452.76 14.75 2218.43 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2454.93 14.75 2481.76 506.67 2842.43 506.67 2803.76 14.75 2454.93 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2807.43 14.75 2845.43 506.67 2973.76 506.67 2967.1 390.67 3303.76 389.67 3261.1 19 2807.43 14.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2975.64 506.67 2969.89 406.88 2992.51 406.88 2992.51 392.25 3303.76 393 3343.76 730.5 2994.26 730.5 2975.64 506.67"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="3343.76 734.5 3387.76 1173 2891.26 1173 2849.76 605.5 2980.26 605.5 2988.76 735 3343.76 734.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2485.76 605.5 2846.76 605.5 2886.76 1173 2508.1 1173 2485.76 605.5"/>
                        </a>
                    </svg>
                <?php endif; ?>
               <div class="description"></div>
            </div>

            <p class="pick-heading">ქალაქისა და ზღვის ხედით</p>
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php elseif($lang['code'] === 'EN'): ?>
    <section>
        <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo.png" alt="">
            </a>
        </div>
        <div class="needed-btns" style="z-index: 9999">
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
        <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
            <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> Do you want to call you<br>back at a convenient time? 
            <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
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
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">Pick other floor</p>
        </a>
        <p class="sub-heading" style="top: 2%">Flor <?=$floor->floor?></p>
        <div class="inner-container">
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">Sea view</p>
            <div class="apartment-pick">
                <?php if ($floor->floor == 5):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2115 824.25">
                        <image width="2820" height="1099" transform="scale(0.75)" xlink:href="/public/images/gallery/5gegma.jpg"/>
                        
                        <a href="/en/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="867 69 867 380 1073 380 1073 5 910 5 909 71 867 69"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1074.67 5 1075.67 380 1278.33 380 1281.33 5 1074.67 5"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1073 448.33 1276.67 448.33 1276.67 813.67 1074.67 813.67 1073 448.33"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="867 448.33 1070 448.33 1070 813.67 867 811 867 448.33"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="714 448.33 864 448.33 864.5 810 714 810 714 448.33"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="554 448.33 711.5 448.33 712 813.67 558 813.67 554 448.33"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="319.13 448.33 550.67 448.33 554 813.67 319.13 813.67 319.13 448.33"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="236 448.33 316 448.33 316 813.67 7.33 810 7.33 415 234 412.5 236 448.33"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="7.33 412.5 235 410 235 383.5 319.5 383.5 318.5 4 7.33 4 7.33 412.5"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="321 4 322 383 556 383 552.83 4 321 4"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 4): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2058 912.75">
                        <image width="2744" height="1217" transform="scale(0.75)" xlink:href="/public/images/gallery/4gegma.jpg"/>
                        <a href="/en/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="960 81 1006 81 1006 8 1185 8 1185 424 960 424 960 81" />
                        </a>
                        <a href="/en/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1187.25 8 1189.67 424 1412.33 424 1412.33 155 1554 155 1554 8 1187.25 8" />
                        </a>
                        <a href="/en/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1555.25 8 1555.25 155.25 1691 155.25 1694.5 424 1971 424 1971 81 2054.5 80.5 2054.5 8 1555.25 8" />
                        </a>
                        <a href="/en/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1696.03 899.08 2054.5 905 2054.5 830 1968 830 1968 496 1698 496 1696.03 899.08" />
                        </a>
                        <a href="/en/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1411.67 496 1695 496 1693.5 902.5 1413.25 902.5 1411.67 496" />
                        </a>
                        <a href="/en/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1409.33 496 1411.67 902.5 1189 902.5 1189 496 1409.33 496" />
                        </a>
                        <a href="/en/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1187 496 1187 902.5 963.33 902.5 965 496 1187 496" />
                        </a>
                        <a href="/en/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="962.25 496 959.75 902.5 792 902.5 792 496 962.25 496" />
                        </a>
                        <a href="/en/bapartment/<?= $items[8]['id'] ?>">
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="619.75" y="496" width="170.25" height="406.5" />
                        </a>
                        <a href="/en/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="615.5 496 616.5 902.5 357 902.5 357 496 615.5 496" />
                        </a>
                        <a href="/en/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="267.63 496 350.12 496 353.67 902.5 11.14 902.5 11.14 459.67 265.67 459.67 267.63 496" />
                        </a>
                        <a href="/en/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="11.14 8 11.14 456.5 263.5 456.5 263.5 427 353.67 427 353.67 8 11.14 8" />
                        </a>
                        <a href="/en/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="356.25 8 357 426.25 616.5 426.25 613 8 356.25 8" />
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3442.76 1224">
                        <image width="3442" height="1224" transform="translate(0.76)" xlink:href="/public/images/gallery/bgegma.png"/>

                        <a href="/en/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1674.76 601 1995.76 601 2006.76 1069 1942.76 1069 1938.76 1188 1674.76 1188 1674.76 601"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1360.76 601 1669.76 601 1669.76 1188 1141.76 1188 1147.76 963 1347.76 961 1360.76 601"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="950.76 959 1141.76 966 1135.76 1188 1009.76 1183 990.76 1154 916.76 1154 916.76 1162 745.76 1161 778.76 601 961.76 601 950.76 959"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="579.76 601 772.76 601 745.76 1161 528.76 1161 579.76 601"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="476.76 601 476.76 681 567.76 681 528.76 1156 437.76 1156 165.76 1188 195.76 1065 0.76 1061 98.76 841 21.76 817 141.76 565 267.76 601 476.76 601"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="601.76 358 698.76 358 689.76 507.12 487.76 508 481.76 601 268.76 599 136.76 561.33 204.1 416 173.43 200.67 251.76 184 229.76 81 623.1 83 601.76 358"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="646.1 7 641.76 87 626.1 87 604.1 354.67 701.43 354.67 692.43 506.67 967.43 506.67 996.1 7 646.1 7"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="997.89 13.49 969.76 506.67 1171.26 506.67 1191.43 14.99 997.89 13.49"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1192.76 14.75 1173.26 506.67 1363.51 506.67 1376.76 14.75 1192.76 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1378.51 14.75 1366.26 506.67 1681.1 506.67 1681.1 14.75 1378.51 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1683.6 14.75 1682.76 506.67 1990.76 506.67 1985.1 14.75 1683.6 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1987.26 14.75 1994.76 506.67 2232.26 506.67 2216.26 14.75 1987.26 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2218.43 14.75 2235.1 506.67 2480.26 506.67 2452.76 14.75 2218.43 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2454.93 14.75 2481.76 506.67 2842.43 506.67 2803.76 14.75 2454.93 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2807.43 14.75 2845.43 506.67 2973.76 506.67 2967.1 390.67 3303.76 389.67 3261.1 19 2807.43 14.75"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2975.64 506.67 2969.89 406.88 2992.51 406.88 2992.51 392.25 3303.76 393 3343.76 730.5 2994.26 730.5 2975.64 506.67"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="3343.76 734.5 3387.76 1173 2891.26 1173 2849.76 605.5 2980.26 605.5 2988.76 735 3343.76 734.5"/>
                        </a>
                        <a href="/en/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2485.76 605.5 2846.76 605.5 2886.76 1173 2508.1 1173 2485.76 605.5"/>
                        </a>
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>

            <p class="pick-heading">City and Sea view</p>
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php elseif($lang['code'] === 'RU'): ?>
    <section>
        <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo.png" alt="">
            </a>
        </div>
        <div class="needed-btns" style="z-index: 9999">
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
        <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
            <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> Хотите, перезвоним Вам<br>в удобное время? 
            <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
                <polyline fill="#B3B3B3" points="17.977,0 0.083,0 17.977,13.927 "></polyline>
            </svg>
            </div>
            <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
                <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
            </svg>
            <div id="bingc-phone-button-icon-text" class="bingc-phone-button-icon-text"><span>КНОПКА<br>СВЯЗИ</span></div>
            <svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 16.877 16.877" xml:space="preserve">
                <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039 c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938 c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457 c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176 c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001 C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666 l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51 C16.93,13.729,16.935,13.352,16.702,13.119z"></path>
            </svg>
        </a>
        <div id="call-back" class="zoom-anim-dialog mfp-hide">
            <p class="call-back--header"><b>Контакты</b></p>
            <span>+995 577 22 47 47</span>
            <span>+995 514 67 47 47</span>
            <span>+995 514 65 47 47</span>
            <span>realpalace2012@gmail.com</span>
            <p class="call-back--header"><b>Мы вам позвоним</b></p>
            <h6 class="callsuccess dark-background">Спасибо, мы скоро вам позвоним</h6>
            <h6 class="callerror red-text"></h6>
            <form id="call-form">
                <input id="phone" name="phone" type="tel" placeholder="Ваш номер телефона" required>
                <button type="submit" value="Send">Позвоните мне</button>
            </form>
        </div>
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">Выбрать другой этаж</p>
        </a>
        <p class="sub-heading" style="top: 2%">этаж <?=$floor->floor?></p>
        <div class="inner-container">
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">Вид на море</p>
            <div class="apartment-pick">
                <?php if ($floor->floor == 5):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2115 824.25">
                        <image width="2820" height="1099" transform="scale(0.75)" xlink:href="/public/images/gallery/5gegma.jpg"/>
                        
                        <a href="/ru/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="867 69 867 380 1073 380 1073 5 910 5 909 71 867 69"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1074.67 5 1075.67 380 1278.33 380 1281.33 5 1074.67 5"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1073 448.33 1276.67 448.33 1276.67 813.67 1074.67 813.67 1073 448.33"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="867 448.33 1070 448.33 1070 813.67 867 811 867 448.33"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="714 448.33 864 448.33 864.5 810 714 810 714 448.33"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="554 448.33 711.5 448.33 712 813.67 558 813.67 554 448.33"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="319.13 448.33 550.67 448.33 554 813.67 319.13 813.67 319.13 448.33"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="236 448.33 316 448.33 316 813.67 7.33 810 7.33 415 234 412.5 236 448.33"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="7.33 412.5 235 410 235 383.5 319.5 383.5 318.5 4 7.33 4 7.33 412.5"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="321 4 322 383 556 383 552.83 4 321 4"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 4): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2058 912.75">
                        <image width="2744" height="1217" transform="scale(0.75)" xlink:href="/public/images/gallery/4gegma.jpg"/>
                        <a href="/ru/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="960 81 1006 81 1006 8 1185 8 1185 424 960 424 960 81" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1187.25 8 1189.67 424 1412.33 424 1412.33 155 1554 155 1554 8 1187.25 8" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1555.25 8 1555.25 155.25 1691 155.25 1694.5 424 1971 424 1971 81 2054.5 80.5 2054.5 8 1555.25 8" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1696.03 899.08 2054.5 905 2054.5 830 1968 830 1968 496 1698 496 1696.03 899.08" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1411.67 496 1695 496 1693.5 902.5 1413.25 902.5 1411.67 496" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1409.33 496 1411.67 902.5 1189 902.5 1189 496 1409.33 496" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="1187 496 1187 902.5 963.33 902.5 965 496 1187 496" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="962.25 496 959.75 902.5 792 902.5 792 496 962.25 496" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[8]['id'] ?>">
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="619.75" y="496" width="170.25" height="406.5" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="615.5 496 616.5 902.5 357 902.5 357 496 615.5 496" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="267.63 496 350.12 496 353.67 902.5 11.14 902.5 11.14 459.67 265.67 459.67 267.63 496" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="11.14 8 11.14 456.5 263.5 456.5 263.5 427 353.67 427 353.67 8 11.14 8" />
                        </a>
                        <a href="/ru/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>"  points="356.25 8 357 426.25 616.5 426.25 613 8 356.25 8" />
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3442.76 1224">
                        <image width="3442" height="1224" transform="translate(0.76)" xlink:href="/public/images/gallery/bgegma.png"/>

                        <a href="/ru/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1674.76 601 1995.76 601 2006.76 1069 1942.76 1069 1938.76 1188 1674.76 1188 1674.76 601"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1360.76 601 1669.76 601 1669.76 1188 1141.76 1188 1147.76 963 1347.76 961 1360.76 601"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="950.76 959 1141.76 966 1135.76 1188 1009.76 1183 990.76 1154 916.76 1154 916.76 1162 745.76 1161 778.76 601 961.76 601 950.76 959"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="579.76 601 772.76 601 745.76 1161 528.76 1161 579.76 601"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="476.76 601 476.76 681 567.76 681 528.76 1156 437.76 1156 165.76 1188 195.76 1065 0.76 1061 98.76 841 21.76 817 141.76 565 267.76 601 476.76 601"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="601.76 358 698.76 358 689.76 507.12 487.76 508 481.76 601 268.76 599 136.76 561.33 204.1 416 173.43 200.67 251.76 184 229.76 81 623.1 83 601.76 358"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="646.1 7 641.76 87 626.1 87 604.1 354.67 701.43 354.67 692.43 506.67 967.43 506.67 996.1 7 646.1 7"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="997.89 13.49 969.76 506.67 1171.26 506.67 1191.43 14.99 997.89 13.49"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1192.76 14.75 1173.26 506.67 1363.51 506.67 1376.76 14.75 1192.76 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1378.51 14.75 1366.26 506.67 1681.1 506.67 1681.1 14.75 1378.51 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1683.6 14.75 1682.76 506.67 1990.76 506.67 1985.1 14.75 1683.6 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1987.26 14.75 1994.76 506.67 2232.26 506.67 2216.26 14.75 1987.26 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2218.43 14.75 2235.1 506.67 2480.26 506.67 2452.76 14.75 2218.43 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2454.93 14.75 2481.76 506.67 2842.43 506.67 2803.76 14.75 2454.93 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2807.43 14.75 2845.43 506.67 2973.76 506.67 2967.1 390.67 3303.76 389.67 3261.1 19 2807.43 14.75"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2975.64 506.67 2969.89 406.88 2992.51 406.88 2992.51 392.25 3303.76 393 3343.76 730.5 2994.26 730.5 2975.64 506.67"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="3343.76 734.5 3387.76 1173 2891.26 1173 2849.76 605.5 2980.26 605.5 2988.76 735 3343.76 734.5"/>
                        </a>
                        <a href="/ru/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2485.76 605.5 2846.76 605.5 2886.76 1173 2508.1 1173 2485.76 605.5"/>
                        </a>
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>

            <p class="pick-heading">Вид на город и море</p>
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php endif ?>

