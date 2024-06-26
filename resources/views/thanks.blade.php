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
            <img class="giff2" src="{{ asset('img/BettlehymeLogo.gif') }}" width="50" />
            <div class="item-catalog-box-text" style="color: white; margin-top:30px; text-align:center">
                Thanks For Your Input
            </div>
            <a class="form-control" href="/">Back</a>
            
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
