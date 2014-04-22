<?php
    if (isset($_COOKIE['MODERNIZR'])) {
        $MODERNIZR = $_COOKIE['MODERNIZR'];
        return;
    }
?>
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
        <script>
            // Delete unused properties to minimize cookie size
            delete Modernizr._cssomPrefixes;
            delete Modernizr._domPrefixes;
            delete Modernizr._prefixes;
            delete Modernizr._version;
            // Add extras
            navigator.standalone = navigator.standalone || (screen.height-document.documentElement.clientHeight<10); // Polyfill for nav.standalone
            var extras = {
                devicepixelratio: window.devicePixelRatio,
                screenheight: screen.height,
                screenwidth: screen.width,
                windowheight: window.innerHeight,
                windowwidth: window.innerWidth,
                standalone: window.navigator.standalone
            }
            Modernizr.extras = extras;
            $.cookie("MODERNIZR", JSON.stringify(Modernizr), {expires: 7});
            if (navigator.cookieEnabled) {
                location.reload(true);
            } else {
                document.write('<p>Sorry! This site requires cookies :(</p>');
            }
        </script>
    </body>
</html>
<?php die; // IMPORTANT: this line prevents execution from returning to the parent script in cases where cookies are disabled ?>
