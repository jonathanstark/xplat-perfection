[this repo contains sample files for a webinar]

Cross-Platform Perfection: What To Do When Media Queries Aren't Enough
====

Traditional RWD techniques work great in many cases, but when you really need that extra level of cross-platform polish, media queries et al will only get you so far. Follow along as Jonathan walks you through a range of tools and techniques that allow you to return highly-optimized, custom HTML, CSS, and JavaScript to users on any device.

[Webinar Video](http://www.oreilly.com/pub/e/3027)

## Talk Outine

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
        * Make lang agnostic version (i.e., just HTML/CSS/JS)
        * Create example that clears the cookie and stores data in session
        * Make lang specific examples (e.g., PHP, Ruby, Python, etc)