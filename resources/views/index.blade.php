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
    <div class="con-relative">
        <div class="container">
            <div class="c-topnav">

                <div class="topnav" id="myTopnav">
                    <a href="/">Home</a>
                    <a href="#collection">Collection</a>
                    <a href="#Welcome Bettle Warriors" class="logo" style="margin:0px 15vw"><img class="giff"
                            src="{{ asset('img/BettlehymeLogo.gif') }}" width="60" /></a>
                    <a href="#milestones">Milestones</a>
                    <a href="#about">About</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            <div id="landing">
                <div class="borderLanding">
                    <img class="img-sub1" src="{{ asset('img/knight1.png') }}" />
                    <img class="img-sub2" src="{{ asset('img/ye1.png') }}" />
                    <a href="/collectionDetail/I" class="btn-collection">
                        See Collection >
                    </a>
                    <div class="text-header-landing">
                        WAVE I
                    </div>
                    <div class="text-sub-landing">
                        MODIVAL
                    </div>
                </div>
                <div class="box-shopee">
                    <b class="text-shopee"><i>Buy Our Stuff</i> </b>
                    <a href="https://shopee.co.id/bettlehyme" target="_blank" class="btn-shopee">Shopee</a>
                </div>
                <div id="collection"> </div>
            </div>

            {{-- Collection --}}
            <hr class="grey-line">
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
                            WAVE III |
                            <div class="text-deducted"> </div>
                        </div>
                    </div>
                    <div class="box-img-collection">
                        <img class="img-box" src="{{ asset('img/Unknown.gif') }}">
                    </div>
                </div>
                <div style="margin-top: 100px">
                    <a href="/collection" class="btn-collection">
                        More >
                    </a>
                </div>
                <div id="milestones"> </div>
            </div>

            <hr class="grey-line">
            <div class="section-container">
                
                <div class="container-flip-card">
                    <div class="flip-text">
                        <div class="header-section">
                            
                            IMPORTANT
                            <img class="star" src="{{ asset('img/star.svg') }}" />
        
                        </div>
                        <p>Scan the barcode on the other side of the card and claim your place on our community. we'll
                            have
                            much more events in the future. keep your card safe. </p>
                    </div>
                    <div class="flip-card-outter" >
                        <div class="flip-card" tabIndex="0">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ asset('img/Knight-sertif.png') }}" />
                                </div>
                                <div class="flip-card-back">
                                    <img src="{{ asset('img/Sertif-Back.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Milestone --}}
            <hr class="grey-line">
            <div class="section-container">
                
                <div class="container-miles">
                    <div class="flip-text">
                        <div class="header-section">
                            
                            MILESTONES
                            <img class="star" src="{{ asset('img/star.svg') }}" />
        
                        </div>
                    <p >
                        <i class="flip-text" style="color: rgb(177, 49, 49);">We will grow together</i  >
                        
                        <br>
                        We are trying to set and reach our milestone everyday,
                        every step we took you could participate in
                        it. Milestone in our reach.
                    </p>
                    </div>
                    <div class="flip-text">

                        <div class="text-milestone">
                            <div class="crossout"> Launch Our Store </div><div class="box-check-empty"><div class="box-check"> </div></div>
                        </div>

                        <div class="text-milestone">
                            Recruit 1000 Soldiers<div class="box-check-empty"></div>
                        </div>

                        <div class="text-milestone">
                            Make Platform for Our Sakes<div class="box-check-empty"></div>
                        </div>

                        <div class="text-milestone">
                            Get an Office<div class="box-check-empty"></div>
                        </div>

                        <div class="text-milestone">
                            <div class="text-m-empty"></div><div class="box-check-empty"></div>
                        </div>
                        <div class="text-milestone">
                            <div class="text-m-empty"></div><div class="box-check-empty"></div>
                        </div>

                    </div>
                </div>
                <div id="about"> </div>

            </div>

            {{-- About --}}
            <hr class="grey-line">
            <div class="section-container">
               
                <div class="container-about">
                    <div style="display: flex; flex-direction: column; width:100%" >
                        <div class="header-section">
                           
                            ABOUT
                            <img class="star" src="{{ asset('img/star.svg') }}" />
                        </div>
                        <b class="flip-text" style="color: rgb(177, 49, 49);">The Crew</b>
                        <p class="flip-text" style="width: 100%">
                            Bettlehyme was created by three pals with one target to make a brand that stands and
                            community
                            that conquer the fukin earth
                        </p>
                        <b class="flip-text" style="color: rgb(177, 49, 49);">ASH</b>
                        <b class="flip-text" style="color: rgb(177, 49, 49);">RAVEN</b>
                        <b class="flip-text" style="color: rgb(177, 49, 49);">DARKGOSHAWK</b>
                    </div>
                    <div class="container2">
                        <div class="cover atvImg">
                            <div class="atvImg-layer" data-img="{{ asset('img/gradient.gif') }}"></div>
                            <div class="atvImg-layer" data-img="{{ asset('img/Adib.png') }}"></div>
                        </div>

                        <div class="cover atvImg">
                            <div class="atvImg-layer" data-img="{{ asset('img/gradient.gif') }}"></div>
                            <div class="atvImg-layer" data-img="{{ asset('img/Rezky.png') }}"></div>
                        </div>
                        <div class="cover atvImg">
                            <div class="atvImg-layer" data-img="{{ asset('img/gradient.gif') }}"></div>
                            <div class="atvImg-layer" data-img="{{ asset('img/Dimas.png') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="grey-line">
            <div class="section-container-comment">
                <h5>Leave your critiques and suggestion here</h5>
                <form action="/inputcomment" method="POST"
                    style="display: flex; flex-direction:column; align-items:center">
                    @csrf
                    <input class="form-control" type="email" name="email" placeholder="Enter Your Email"
                        required>
                    <textarea class="form-control" name="comment" placeholder="Comment Here" required></textarea>
                    <button class="form-control" style="background-color: white; color:black;"
                        type="submit">Send</button>

                </form>
            </div>

            <hr class="grey-line">



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
