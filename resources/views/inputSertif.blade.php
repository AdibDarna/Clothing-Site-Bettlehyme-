<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bettlehyme</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/badi.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body style="margin: 0; padding:0">
    <div id="loadingscreen">
        <img class="giff2" src="{{ asset('img/BettlehymeLogo.gif') }}" width="100" />
    </div>
    <div class="container" style="margin: 0px">
        <div class="box-input">
            <img class="giff2" src="{{ asset('img/BettlehymeLogo.gif') }}" width="100" />
            <div class="item-catalog-box-text" style="color: white; margin-top:30px; text-align:center">
                Enter Your Name Soldier
            </div>
            <form action="/storeSertif" method="post" style="display:flex; flex-direction: column; align-items:center">
                @csrf
                <input type="text" name="random_id" value="{{ $id }}" hidden>
                <div>
                    <input class="form-control" type="text" id="btn" placeholder="Your Name" name="owner" required />
                    <div class="app-tp-wrapper" tabindex="0">
                        <div> <span aria-describedby="tp-container" class="tp-label-text"><img width="30"
                                    src="{{ asset('img/information.svg') }}" /></span>
                            <div class="app-tp" id="tp-container" role="tooltip">
                                <div class="app-tp-inner-wrapper">
                                    <div class="app-tp-header">
                                        <span class="app-tp-prono">Why do Bettlehyme Need My Name?</span>
                                       
                                    </div>
                                    <div class="app-tp-text">
                                        <b>Secret Events</b>, shhhh..., this card will be your ticket to our future secret events, soon we will meet. or you already met us?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                    <button class="form-control-btn" id="btn" type="submit">Accept</button>

                    <div class="tiny-text">{{$versi}} </div>
            </form>
        </div>
    </div>

</body>


<script>
    function initTooltip(tooltipContainer) {
        const trigger = tooltipContainer.classList.contains('app-tp-wrapper') ? tooltipContainer : tooltipContainer
            .querySelector('.app-tp-wrapper');
        const tooltip = tooltipContainer.querySelector('.app-tp');

        // hide the tooltip on escape key press
        trigger.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                trigger.blur();
            }
        });


    }
    // initiate tooltips
    const tooltips = document.querySelectorAll('.app-tp-wrapper');
    tooltips.forEach((tooltip) => {
        initTooltip(tooltip);
    });
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
