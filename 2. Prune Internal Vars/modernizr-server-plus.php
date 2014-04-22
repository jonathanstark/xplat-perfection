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
            $.cookie("MODERNIZR", JSON.stringify(Modernizr), {expires: 7});
            if (navigator.cookieEnabled) {
              location.reload(true);
            } else {
                document.write('<p>Sorry! This site requires cookies :(</p>');
            }
        </script>
    </body>
</html>

