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
    <div class="linktree">
        <img class="giff" src="{{ asset('img/BettlehymeLogo.gif') }}"/>
        <a href="https://shopee.co.id/bettlehyme" target="_blank">Shopee</a>
        <a href="/">Website</a>
        <a href="https://www.instagram.com/bettlehyme/" target="_blank">Store</a>
        <a href="https://www.instagram.com/bettlehyme.catalog/" target="_blank">Catalogue</a>

    </div>


</body>
<script>
    $(window).scrollTop(0);
    $(window).on('load', function() {
        $('#loadingscreen').fadeOut(500);
        //   $('body').style.overflow="visible";
        document.body.style.overflow = "visible";

    });
</script>

</html>
