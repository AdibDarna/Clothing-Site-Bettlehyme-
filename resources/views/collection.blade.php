<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bettlehyme</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/badi.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="loadingscreen">
        <img class="giff2" src="{{ asset('img/BettlehymeLogo.gif') }}" width="100" />
    </div>
    <div class="con-relative" style="height: 80vh">
        <div class="container">

            <div class="c-topnav">
                <div class="topnav" id="myTopnav">
                    <a href="/">Home</a>
                    <a href="/#collection">Collection</a>
                    <a href="#Welcome-Bettle-Warriors" class="logo" style="margin:0px 15vw"><img class="giff"
                            src="{{ asset('img/BettlehymeLogo.gif') }}" width="60" /></a>
                    <a href="/#milestones">Milestones</a>
                    <a href="/#about">About</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            {{-- Collection --}}
            <div class="section-container">
                <div class="header-section">
                    <img class="star" src="{{ asset('img/star.svg') }}" />
                    COLLECTION
                    <img class="star" src="{{ asset('img/star.svg') }}" />
                </div>
                <a href="/collectionDetail/I" class="box-collection">
                    <div class="box-in-collection">
                        <div class="box-in-text">
                            WAVE I | MODIVAL
                        </div>
                    </div>
                    <div class="box-img-collection">
                        <img class="img-box" src="{{ asset('img/yeaa.png') }}">
                    </div>
                </a>
                <div class="box-collection">
                    <div class="box-in-collection">
                        <div class="box-in-text">
                            WAVE II | <div class="text-deducted"> </div>

                        </div>
                    </div>
                    <div class="box-img-collection">
                        <img class="img-box" src="{{ asset('img/Unknown.gif') }}">
                    </div>
                </div>
                <div class="box-collection">
                    <div class="box-in-collection">
                        <div class="box-in-text">
                            WAVE III |<div class="text-deducted"> </div>
                        </div>
                    </div>
                    <div class="box-img-collection">
                        <img class="img-box" src="{{ asset('img/Unknown.gif') }}">
                    </div>
                </div>
                <div id="milestones"> </div>
            </div>


        </div>

        @include('misc.footer');
    </div>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<script>
    function atvImg() {
        var d = document,
            de = d.documentElement,
            bd = d.getElementsByTagName('body')[0],
            htm = d.getElementsByTagName('html')[0],
            win = window,
            imgs = d.querySelectorAll('.atvImg'),
            totalImgs = imgs.length,
            supportsTouch = 'ontouchstart' in win || navigator.msMaxTouchPoints;

        if (totalImgs <= 0) {
            return;
        }

        for (var l = 0; l < totalImgs; l++) {

            var thisImg = imgs[l],
                layerElems = thisImg.querySelectorAll('.atvImg-layer'),
                totalLayerElems = layerElems.length;

            if (totalLayerElems <= 0) {
                continue;
            }

            while (thisImg.firstChild) {
                thisImg.removeChild(thisImg.firstChild);
            }

            var containerHTML = d.createElement('div'),
                shineHTML = d.createElement('div'),
                shadowHTML = d.createElement('div'),
                layersHTML = d.createElement('div'),
                layers = [];

            thisImg.id = 'atvImg__' + l;
            containerHTML.className = 'atvImg-container';
            shineHTML.className = 'atvImg-shine';
            shadowHTML.className = 'atvImg-shadow';
            layersHTML.className = 'atvImg-layers';

            for (var i = 0; i < totalLayerElems; i++) {
                var layer = d.createElement('div'),
                    imgSrc = layerElems[i].getAttribute('data-img');

                layer.className = 'atvImg-rendered-layer';
                layer.setAttribute('data-layer', i);
                layer.style.backgroundImage = 'url(' + imgSrc + ')';
                layersHTML.appendChild(layer);

                layers.push(layer);
            }

            containerHTML.appendChild(shadowHTML);
            containerHTML.appendChild(layersHTML);
            containerHTML.appendChild(shineHTML);
            thisImg.appendChild(containerHTML);

            var w = thisImg.clientWidth || thisImg.offsetWidth || thisImg.scrollWidth;
            thisImg.style.transform = 'perspective(' + w * 3 + 'px)';

            if (supportsTouch) {
                win.preventScroll = false;

                (function(_thisImg, _layers, _totalLayers, _shine) {
                    thisImg.addEventListener('touchmove', function(e) {
                        if (win.preventScroll) {
                            e.preventDefault();
                        }
                        processMovement(e, true, _thisImg, _layers, _totalLayers, _shine);
                    });
                    thisImg.addEventListener('touchstart', function(e) {
                        win.preventScroll = true;
                        processEnter(e, _thisImg);
                    });
                    thisImg.addEventListener('touchend', function(e) {
                        win.preventScroll = false;
                        processExit(e, _thisImg, _layers, _totalLayers, _shine);
                    });
                })(thisImg, layers, totalLayerElems, shineHTML);
            } else {
                (function(_thisImg, _layers, _totalLayers, _shine) {
                    thisImg.addEventListener('mousemove', function(e) {
                        processMovement(e, false, _thisImg, _layers, _totalLayers, _shine);
                    });
                    thisImg.addEventListener('mouseenter', function(e) {
                        processEnter(e, _thisImg);
                    });
                    thisImg.addEventListener('mouseleave', function(e) {
                        processExit(e, _thisImg, _layers, _totalLayers, _shine);
                    });
                })(thisImg, layers, totalLayerElems, shineHTML);
            }
        }

        function processMovement(e, touchEnabled, elem, layers, totalLayers, shine) {

            var bdst = bd.scrollTop || htm.scrollTop,
                bdsl = bd.scrollLeft,
                pageX = (touchEnabled) ? e.touches[0].pageX : e.pageX,
                pageY = (touchEnabled) ? e.touches[0].pageY : e.pageY,
                offsets = elem.getBoundingClientRect(),
                w = elem.clientWidth || elem.offsetWidth || elem.scrollWidth,
                h = elem.clientHeight || elem.offsetHeight || elem.scrollHeight,
                wMultiple = 320 / w,
                offsetX = 0.52 - (pageX - offsets.left - bdsl) / w,
                offsetY = 0.52 - (pageY - offsets.top - bdst) / h,
                dy = (pageY - offsets.top - bdst) - h / 2,
                dx = (pageX - offsets.left - bdsl) - w / 2,
                yRotate = (offsetX - dx) * (0.07 * wMultiple),
                xRotate = (dy - offsetY) * (0.1 * wMultiple),
                imgCSS = 'rotateX(' + xRotate + 'deg) rotateY(' + yRotate + 'deg)',
                arad = Math.atan2(dy, dx),
                angle = arad * 180 / Math.PI - 90;

            if (angle < 0) {
                angle = angle + 360;
            }

            if (elem.firstChild.className.indexOf(' over') != -1) {
                imgCSS += ' scale3d(1.07,1.07,1.07)';
            }
            elem.firstChild.style.transform = imgCSS;

            shine.style.background = 'linear-gradient(' + angle + 'deg, rgba(255,255,255,' + (pageY - offsets.top -
                bdst) / h * 0.4 + ') 0%,rgba(255,255,255,0) 80%)';
            shine.style.transform = 'translateX(' + (offsetX * totalLayers) - 0.1 + 'px) translateY(' + (offsetY *
                totalLayers) - 0.1 + 'px)';

            var revNum = totalLayers;
            for (var ly = 0; ly < totalLayers; ly++) {
                layers[ly].style.transform = 'translateX(' + (offsetX * revNum) * ((ly * 2.5) / wMultiple) +
                    'px) translateY(' + (offsetY * totalLayers) * ((ly * 2.5) / wMultiple) + 'px)';
                revNum--;
            }
        }

        function processEnter(e, elem) {
            elem.firstChild.className += ' over';
        }

        function processExit(e, elem, layers, totalLayers, shine) {

            var container = elem.firstChild;

            container.className = container.className.replace(' over', '');
            container.style.transform = '';
            shine.style.cssText = '';

            for (var ly = 0; ly < totalLayers; ly++) {
                layers[ly].style.transform = '';
            }

        }

    }

    atvImg();
</script>

<script>
    // Remove the transition class
    const square = document.querySelector('.text-header');
    square.classList.remove('text-header-transition');

    // Create the observer, same as before:
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                square.classList.add('text-header-transition');
                return;
            }

            square.classList.remove('text-header-transition');
        });
    });
    observer.observe(document.querySelector('.text-wrapper'));
</script>
<script>
    // Remove the transition class
    const kartu = document.querySelector('.card');
    kartu.classList.remove('card-transition');

    // Create the observer, same as before:
    const observer2 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                kartu.classList.add('card-transition');
                return;
            }

            kartu.classList.remove('card-transition');
        });
    });
    observer2.observe(document.querySelector('.container-card'));
</script>


<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 200) {
                $(".topnav").addClass("change_color");
            } else {
                $(".topnav").removeClass("change_color");
            }
        })
    })
</script>

<script>
    $(window).scrollTop(0);
    $(window).on('load', function() {
        $('#loadingscreen').fadeOut(500);
        //   $('body').style.overflow="visible";
        document.body.style.overflow = "visible";

    });
</script>

</html>
