NOTE: This repo is a set of example files originally created for [this webinar](http://www.oreilly.com/pub/e/3027))

Cross-Platform Perfection: What To Do When Media Queries Aren't Enough
====

Traditional RWD techniques work great in many cases, but when you really need that extra level of cross-platform polish, media queries et al will only get you so far. Follow along as Jonathan walks you through a range of tools and techniques that allow you to return highly-optimized, custom HTML, CSS, and JavaScript to users on any device.

## Talk Outline

* Problem: You want to send highly optimized HTML/CSS/JS
    * Why? Two main reasons:
        * Increase performance
        * Simplify logic
    * Example cases:
        * PNG fallbacks for SVG graphics
        * Image fallbacks for autoplay videos
        * Screen-specific image sizes
        * AppCache only in standalone mode
* Possible Solutions (you may have heard of...)
    * [RESS](http://www.lukew.com/ff/entry.asp?1392)
    * [WURFL](http://wurfl.sourceforge.net/)
    * [Modernizr server](http://tripleodeon.com/2010/10/modernizr-on-the-server-side/)
    * Manual sniffing UA
* Modernizr Server Plus
    * Pros
        * Simple to understand
        * Simple to use
        * Can be self contained
    * Cons
        * Requires a page refresh
            * Possible negative effects on SEO?
        * Requires cookies
        * Requires javascript
    * TODOS
        * ~~Remove jQuery dependency~~
        * ~~Make lang agnostic version (i.e., just HTML/CSS/JS)~~
        * ~~Create example that clears the cookie and stores data in session~~
        * Check for googlebot requests
        * Check for facebook share requests
        * Make lang specific examples (e.g., Ruby, Python, etc)
