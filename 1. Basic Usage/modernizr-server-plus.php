<!doctype html>
<html>
    <head>
        <title>Detecting browser features...</title>
        <script>

            <?php include 'js/modernizr.js' ?>

            ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

            <?php include 'js/jquery.js' ?>

            ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

            <?php include 'js/jquery.cookie.js' ?>

        </script>
    </head>
    <body>
        <noscript>
            <p>Sorry! This site requires javascript :(</p>
        </noscript>
        <p id="no-cookies" style="display:none">Sorry! This site requires cookies :(</p>
        <script>
            $.cookie("MODERNIZR", JSON.stringify(Modernizr), {expires: 7});
            if (navigator.cookieEnabled) {
              location.reload(true);
            } else {
                $('#no-cookies').show();
            }
        </script>
    </body>
</html>

