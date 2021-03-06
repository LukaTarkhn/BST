$('#languages').change(function () {
    window.location = '/languages/change?lang=' + $(this).val();
});



$('#play-button').click(function(){
    $('#embed').attr('src', 'https://www.youtube.com/embed/FBpnK_Z8Fsw?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=0');
});

$('#stream-button').click(function(){
    $('#embed').attr('src', 'https://g1.ipcamlive.com/player/player.php?alias=5e4e791317da0');
});

$(document).ready(function() {
    $('#play-btn').magnificPopup({type:'iframe'});
});

$('#play-btn').magnificPopup({
    type: 'iframe'
    // other options
});

$(document).ready(function() {
    $('#stream-button').magnificPopup({type:'iframe'});
});

$('#stream-button').magnificPopup({
    type: 'iframe'
    // other options
});

//
// Example with single object
$('#open-popup').magnificPopup({
    items: {
        src: 'path-to-image-1.jpg'
    },
    type: 'image' // this is default type
});


$('#realpalaceGallery').magnificPopup({
    items: [
        {
            src: 'https://i.imgur.com/PIGIwNO.jpg'
        },
        {
            src: 'https://i.imgur.com/jRUcb6C.jpg'
        },
        {
            src: 'https://i.imgur.com/fk3rRIy.jpg'
        },
        {
            src: 'https://i.imgur.com/GEAIfL7.jpg'
        },
        {
            src: 'https://i.imgur.com/Y0mCIZO.jpg'
        },
        {
            src: 'https://i.imgur.com/jG12k0l.jpg'
        },
        {
            src: 'https://i.imgur.com/sEW6s1K.jpg'
        },
        {
            src: 'https://i.imgur.com/RAhNm6n.jpg'
        },
        {
            src: 'https://i.imgur.com/E4doqmj.jpg'
        },
        {
            src: 'https://i.imgur.com/SQ4reZ6.jpg'
        },
        {
            src: 'https://i.imgur.com/VG4iveT.jpg'
        },
        {
            src: 'https://i.imgur.com/1OthDrs.jpg'
        },
        {
            src: 'https://i.imgur.com/DenjQti.jpg'
        },
        {
            src: 'https://i.imgur.com/XUFzYUR.jpg'
        },
        {
            src: 'https://i.imgur.com/CREurwL.jpg'
        },
        {
            src: 'https://i.imgur.com/kRM8Spm.jpg'
        }
    ],
    gallery: {
        enabled: true
    },
    type: 'image' // this is default type
});

$('#megapalaceGallery').magnificPopup({
    items: [
        {
            src: 'https://i.imgur.com/Mh0v5Uv.jpg'
        },
        {
            src: 'https://i.imgur.com/KCfl2tw.jpg'
        },
        {
            src: 'https://i.imgur.com/a4i2PgG.jpg'
        },
        {
            src: 'https://i.imgur.com/Vm3VmA1.jpg'
        },
        {
            src: 'https://i.imgur.com/DnNAcD0.jpg'
        }
    ],
    gallery: {
        enabled: true
    },
    type: 'image' // this is default type
});

$('#pirosmanGallery').magnificPopup({
    items: [
        {
            src: 'https://i.imgur.com/JN6D5Bw.jpg'
        },
        {
            src: 'https://i.imgur.com/zlg6kxn.jpg'
        },
        {
            src: 'https://i.imgur.com/s7MV55q.jpg'
        },
        {
            src: 'https://i.imgur.com/hGAjiuj.jpg'
        },
        {
            src: 'https://i.imgur.com/NP6HvAx.jpg'
        },
        {
            src: 'https://i.imgur.com/86vNvNL.jpg'
        }
    ],
    gallery: {
        enabled: true
    },
    type: 'image' // this is default type
});

window.addEventListener('load', function() {

    var home = document.querySelector('.home');
    delay = 0;

    setTimeout(function() {
        $('.headcontent').addClass('loaded');
    }, 1500);
    if (screen.width < 600 ) {
        var headchange = function() {
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/mob1.jpg), url(../images/backgrounds/mob1.1.jpg), url(../images/backgrounds/mob1.2.jpg)';
                home.style.backgroundSize = '100% 100%';
            }, delay);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/mob1.jpg), url(../images/backgrounds/mob1.1.jpg), url(../images/backgrounds/mob1.2.jpg)';
                home.style.backgroundSize = '300% 300%';
            }, delay + 4700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/mob1.1.jpg), url(../images/backgrounds/mob1.jpg), url(../images/backgrounds/mob1.2.jpg)';
                home.style.backgroundSize = '100% 100%';
            }, delay + 5700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/mob1.1.jpg), url(../images/backgrounds/mob1.jpg), url(../images/backgrounds/mob1.2.jpg)';
                home.style.backgroundSize = '300% 300%';
            }, delay + 12700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/mob1.2.jpg), url(../images/backgrounds/mob1.1.jpg), url(../images/backgrounds/mob1.jpg)';
                home.style.backgroundSize = '100% 100%';
            }, delay + 13700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/mob1.2.jpg), url(../images/backgrounds/mob1.1.jpg), url(../images/backgrounds/mob1.jpg)';
                home.style.backgroundSize = '300% 300%';
            }, delay + 20700);
        };
    } else {
        var headchange = function() {
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.2.jpg)';
                home.style.backgroundSize = '100% 100%';
            }, delay);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.2.jpg)';
                home.style.backgroundSize = '300% 300%';
            }, delay + 4700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.2.jpg)';
                home.style.backgroundSize = '100% 100%';
            }, delay + 5700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.2.jpg)';
                home.style.backgroundSize = '300% 300%';
            }, delay + 12700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/1.2.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg)';
                home.style.backgroundSize = '100% 100%';
            }, delay + 13700);
            setTimeout(function() {
                home.style.backgroundImage = 'url(../images/backgrounds/1.2.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg)';
                home.style.backgroundSize = '300% 300%';
            }, delay + 20700);
        };
    }

    headchange();
    setInterval(headchange, delay + 21700);
});

window.addEventListener('load', function() {

    var offerimg = document.querySelector('.offerimg');
    del = 0;

    setTimeout(function() {
        $('.headcontent').addClass('loaded');
    }, 1500);
    if (screen.width > 800 ) {
        var headchange = function() {
            setTimeout(function() {
                offerimg.style.transform = 'rotate(0)';
                offerimg.style.width = '210px';
            }, del);
            setTimeout(function() {
                offerimg.style.transform = 'rotate(-20deg)';
                offerimg.style.width = '250px';
            }, del + 5500);

        };
    }

    headchange();
    setInterval(headchange, delay + 8200);
});


window.addEventListener('load', function() {

    var conditionimg = document.querySelector('.conditionimg');
    del = 0;

    setTimeout(function() {
        $('.headcontent').addClass('loaded');
    }, 1500);
    if (screen.width > 800 ) {
        var headchange = function() {
            setTimeout(function() {
                conditionimg.style.width = '150px';
            }, del);
            setTimeout(function() {
                conditionimg.style.width = '180px';
            }, del + 5500);


        };
    }

    headchange();
    setInterval(headchange, delay + 8200);
});

function changeLang() {
    document.getElementById("langDrop").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.drp')) {
        var dropdowns = document.getElementsByClassName("langdropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}